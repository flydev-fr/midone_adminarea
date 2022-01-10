<?php
namespace App\Models;


use App\Models\Ad;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class AdLocation extends Model
{


    protected $fillable = [ 'ad_id', 'location', 'lat', 'lng', 'color', 'ordering', 'country', 'content', 'opened', 'featured', 'image', 'image_info'];
    protected $table = 'ad_locations';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected static $uploads_ad_dir = 'ad-locations/-ad-location-';
    protected $image_filename_max_length = 100;


    private static $openedLabelValueArray = [ '1'=>'Yes, opened', '0'=>'No'];
    public static function getOpenedValueArray($key_return = true): array
    {
        if(!$key_return) {
            return self::$openedLabelValueArray;
        }
        $resArray = [];
        foreach (self::$openedLabelValueArray as $key => $value) {
            if ($key_return) {
                $resArray[] = ['key' => $key, 'label' => $value];
            }
        }
        return $resArray;
    }
    public static function getOpenedLabel(string $opened): string
    {
        if ( ! empty(self::$openedLabelValueArray[$opened])) {
            return self::$openedLabelValueArray[$opened];
        }
        return self::$openedLabelValueArray[0];
    }



    private static $featuredLabelValueArray = [ '1'=>'Yes, featured', '0'=>'No'];
    public static function getFeaturedValueArray($key_return = true): array
    {
        if(!$key_return) {
            return self::$featuredLabelValueArray;
        }
        $resArray = [];
        foreach (self::$featuredLabelValueArray as $key => $value) {
            if ($key_return) {
                $resArray[] = ['key' => $key, 'label' => $value];
            }
        }
        return $resArray;
    }
    public static function getFeaturedLabel(string $featured): string
    {
        if ( ! empty(self::$featuredLabelValueArray[$featured])) {
            return self::$featuredLabelValueArray[$featured];
        }
        return self::$featuredLabelValueArray[0];
    }



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
                $query->whereIn(with(new AdLocation)->getTable().'.ad_id', $ad_id);
            } else {
                $query->where(with(new AdLocation)->getTable().'.ad_id', $ad_id);
            }
        }
        return $query;
    }


    public function scopeGetByOpened($query, $opened = null)
    {
        if (!isset($opened) or strlen($opened) == 0) {
            return $query;
        }
        return $query->where(with(new AdLocation)->getTable().'.opened', $opened);
    }


    public function getImageFilenameMaxLength(): int
    {
        return $this->image_filename_max_length;
    }

    public static function getAdDir(int $ad_id): string
    {
        return self::$uploads_ad_dir . $ad_id . '/';
    }

    public static function getAdLocationPath(int $ad_id, $image): string
    {
        if (empty($image)) {
            return '';
        }

        return self::$uploads_ad_dir . $ad_id . '/' . $image;
    }


    public static function readAdLocationImageProps(int $ad_id, string $image = null, bool $skip_non_existing_file = false): array
    {
//        \Log::info('++ readAdLocationImageProps$image ::');
//        \Log::info( $image );
//
//        \Log::info('++ readAdLocationImageProps $ad_id ::');
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
//
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
            'ad_id'        => 'required|exists:'.( with(new Ad)->getTable() ).',id',
            'location'     => 'required|max:255',
//            'lat'          => 'required|regex:/^\d+(\.\d{1,7})?$/',
//            'lng'          => 'required|regex:/^\d+(\.\d{1,7})?$/',

            'lat' => ['required','regex:/^[-]?(([0-8]?[0-9])\.(\d+))|(90(\.0+)?)$/'],
            'lng' => ['required','regex:/^[-]?((((1[0-7][0-9])|([0-9]?[0-9]))\.(\d+))|180(\.0+)?)$/'],
            'ordering'     => 'required|integer',
            'color'        => 'required|max:7',
            'country'      => 'required|min:2|max:2',
            'content'      => 'required|max:255',
            'featured'     => 'required|in:' . '0,1',
            'opened'       => 'required|in:' . '0,1',
            'image'        => 'nullable|max:100',
            'image_info'   => 'nullable|max:255',
        ];

        return $validationRulesArray;
    }

}
