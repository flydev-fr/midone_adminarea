<?php

namespace Database\Factories;

use Config;
use Carbon\Carbon;
use App\Models\Ad;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
//use Cviebrock\EloquentSluggable\Sluggable;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class AdFactory extends Factory
{
//    use Sluggable;
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ad::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    // $factory->define(App\HostelReview::class, function (Faker $faker, $parentParams) {
    public function definition()
    {
        $text= $this->faker->text;
        $slugValue = SlugService::createSlug(Ad::class, 'slug', $text);

        return [
            'title' => $text,
//            'uuid' => $text,
            'slug' => $slugValue,
            'phone_display' => (rand(1, 3) == 1),
            'has_locations' => (rand(1, 4) == 1),
            'status' => 'A', // password
            'price' => mt_rand(10, 500),
            'ad_type' => (rand(1, 2) == 1 ? 'B' : 'S'),
            'description' => $this->faker->paragraphs(rand(1, 4), true),
            'creator_id' => rand(1, 5),
        ];
    }

    public function expired($year, $month)
    {
        return $this->state(function (array $attributes) use($year, $month) {
//            \Log::info(  varDump($month, ' -1 $month::') );
            $dateStr= $year.'-'.str_pad($month, 2, "0", STR_PAD_LEFT).'-01';
            $startDate= Carbon::createFromFormat('Y-m-d', $dateStr);
//            \Log::info(  varDump($startDate, ' -1 $startDate::') );
            return [
                'expire_date' => $this->faker->dateTimeInInterval($startDate, '1 month', Config::get('app.timezone'))->format('Y-m-d H:i:s')
            ];
        });
    }
}
