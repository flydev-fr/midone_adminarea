<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdLocationsWithInitData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('ad_locations')->insert(array(
            array(
                'id' => 1,
                'ad_id' => 1,
                'location' => 'London',
                'lat' => 51.509865,
                'lng'  => -0.118092,
                'color'  => '#c11a1a',
                'content'  => '<strong>content text</strong> #1 point at London Lorem image amet, consectetur adipiscing elit, sed do eiusmod
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
',
                'opened'  => true,
                'featured'  => false,
                'country'  => 'GB',
                'image' => 'london.jpeg',
                'image_info' => 'london Lorem  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua',
                'ordering' => 4,
            ),

            array(
                'id' => 2,
                'ad_id' => 1,
                'location' => 'London',
                'lat' => 50.109865,
                'lng'  => 1.212072,
                'color'  => '#38a938',
                'content'  => '<strong>content text</strong> #2 point at London Lorem image amet, consectetur adipiscing elit, sed do eiusmod
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
',
                'opened'  => false,
                'featured'  => false,
                'country'  => 'GB',
                'image' => 'london.jpeg',
                'image_info' => 'london Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua',
                'ordering' => 3,
            ),

        ));


        \DB::table('ad_locations')->insert(array(
            array(
                'id' => 3,
                'ad_id' => 1,
                'location' => 'Sunderland, North East, the UK',
                'lat' => 54.906101,
                'lng'  => -1.381130,
                'color'  => '#c11a1a',
                'content'  => '<strong>content text</strong> #1 point at Sunderland Lorem image amet, consectetur adipiscing elit, sed do eiusmod
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
',
                'opened'  => true,
                'featured'  => false,
                'country'  => 'GB',
                'image' => 'SunderlandMontage.jpg',
                'image_info' => 'Sunderland Montage image lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua',
                'ordering' => 2,
            ),

            array(
                'id' => 4,
                'ad_id' => 1,
                'location' => 'Sheffield, South Yorkshire, the UK',
                'lat' => 53.383331,
                'lng'  => -1.466667,
                'color'  => '#38a938',
                'content'  => '<strong>content text</strong> #2 point at Sheffield Lorem image amet, consectetur adipiscing elit, sed do eiusmod
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
',
                'opened'  => false,
                'featured'  => true,
                'country'  => 'GB',
                'image' => 'sheffield.jpg',
                'image_info' => 'Sheffield lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua',
                'ordering' => 1,
            ),





            array(
                'id' => 5,
                'ad_id' => 6,
                'location' => 'Paris',
                'lat' => 48.856613,
                'lng'  => 2.352222,
                'color'  => '#c11a1a',
                'content'  => '<strong>content text</strong> #1 point at Paris Lorem image amet, consectetur adipiscing elit, sed do eiusmod
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
',
                'opened'  => true,
                'featured'  => false,
                'country'  => 'FR',
                'image' => 'paris.jpeg',
                'image_info' => 'Paris Lorem  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua',
                'ordering' => 4,
            ),

            array(
                'id' => 6,
                'ad_id' => 6,
                'location' => 'Lyon',
                'lat' => 45.764042,
                'lng'  => 4.835659,
                'color'  => '#38a938',
                'content'  => '<strong>content text</strong> #2 point at Lyon Lorem image amet, consectetur adipiscing elit, sed do eiusmod
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
',
                'opened'  => false,
                'featured'  => false,
                'country'  => 'FR',
                'image' => 'lyon.webp',
                'image_info' => 'Lyon Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua',
                'ordering' => 3,
            ),

        ));


        \DB::table('ad_locations')->insert(array(
            array(
                'id' => 7,
                'ad_id' => 6,
                'location' => 'Nantes',
                'lat' => 47.218372,
                'lng'  => -1.553621,
                'color'  => '#c11a1a',
                'content'  => '<strong>content text</strong> #1 point at Nantes Lorem image amet, consectetur adipiscing elit, sed do eiusmod
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
',
                'opened'  => true,
                'featured'  => false,
                'country'  => 'FR',
                'image' => 'nantes.jpg',
                'image_info' => 'Nantes image lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua',
                'ordering' => 2,
            ),

            array(
                'id' => 8,
                'ad_id' => 6,
                'location' => 'Bordeaux',
                'lat' => 44.837788,
                'lng'  => -0.579180,
                'color'  => '#38a938',
                'content'  => '<strong>content text</strong> #2 point at Bordeaux Lorem image amet, consectetur adipiscing elit, sed do eiusmod
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
',
                'opened'  => false,
                'featured'  => true,
                'country'  => 'FR',
                'image' => 'bordeaux.jpg',
                'image_info' => 'Bordeaux lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua',
                'ordering' => 1,
            ),





            array(
                'id' => 9,
                'ad_id' => 2,
                'location' => 'Berlin',
                'lat' => 52.520008,
                'lng'  => 13.404954,
                'color'  => '#c11a1a',
                'content'  => '<strong>content text</strong> #1 point at Berlin Lorem image amet, consectetur adipiscing elit, sed do eiusmod
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
',
                'opened'  => true,
                'featured'  => false,
                'country'  => 'DE',
                'image' => 'berlin.jpg',
                'image_info' => 'Berlin Lorem  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua',
                'ordering' => 4,
            ),

            array(
                'id' => 10,
                'ad_id' => 2,
                'location' => 'Hamburg',
                'lat' => 53.551086,
                'lng'  => 9.993682,
                'color'  => '#38a938',
                'content'  => '<strong>content text</strong> #2 point at Hamburg Lorem image amet, consectetur adipiscing elit, sed do eiusmod
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
',
                'opened'  => false,
                'featured'  => false,
                'country'  => 'DE',
                'image' => 'hamburg.jpeg',
                'image_info' => 'Hamburg Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua',
                'ordering' => 3,
            ),

        ));


        \DB::table('ad_locations')->insert(array(
            array(
                'id' => 11,
                'ad_id' => 2,
                'location' => 'Munich',
                'lat' => 48.135124,
                'lng'  => 11.581981,
                'color'  => '#c11a1a',
                'content'  => '<strong>content text</strong> #1 point at Munich Lorem image amet, consectetur adipiscing elit, sed do eiusmod
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
',
                'opened'  => true,
                'featured'  => false,
                'country'  => 'DE',
                'image' => 'munich.jpg',
                'image_info' => 'Munich Montage image lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua',
                'ordering' => 2,
            ),

            array(
                'id' => 12,
                'ad_id' => 2,
                'location' => 'Stuttgart',
                'lat' => 48.775845,
                'lng'  => 9.182932,
                'color'  => '#38a938',
                'content'  => '<strong>content text</strong> #2 point at Stuttgart Lorem image amet, consectetur adipiscing elit, sed do eiusmod
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
',
                'opened'  => false,
                'featured'  => true,
                'country'  => 'DE',
                'image' => 'stuttgart.jpg',
                'image_info' => 'Stuttgart lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua',
                'ordering' => 1,
            ),



            ////////////////////
            array(
                'id' => 13,
                'ad_id' => 3,
                'location' => 'Madrid',
                'lat' => 40.416775,
                'lng'  => -3.703790,
                'color'  => '#c11a1a',
                'content'  => '<strong>content text</strong> #1 point at Madrid Lorem image amet, consectetur adipiscing elit, sed do eiusmod
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
',
                'opened'  => true,
                'featured'  => false,
                'country'  => 'ES',
                'image' => 'madrid.jpeg',
                'image_info' => 'Madrid Lorem  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua',
                'ordering' => 4,
            ),

            array(
                'id' => 14,
                'ad_id' => 3,
                'location' => 'Barcelona',
                'lat' => 41.346176,
                'lng'  => 2.168365,
                'color'  => '#38a938',
                'content'  => '<strong>content text</strong> #2 point at Barcelona Lorem image amet, consectetur adipiscing elit, sed do eiusmod
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
',
                'opened'  => false,
                'featured'  => false,
                'country'  => 'ES',
                'image' => 'barcelona.jpeg',
                'image_info' => 'Barcelona Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua',
                'ordering' => 3,
            ),

        ));


        \DB::table('ad_locations')->insert(array(
            array(
                'id' => 15,
                'ad_id' => 3,
                'location' => 'Seville',
                'lat' => 37.392529,
                'lng'  => -5.994072,
                'color'  => '#c11a1a',
                'content'  => '<strong>content text</strong> #1 point at Seville Lorem image amet, consectetur adipiscing elit, sed do eiusmod
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
',
                'opened'  => true,
                'featured'  => false,
                'country'  => 'ES',
                'image' => 'seville.jpg',
                'image_info' => 'seville image lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua',
                'ordering' => 2,
            ),

            array(
                'id' => 16,
                'ad_id' => 3,
                'location' => 'Malaga',
                'lat' => 36.72016,
                'lng'  => -4.42034,
                'color'  => '#38a938',
                'content'  => '<strong>content text</strong> #2 point at Málaga Lorem image amet, consectetur adipiscing elit, sed do eiusmod
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
<p><strong>Lorem  ipsum dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.</p>
',
                'opened'  => false,
                'featured'  => true,
                'country'  => 'ES',
                'image' => 'malaga.jpg',
                'image_info' => 'Malaga lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua',
                'ordering' => 1,
            ),







        ));


    }
}
