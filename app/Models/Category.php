<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Cviebrock\EloquentSluggable\Sluggable;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class Category extends Model
{
    use Sluggable;

    protected $table = 'categories';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $categoryImagePropsArray = [];

    protected static $uploads_category_dir = 'categories/-category-';
    // file:///_wwwroot/lar/AdsBackend8/storage/app/public/categories/-category-1/laptops.jpg

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'description', 'image'
    ];

    public function sluggable() : array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('name', 'asc');
        });

        static::deleting(function($category) {
            $categoryImageImagePath = Category::getCategoryImagePath($category->id, $category->image);
            deleteFileByPath($categoryImageImagePath, true);
        });

        static::updating(function($categoryItem) {
            $slug = SlugService::createSlug(Ad::class, 'slug', $categoryItem->name);
            $categoryItem->slug = Str::slug($slug);
        });

    }

    public function scopeGetByName($query, $name = null)
    {
        if (empty($name)) {
            return $query;
        }
        return $query->where( with(new Category)->getTable() . '.name', 'like', '%'.$name.'%');
    }


    public function scopeGetBySlug($query, $slug = null)
    {
        if (empty($slug)) {
            return $query;
        }
        return $query->where(with(new Category)->getTable() . '.slug', $slug);
    }

    public function adCategories()
    {
        return $this->hasMany('App\Models\AdCategory', 'category_id', 'id');
    }


    public static function getCategoryDir(int $category_id): string
    {
        return self::$uploads_category_dir . $category_id . '/';
    }

    public static function getCategoryImagePath(int $category_id, $image): string
    {
        if (empty($image)) {
            return '';
        }

        return self::$uploads_category_dir . $category_id . '/' . $image;
    }

    public static function readCategoryImageProps(int $category_id, string $image = null, bool $skip_non_existing_file = false): array
    {
//        \Log::info('++ readCategoryImageProps$image ::');
//        \Log::info( $image );
//
//        \Log::info('++ readCategoryImageProps $category_id ::');
//        \Log::info( $category_id );

        if (empty($image) and $skip_non_existing_file) {
            return [];
        }

        $app_root_url = config('app.url');
        $dir_path       = self::$uploads_category_dir . '' . $category_id . '';
        $file_full_path = $dir_path . '/' . $image;
//        \Log::info('$file_full_path ::');
//        \Log::info($file_full_path);

        $file_exists = ( ! empty($image) and Storage::disk('local')->exists('public/' . $file_full_path));

//        \Log::info('$file_exists ::');
//        \Log::info($file_exists);

        if ( ! $file_exists) {
            if ($skip_non_existing_file) {
                return [];
            }
            $file_full_path = config('app.empty_img_url');
            $image = with(new Category)->getFilenameBasename($file_full_path);
        }

        $image_path = $file_full_path;
//        \Log::info('$image_path ::');
//        \Log::info($image_path);

        if ($file_exists) {
            $imagePropsArray = [ 'image' => $image, 'image_path' => $image_path, 'image_url' => prefixHttpProtocol($app_root_url.Storage::url
                ($file_full_path))];
            $image_full_path = ($image_path);
            $categoryImgProps = getCFImageProps(base_path() . '/storage/app/public/' . $image_full_path, $imagePropsArray);
//            \Log::info('$image_path ::');
//            \Log::info($image_path);
        } else {
            $categoryImgProps = [ 'image' => $image, 'image_path' => $image_path, 'image_url' => prefixHttpProtocol($app_root_url.$file_full_path) ];
        }

        return $categoryImgProps;

    }

    public function getAvatarFilenameMaxLength(): int
    {
        return $this->avatar_filename_max_length;
    }


    /* check if provided name is unique for categories.name field */
    public static function getSimilarCategoryByName( string $name, int $id= null, bool $return_count = false )
    {
        $quoteModel = Category::where( 'name', $name );
        if ( !empty( $id ) ) {
            $quoteModel = $quoteModel->where( 'id', '!=' , $id );
        }
        if ( $return_count ) {
            return $quoteModel->get()->count();
        }
        $retRow= $quoteModel->get();
        if ( empty($retRow[0]) ) return false;
        return $retRow[0];
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = workTextString($value);
    }



//    /* check if provided name is unique for category.name field */
//    public static function getSimilarCategoryByName( string $name, int $id= null, bool $return_count = false )
//    {
//        $quoteModel = Category::where( 'name',  $name );
//        if ( !empty( $id ) ) {
//            $quoteModel = $quoteModel->where( 'id', '!=' , $id );
//        }
//        if ( $return_count ) {
//            return $quoteModel->get()->count();
//        }
//        $retRow= $quoteModel->get();
//        if ( empty($retRow[0]) ) return false;
//        return $retRow[0];
//    }

    public static function getValidationRulesArray($category_id= null) : array
    {
        $validationRulesArray = [
            'name' => [
                'required',
                'string',
                'max:50',
                Rule::unique(with(new Category)->getTable())->ignore($category_id),
            ],
            'description'      => 'required',
            'image'            => 'nullable',
        ];
        return $validationRulesArray;
    } // public static function getValidationRulesArray($category_id= null) : array

    /* get additional properties of ad image : path, url, size etc... */
    public function getCategoryImagePropsAttribute() : array
    {
        return $this->categoryImagePropsArray;
    }

    /* set additional properties of ad image : path, url, size etc... */
    public function setCategoryImagePropsAttribute(array $categoryPropsArray)
    {
        $this->categoryImagePropsArray = $categoryPropsArray;
    }


}
