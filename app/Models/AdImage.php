<?php
namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Ad;

class AdImage extends Model
{

    protected $fillable = [ 'ad_id', 'image', 'main', 'info'];

    protected $table = 'ad_images';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $adImagePropsArray = [];

    protected static $uploads_ad_dir = 'ads/-ad-'; // file:///_wwwroot/lar/ads-backend-api/storage/app/public/ads/-ad-1/61cEZcXF8HL._SL1200_.jpg
    protected $image_filename_max_length = 100;


    protected static function boot() {
        parent::boot();
        static::deleting(function($adImage) {
            $ad_image_path= AdImage::getAdImagePath($adImage->ad_id, $adImage->image);
            \Log::info('$ad_image_path ::');
            \Log::info(print_r( $ad_image_path , true  ));

            deleteFileByPath($ad_image_path, true);

        });
    }



    public function ad(){
        return $this->belongsTo('App\Models\Ad', 'ad_id','id');
    }

    public function scopeGetByAdId($query, $ad_id= null)
    {
        if (!empty($ad_id)) {
            if ( is_array($ad_id) ) {
                $query->whereIn(with(new AdImage)->getTable().'.ad_id', $ad_id);
            } else {
                $query->where(with(new AdImage)->getTable().'.ad_id', $ad_id);
            }
        }
        return $query;
    }


    public function scopeGetByMain($query, $main = null)
    {
        if (!isset($main) or strlen($main) == 0) {
            return $query;
        }
        return $query->where(with(new AdImage)->getTable().'.main', $main);
    }




    public function getImageFilenameMaxLength(): int
    {
        return $this->image_filename_max_length;
    }

    public static function getAdDir(int $ad_id): string
    {
        return self::$uploads_ad_dir . $ad_id . '/';
    }

    public static function getAdImagePath(int $ad_id, $image): string
    {
        if (empty($image)) {
            return '';
        }

        return self::$uploads_ad_dir . $ad_id . '/' . $image;
    }


    public static function readAdImageProps(int $ad_id, string $image = null, bool $skip_non_existing_file = false): array
    {
//        \Log::info('++ readAdImageProps$image ::');
//        \Log::info( $image );
//        \Log::info('++ readAdImageProps $ad_id ::');
//        \Log::info( $ad_id );

        if (empty($image) and $skip_non_existing_file) {
            return [];
        }


        $app_root_url = config('app.url');
        $dir_path       = self::$uploads_ad_dir . '' . $ad_id . '';
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
            $image = with(new Ad)->getFilenameBasename($file_full_path);
        }

        $image_path = $file_full_path;
//        \Log::info('$image_path ::');
//        \Log::info($image_path);

        if ($file_exists) {
            $imagePropsArray = [ 'image' => $image, 'image_path' => $image_path, 'image_url' => prefixHttpProtocol($app_root_url.Storage::url
                ($file_full_path))];
            $image_full_path = ($image_path);
            $adImgProps = getCFImageProps(base_path() . '/storage/app/public/' . $image_full_path, $imagePropsArray);
//            \Log::info('$image_path ::');
//            \Log::info($image_path);
        } else {
            $adImgProps = [ 'image' => $image, 'image_path' => $image_path, 'image_url' => prefixHttpProtocol($app_root_url.$file_full_path) ];
        }

        return $adImgProps;

    }

    public static function getValidationRulesArray() : array
    {
        $validationRulesArray = [
//            'ad_id'        => 'required|exists:'.( with(new User)->getTable() ).',id',
            'ad_id'        => 'required|exists:'.( with(new Ad)->getTable() ).',id',
        ];
        /*
        поле	Тип	Комментарий
        id	bigint(20) unsigned Автоматическое приращение
        ad_id	bigint(20) unsigned
        image	varchar(100)
        main	tinyint(1) [0]
        info	varchar(255)
        created_at	timestamp [CURRENT_TIMESTAMP]
        updated_at	timestamp NULL */
        return $validationRulesArray;
    }


    /* get additional properties of ad image : path, url, size etc... */
    public function getAdImagePropsAttribute() : array
    {
        return $this->adImagePropsArray;
    }

    /* set additional properties of ad image : path, url, size etc... */
    public function setAdImagePropsAttribute(array $adImagePropsArray)
    {
        $this->adImagePropsArray = $adImagePropsArray;
    }


}
