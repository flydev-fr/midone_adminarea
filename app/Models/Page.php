<?php
namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use DB;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class Page extends Model
{
    use Sluggable;
    protected $table = 'pages';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected static $uploads_page_dir = 'pages/-page-';

    public function sluggable() : array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'slug', 'content', 'content_shortly', 'creator_id', 'published', 'published', 'image', 'meta_description', 'meta_keywords'
    ];

    public function creator(){
        return $this->belongsTo('App\Models\User', 'creator_id','id');
    }

    public function scopeGetByTitle($query, $title = null)
    {
        if (empty($title)) {
            return $query;
        }
        return $query->where( with(new Page)->getTable() . '.title', 'like', '%'.$title.'%');
    }

    public function scopeGetBySlug($query, $slug = null)
    {
        if (empty($slug)) {
            return $query;
        }
        return $query->where(with(new Page)->getTable() . '.slug', $slug);
    }

    public function scopeGetByIsHomepage($query, $is_homepage = null)
    {
        if (!isset($is_homepage) or strlen($is_homepage) == 0) {
            return $query;
        }
        return $query->where(with(new Page)->getTable().'.is_homepage', $is_homepage);
    }



    public function scopeGetByPublished($query, $published = null)
    {
        if (!isset($published) or strlen($published) == 0) {
            return $query;
        }
        return $query->where(with(new Page)->getTable().'.published', $published);
    }

    public function scopeOnlyPublished($query) {
        return $query->where('published', true);
    }


    public static function getPageDir(int $page_id): string
    {
        return self::$uploads_page_dir . $page_id . '/';
    }

    public static function getPageImagePath(int $page_id, $image): string
    {
        if (empty($image)) {
            return '';
        }

        return self::$uploads_page_dir . $page_id . '/' . $image;
    }

    public static function readPageImageProps(int $page_id, string $image = null, bool $skip_non_existing_file = false): array
    {
//        \Log::info('++ readPageImageProps$image ::');
//        \Log::info( $image );
//
//        \Log::info('++ readPageImageProps $page_id ::');
//        \Log::info( $page_id );

        if (empty($image) and $skip_non_existing_file) {
            return [];
        }


        $app_root_url = config('app.url');
        $dir_path       = self::$uploads_page_dir . '' . $page_id . '';
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
            $image = with(new Page)->getFilenameBasename($file_full_path);
        }

        $image_path = $file_full_path;
//        \Log::info('$image_path ::');
//        \Log::info($image_path);

        if ($file_exists) {
            $imagePropsArray = [ 'image' => $image, 'image_path' => $image_path, 'image_url' => prefixHttpProtocol($app_root_url.Storage::url
                ($file_full_path))];
            $image_full_path = ($image_path);
            $pageImgProps = getCFImageProps(base_path() . '/storage/app/public/' . $image_full_path, $imagePropsArray);
//            \Log::info('$image_path ::');
//            \Log::info($image_path);
        } else {
            $pageImgProps = [ 'image' => $image, 'image_path' => $image_path, 'image_url' => prefixHttpProtocol($app_root_url.$file_full_path) ];
        }

        return $pageImgProps;

    }

    public function getAvatarFilenameMaxLength(): int
    {
        return $this->avatar_filename_max_length;
    }


    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = workTextString($value);
    }

    public static function getPageValidationRulesArray($page_id= null, array $skipFieldsArray= []) : array
    {
        $validationRulesArray = [
            'title' => [
                'required',
                'string',
                'max:255',
                Rule::unique(with(new Page)->getTable())->ignore($page_id),
            ],
            'content'           => 'required',
            'content_shortly'   => 'nullable',
            'meta_description'  => 'nullable',
            'meta_keywords'     => 'nullable',
            'image'             => 'nullable|max:100',

            'published'         => 'required|in:' . '0,1',
            'is_homepage'       => 'required|in:' . '0,1',
            'creator_id'        => 'required|integer|exists:' . (with(new User)->getTable()) . ',id',
        ];

        foreach( $skipFieldsArray as $next_field ) {
            if(!empty($validationRulesArray[$next_field])) {
                unset($validationRulesArray[$next_field]);
            }
        }

        return $validationRulesArray;
    } // public static function getPageValidationRulesArray($page_id) : array



}
