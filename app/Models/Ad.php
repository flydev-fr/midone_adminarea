<?php
namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;
use Cviebrock\EloquentSluggable\Sluggable;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class Ad extends Model
{
    use Sluggable;
    use HasFactory;

    protected $table = 'ads';
    protected $primaryKey = 'id';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'slug', 'phone_display', 'has_locations', 'published', 'status', 'price', 'ad_type', 'expire_date', 'description', 'creator_id', 'updated_at' ];

    public function sluggable() : array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    private static $hasLocationsLabelValueArray = [ '1'=>'Yes, has locations', '0'=>'No'];
    public static function getHasLocationsValueArray($key_return = true): array
    {
        if(!$key_return) {
            return self::$hasLocationsLabelValueArray;
        }
        $resArray = [];
        foreach (self::$hasLocationsLabelValueArray as $key => $value) {
            if ($key_return) {
                $resArray[] = ['key' => $key, 'label' => $value];
            }
        }
        return $resArray;
    }
    public static function getHasLocationsLabel(string $has_locations): string
    {
        if ( ! empty(self::$hasLocationsLabelValueArray[$has_locations])) {
            return self::$hasLocationsLabelValueArray[$has_locations];
        }
        return self::$hasLocationsLabelValueArray[0];
    }


    private static $phoneDisplayLabelValueArray = [ '1'=>'Yes, display phone', '0'=>'No'];
    public static function getPhoneDisplayLabelValueArray($key_return = true): array
    {
        if(!$key_return) {
            return self::$phoneDisplayLabelValueArray;
        }
        $resArray = [];
        foreach (self::$phoneDisplayLabelValueArray as $key => $value) {
            if ($key_return) {
                $resArray[] = ['key' => $key, 'label' => $value];
            }
        }
        return $resArray;
    }
    public static function getPhoneDisplayLabel(string $phone_display): string
    {
        if ( ! empty(self::$phoneDisplayLabelValueArray[$phone_display])) {
            return self::$phoneDisplayLabelValueArray[$phone_display];
        }
        return self::$phoneDisplayLabelValueArray[0];
    }



    private static $adTypeLabelValueArray = [ 'B'=>'Buy', 'S'=>'Sell'];
    public static function getAdTypeLabelValueArray($key_return = true): array
    {
        if(!$key_return) {
            return self::$adTypeLabelValueArray;
        }
        $resArray = [];
        foreach (self::$adTypeLabelValueArray as $key => $value) {
            if ($key_return) {
                $resArray[] = ['key' => $key, 'label' => $value];
            }
        }
        return $resArray;
    }
    public static function getAdTypeLabel(string $ad_type): string
    {
        if ( ! empty(self::$adTypeLabelValueArray[$ad_type])) {
            return self::$adTypeLabelValueArray[$ad_type];
        }
        return self::$adTypeLabelValueArray[0];
    }


    private static $statusLabelValueArray = ['D' => 'Draft', 'A' => 'Active', 'C' => 'Cancelled', 'O'=>'Closed', 'B'=>'Banned'];

    public static function getStatusLabelValueArray($key_return = true): array
    {
        if(!$key_return) {
            return self::$statusLabelValueArray;
        }
        $resArray = [];
        foreach (self::$statusLabelValueArray as $key => $value) {
            if ($key_return) {
                $resArray[] = ['key' => $key, 'label' => $value];
            }
        }
        return $resArray;
    }
    public static function getStatusLabel(string $status): string
    {
        if ( ! empty(self::$statusLabelValueArray[$status])) {
            return self::$statusLabelValueArray[$status];
        }
        return self::$statusLabelValueArray[0];
    }

    protected static function boot()
    {

        parent::boot();

        self::creating(function ($model) {
            $model->uuid = (string)\Uuid::generate();   }
        );

        static::deleting(function($ad) {
            \Log::info(  varDump(-12, ' -1 boot deleting ::') );
            foreach ( $ad->adImages()->get() as $nextAdImage ) {
                $ad_image_image_path = AdImage::getAdImagePath($nextAdImage->ad_id, $nextAdImage->image);
//                deleteFileByPath($ad_image_image_path, true); // TODO UNCONMMENT
            }

            foreach ( $ad->adCategories()->get() as $nextAdCategory ) {
                $nextAdCategory->delete();
            }

            foreach ( $ad->adReportAbuses()->get() as $nextAdReportAbuse ) {
                $nextAdReportAbuse->delete();
            }

            foreach ( $ad->adComments()->get() as $nextAdComment ) {
                $nextAdComment->delete();
            }

            foreach ( $ad->adImages()->get() as $nextAdImage ) {
                $nextAdImage->delete();
            }

            foreach ( $ad->adLocations()->get() as $nextAdLocation ) {
                $nextAdLocation->delete();
            }

            /*
                public function adImages()
    {
        return $this->hasMany('App\Models\AdImage', 'ad_id', 'id')->orderBy('main', 'desc');
    }

    public function adLocations() // AdLocation
    {
        return $this->hasMany('App\Models\AdLocation', 'ad_id', 'id');
    }


             */
        });

        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('price', 'desc');
        });

        static::updating(function($adItem) {
            \Log::info(  varDump($adItem, ' -1 static::updating(function($adItem) { $adItem::') );

            $currentAd = Ad
                ::getById($adItem->id)
                ->first();

            if(!empty($currentAd)) {
                if($currentAd->name != $adItem->name) {
                    \Log::info(  varDump($p1, ' -1 static::updating(function($adItem) { $p1::') );
                    $slug = SlugService::createSlug(Ad::class, 'slug', $adItem->title);
                    $adItem->slug = Str::slug($slug);
                }
            }
        });

    }

    public function scopeGetById($query, $id = null)
    {
        if (empty($id)) {
            return $query;
        }
        return $query->where(with(new Ad)->getTable() . '.id', $id);
    }

    public function scopeGetBySlug($query, $slug = null)
    {
        if (empty($slug)) {
            return $query;
        }
        return $query->where(with(new Ad)->getTable() . '.slug', $slug);
    }

    public function scopeGetByCreatorId($query, $creator_id = null)
    {
        if (empty($creator_id)) {
            return $query;
        }
        return $query->where(with(new Ad)->getTable() . '.creator_id', $creator_id);
    }

    public function adCategories()
    {
        return $this->hasMany('App\Models\AdCategory', 'ad_id', 'id');
    }

    public function adReportAbuses()
    {
        return $this->hasMany('App\Models\AdReportAbuse', 'ad_id', 'id')->orderBy('created_at', 'desc');
    }

    public function adComments()
    {
        return $this->hasMany('App\Models\AdComment', 'ad_id', 'id')->orderBy('created_at', 'desc');
    }

    public function latestAdComment()
    {
        return $this->hasOne('App\Models\AdComment')->latest();
    }


    public function MainImage()
    {
        return $this->hasOne('App\Models\AdImage')->where(with(new AdImage)->getTable().'.main', true)->orderBy('main', 'desc');
    }

    public function creator(){
        return $this->belongsTo('App\Models\User', 'creator_id','id');
    }

    public function adImages()
    {
        return $this->hasMany('App\Models\AdImage', 'ad_id', 'id')->orderBy('main', 'desc');
    }

    public function adLocations() // AdLocation
    {
        return $this->hasMany('App\Models\AdLocation', 'ad_id', 'id');
    }

    public function scopeGetByTitle($query, $title = null)
    {
        if (empty($title)) {
            return $query;
        }
        return $query->where( with(new Ad)->getTable() . '.title', 'like', '%'.$title.'%');
    }


    public function scopeGetByStatus($query, $status= null)
    {
        if (!empty($status)) {
            if ( is_array($status) ) {
                $query->whereIn(with(new Ad)->getTable().'.status', $status);
            } else {
                $query->where(with(new Ad)->getTable().'.status', $status);
            }
        }
        return $query;
    }


    public function scopeGetByCategoryId($query, $category_id= null)
    {
        if (!empty($category_id)) {
            if ( is_array($category_id) ) {
                $query->whereIn(with(new AdCategory)->getTable().'.category_id', $category_id);
            } else {
                $query->where(with(new AdCategory)->getTable().'.category_id', $category_id);
            }
        }
        return $query;
    }


    public function scopeGetByAdType($query, $ad_type= null)
    {
        if (!empty($ad_type)) {
            $query->where(with(new Ad)->getTable().'.ad_type', $ad_type);
        }
        return $query;
    }

    public function scopeOnlyWithImagesCount($query, bool $check_only_images_count)
    {
        if($check_only_images_count) {
            return $query->with('adImages')->has('adImages');
        }
        return $query;
    }
    public function scopeOnlyWithPhoneDisplay($query, bool $check_only_phone_display)
    {
        if($check_only_phone_display) {
            $query->where(with(new Ad)->getTable().'.phone_display', true);
        }
        return $query;
    }


    /*     public function adReportAbuses()
    {
        return $this->hasMany('App\Models\AdReportAbuse', 'ad_id', 'id')->orderBy('created_at', 'desc');
    } */
    public function scopeOnlyWithAdReportAbusesCount($query, string $having_bused_reports)
    {
//        \Log::info( '-1scopeOnlyWithAdReportAbusesCount  $having_bused_reports::' . print_r(  $having_bused_reports, true  ) );
        if(empty($having_bused_reports) or $having_bused_reports == 'A') {
            return $query;
        }

        if( $having_bused_reports == 'H' ) {  // Only ads having abused reports
            $prefix = DB::getTablePrefix();
            $query->havingRaw(' ( SELECT count(*)
    FROM `' . $prefix . 'ad_report_abuses' . '` ' .
                              ' WHERE ' . $prefix . 'ad_report_abuses.ad_id = ' . $prefix . 'ads.id ) > ?', [0]);
        } // if( $having_bused_reports == 'H' ) {  // Only ads having abused reports

        return $query;
    }

    public function scopeGetByExpireDate($query, $filter_expire_date= null, string $sign= null)
    {
        if (!empty($filter_expire_date)) {
            if (!empty($sign)) {
                $query->whereRaw( DB::getTablePrefix().with(new Ad)->getTable().'.expire_date ' . $sign . "'".$filter_expire_date."' " );
            } else {
                $query->where(with(new Ad)->getTable().'.expire_date', $filter_expire_date);
            }
        }
        return $query;
    }



    public function scopeHasLocations($query, bool $check_only_phone_display)
    {
        if($check_only_phone_display) {
            $query->where(with(new Ad)->getTable().'.has_locations', true);
        }
        return $query;
    }

    public function scopeImagesCount($query, bool $check_images_count)
    {
        \Log::info('scopeImagesCount $check_images_count ::');
        \Log::info($check_images_count);

        /*
                    ->addSelect(['ad_images_count' => AdImage
                ::selectRaw('count(*)')
                ->whereColumn('ad_images.ad_id', 'ads.id')
            ])


        */
        if ($check_images_count) {
            \Log::info('CHECKING  ::');
//            return $query->select(['ad_images_count' => AdImage
//            return $query->addSelect(['ad_images_count' => AdImage
//                ::selectRaw('count(*)')
//                ->whereColumn('ad_images.ad_id', 'ads.id')
//            ])->where('ad_images_count', '>', 0);


            /*    having ( (  SELECT count(*)
    FROM `sda_ad_images`
    WHERE `sda_ad_images`.`ad_id` = `sda_ads`.`id`)  ) > 4 */

//            $query->whereRaw(' having ( (  SELECT count(*)  FROM sda_ad_images  WHERE sda_ad_images.ad_id = sda_ads.id)  ) > 4 ');
            $prefix= DB::getTablePrefix();
            $query->havingRaw(' ( SELECT count(*)
    FROM `'.$prefix.'ad_images'.'` '.
    ' WHERE '.$prefix.'ad_images.ad_id = `'.$prefix.'ads.id` ) > ?', [0]);
            /* SELECT distinct `sda_ads`.*, `sda_users`.`name`     AS `creator_username`, `sda_users`.`email`     AS `creator_email`, `sda_users`.`phone`     AS `creator_phone`, (  SELECT count(*)
    FROM `sda_ad_images`
    WHERE `sda_ad_images`.`ad_id` = `sda_ads`.`id`)     AS `ad_images_count`
    FROM `sda_ads`
    LEFT JOIN `sda_users` on `sda_users`.`id` = `sda_ads`.`creator_id`
    WHERE `ad_type` <> 'I'     AND `sda_ads`.`status` = 'A'     AND `sda_users`.`status` = 'A' */
        }
        \Log::info('SKIPPED CHECKING  ::');
        return $query;
    }

    public function scopeGetUserByStatus($query, $status= null)
    {
        if (!empty($status)) {
            if ( is_array($status) ) {
                $query->whereIn(with(new User)->getTable().'.status', $status);
            } else {
                $query->where(with(new User)->getTable().'.status', $status);
            }
        }
        return $query;
    }

    public function scopeOnlyWithUsersPhoneNoneEmpty($query, $check_phone_none_empty= null)
    {
        if (!empty($check_phone_none_empty)) {
            $query->whereNotNull(with(new User)->getTable().'.phone')->where(with(new User)->getTable().'.phone', '<>', '');
        }
        return $query;
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = workTextString($value);
    }


    public static function getAdValidationRulesArray($ad_id= null, array $skipFieldsArray= []) : array
    {
        $validationRulesArray = [
            'title' => [
                'required',
                'string',
                'max:255'
            ],
            'phone_display'   => 'required|in:' . '0,1',
            'has_locations'   => 'required|in:' . '0,1',
            'status'          => 'required|in:' . getValueLabelKeys( Ad::$statusLabelValueArray),
            'price'           => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'ad_type'           => 'required|in:' . getValueLabelKeys( Ad::$adTypeLabelValueArray),
            'expire_date'     => 'required|nullable',
            'description'     => 'required',
            'creator_id'   => 'required|integer|exists:' . (with(new User)->getTable()) . ',id',
        ];
        foreach( $skipFieldsArray as $next_field ) {
            if(!empty($validationRulesArray[$next_field])) {
                unset($validationRulesArray[$next_field]);
            }
        }

        return $validationRulesArray;
    } // public static function getAdValidationRulesArray($ad_id) : array

    public static function addDummyData($year, $month) {
        //         Ad::addDummyData($year, $month);
//        $ads = Ad::factory()->create(10);
        // $users = User::factory()->count(5)->suspended()->make();
        $ads = Ad::factory()->count(10)->expired($year, $month)->create([
//            'year'=> $year, 'month'=> $month
        ]);
//        \Log::info(  varDump($ads, ' -1 addDummyData() $ads::') );
    }


}



