<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdCommentsWithInitData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('ad_comments')->insert(array(


            array(
                    'id' => 1,
                    'ad_id' => 1,
                    'parent_ad_comment_id' => null,
                    'user_id'  => null,
                    'approved'  => true,
                    'comment'  => '<p>Ad Dell SE2416HX 23.8" Screen LED-Lit IPS Monitor comment # 1 </p><p>Lorem <strong>ipsum dolor sit</strong> amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis <strong>nostrud exercitation</strong> ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<ul>
    <li>Lorem 1st point </li>
    <li>Lorem 2nd point </li>
    <li>Lorem 3rd point </li>
</ul>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>',
                    'rating'  => 1,
                ),

                array(
                    'id' => 2,
                    'ad_id' => 1,
                    'parent_ad_comment_id' => 1,
                    'user_id'  => 3,
                    'approved'  => true,
                    'comment'  => '<p>Ad Dell SE2416HX 23.8" Screen LED-Lit IPS Monitor comment # 1 1 </p><p>Lorem <strong>ipsum dolor sit</strong> amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis <strong>nostrud exercitation</strong> ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<ul>
    <li>Lorem 1st point </li>
    <li>Lorem 2nd point </li>
    <li>Lorem 3rd point </li>
</ul>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>',
                    'rating'  => 3,
                ),
                array(
                    'id' => 3,
                    'ad_id' => 1,
                    'parent_ad_comment_id' => 1,
                    'user_id'  => 5,
                    'approved'  => false,
                    'comment'  => '<p>Ad Dell SE2416HX 23.8" Screen LED-Lit IPS Monitor comment # 1 2 </p><p>Lorem <strong>ipsum dolor sit</strong> amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis <strong>nostrud exercitation</strong> ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<ul>
    <li>Lorem 1st point </li>
    <li>Lorem 2nd point </li>
    <li>Lorem 3rd point </li>
</ul>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>',
                    'rating'  => 3,
                ),
                array(
                    'id' => 4,
                    'ad_id' => 1,
                    'parent_ad_comment_id' => 1,
                    'user_id'  => 4,
                    'approved'  => true,
                    'comment'  => '<p>Ad Dell SE2416HX 23.8" Screen LED-Lit IPS Monitor comment # 1 3 </p><p>Lorem <strong>ipsum dolor sit</strong> amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis <strong>nostrud exercitation</strong> ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<ul>
    <li>Lorem 1st point </li>
    <li>Lorem 2nd point </li>
    <li>Lorem 3rd point </li>
</ul>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>',
                    'rating'  => 4,
                ),





                array(
                    'id' => 5,
                    'ad_id' => 1,
                    'parent_ad_comment_id' => null,
                    'user_id'  => 2,
                    'approved'  => true,
                    'comment'  => '<p>Ad Dell SE2416HX 23.8" Screen LED-Lit IPS Monitor comment # 2 </p><p>Lorem <strong>ipsum dolor sit</strong> amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis <strong>nostrud exercitation</strong> ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<ul>
    <li>Lorem 1st point </li>
    <li>Lorem 2nd point </li>
    <li>Lorem 3rd point </li>
</ul>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>',
                    'rating'  => 4,
                ),
                array(
                    'id' => 6,
                    'ad_id' => 1,
                    'parent_ad_comment_id' => 5,
                    'user_id'  => 2,
                    'approved'  => false,
                    'comment'  => '<p>Ad Dell SE2416HX 23.8" Screen LED-Lit IPS Monitor comment # 2 1 </p><p>Lorem <strong>ipsum dolor sit</strong> amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis <strong>nostrud exercitation</strong> ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<ul>
    <li>Lorem 1st point </li>
    <li>Lorem 2nd point </li>
    <li>Lorem 3rd point </li>
</ul>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>',
                    'rating'  => 3,
                ),

                array(
                    'id' => 7,
                    'ad_id' => 1,
                    'parent_ad_comment_id' => 5,
                    'user_id'  => 2,
                    'approved'  => true,
                    'comment'  => '<p>Ad Dell SE2416HX 23.8" Screen LED-Lit IPS Monitor comment # 2 2 </p><p>Lorem <strong>ipsum dolor sit</strong> amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis <strong>nostrud exercitation</strong> ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<ul>
    <li>Lorem 1st point </li>
    <li>Lorem 2nd point </li>
    <li>Lorem 3rd point </li>
</ul>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>',
                    'rating'  => 2,
                ),

                array(
                    'id' => 8,
                    'ad_id' => 1,
                    'parent_ad_comment_id' => null,
                    'user_id'  => 5,
                    'approved'  => true,
                    'comment'  => '<p>Ad Dell SE2416HX 23.8" Screen LED-Lit IPS Monitor comment # 3 </p><p>Lorem <strong>ipsum dolor sit</strong> amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis <strong>nostrud exercitation</strong> ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<ul>
    <li>Lorem 1st point </li>
    <li>Lorem 2nd point </li>
    <li>Lorem 3rd point </li>
</ul>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>',
                    'rating'  => 1,
                ),

                array(
                    'id' => 9,
                    'ad_id' => 1,
                    'parent_ad_comment_id' => null,
                    'user_id'  => 3,
                    'approved'  => true,
                    'comment'  => '<p>Ad Dell SE2416HX 23.8" Screen LED-Lit IPS Monitor comment # 4 </p><p>Lorem <strong>ipsum dolor sit</strong> amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis <strong>nostrud exercitation</strong> ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<ul>
    <li>Lorem 1st point </li>
    <li>Lorem 2nd point </li>
    <li>Lorem 3rd point </li>
</ul>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>',
                    'rating'  => 5,
                ),

            array(
                'id' => 10,
                'ad_id' => 1,
                'parent_ad_comment_id' => null,
                'user_id'  => 4,
                'approved'  => true,
                'comment'  => '<p>Ad Dell SE2416HX 23.8" Screen LED-Lit IPS Monitor comment # 8 </p><p>Lorem <strong>ipsum dolor sit</strong> amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis <strong>nostrud exercitation</strong> ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<ul>
    <li>Lorem 1st point </li>
    <li>Lorem 2nd point </li>
    <li>Lorem 3rd point </li>
</ul>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>',
                'rating'  => 3,
            ),

            ///////////////




            array(
                'id' => 11,
                'ad_id' => 6,
                'parent_ad_comment_id' => null,
                'user_id'  => 1,
                'approved'  => true,
                'comment'  => '<p>Buying Logitech C930e USB Desktop or Laptop Webcam comment # 1 </p><p>Lorem <strong>ipsum dolor sit</strong> amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis <strong>nostrud exercitation</strong> ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<ul>
    <li>Lorem 1st point </li>
    <li>Lorem 2nd point </li>
    <li>Lorem 3rd point </li>
</ul>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>',
                'rating'  => 1,
            ),

            array(
                'id' => 12,
                'ad_id' => 6,
                'parent_ad_comment_id' => 11,
                'user_id'  => 3,
                'approved'  => true,
                'comment'  => '<p>Buying Logitech C930e USB Desktop or Laptop Webcam comment # 1 1 </p><p>Lorem <strong>ipsum dolor sit</strong> amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis <strong>nostrud exercitation</strong> ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<ul>
    <li>Lorem 1st point </li>
    <li>Lorem 2nd point </li>
    <li>Lorem 3rd point </li>
</ul>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>',
                'rating'  => 3,
            ),
            array(
                'id' => 13,
                'ad_id' => 6,
                'parent_ad_comment_id' => 11,
                'user_id'  => 5,
                'approved'  => false,
                'comment'  => '<p>Buying Logitech C930e USB Desktop or Laptop Webcam comment # 1 2 </p><p>Lorem <strong>ipsum dolor sit</strong> amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis <strong>nostrud exercitation</strong> ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<ul>
    <li>Lorem 1st point </li>
    <li>Lorem 2nd point </li>
    <li>Lorem 3rd point </li>
</ul>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>',
                'rating'  => 3,
            ),
            array(
                'id' => 14,
                'ad_id' => 6,
                'parent_ad_comment_id' => 11,
                'user_id'  => 4,
                'approved'  => true,
                'comment'  => '<p>Buying Logitech C930e USB Desktop or Laptop Webcam comment # 1 3 </p><p>Lorem <strong>ipsum dolor sit</strong> amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis <strong>nostrud exercitation</strong> ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<ul>
    <li>Lorem 1st point </li>
    <li>Lorem 2nd point </li>
    <li>Lorem 3rd point </li>
</ul>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>',
                'rating'  => 4,
            ),





            array(
                'id' => 15,
                'ad_id' => 6,
                'parent_ad_comment_id' => null,
                'user_id'  => 2,
                'approved'  => true,
                'comment'  => '<p>Buying Logitech C930e USB Desktop or Laptop Webcam comment # 2 </p><p>Lorem <strong>ipsum dolor sit</strong> amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis <strong>nostrud exercitation</strong> ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<ul>
    <li>Lorem 1st point </li>
    <li>Lorem 2nd point </li>
    <li>Lorem 3rd point </li>
</ul>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>',
                'rating'  => 4,
            ),
            array(
                'id' => 16,
                'ad_id' => 6,
                'parent_ad_comment_id' => 15,
                'user_id'  => 2,
                'approved'  => false,
                'comment'  => '<p>Buying Logitech C930e USB Desktop or Laptop Webcam comment # 2 1 </p><p>Lorem <strong>ipsum dolor sit</strong> amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis <strong>nostrud exercitation</strong> ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<ul>
    <li>Lorem 1st point </li>
    <li>Lorem 2nd point </li>
    <li>Lorem 3rd point </li>
</ul>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>',
                'rating'  => 3,
            ),

            array(
                'id' => 17,
                'ad_id' => 6,
                'parent_ad_comment_id' => 15,
                'user_id'  => null,
                'approved'  => true,
                'comment'  => '<p>Buying Logitech C930e USB Desktop or Laptop Webcam comment # 2 2 </p><p>Lorem <strong>ipsum dolor sit</strong> amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis <strong>nostrud exercitation</strong> ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<ul>
    <li>Lorem 1st point </li>
    <li>Lorem 2nd point </li>
    <li>Lorem 3rd point </li>
</ul>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>',
                'rating'  => 2,
            ),

            array(
                'id' => 18,
                'ad_id' => 6,
                'parent_ad_comment_id' => null,
                'user_id'  => 5,
                'approved'  => true,
                'comment'  => '<p>Buying Logitech C930e USB Desktop or Laptop Webcam comment # 3 </p><p>Lorem <strong>ipsum dolor sit</strong> amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis <strong>nostrud exercitation</strong> ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<ul>
    <li>Lorem 1st point </li>
    <li>Lorem 2nd point </li>
    <li>Lorem 3rd point </li>
</ul>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>',
                'rating'  => 1,
            ),

            array(
                'id' => 19,
                'ad_id' => 6,
                'parent_ad_comment_id' => null,
                'user_id'  => 3,
                'approved'  => true,
                'comment'  => '<p>Buying Logitech C930e USB Desktop or Laptop Webcam comment # 4 </p><p>Lorem <strong>ipsum dolor sit</strong> amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis <strong>nostrud exercitation</strong> ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<ul>
    <li>Lorem 1st point </li>
    <li>Lorem 2nd point </li>
    <li>Lorem 3rd point </li>
</ul>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>',
                'rating'  => 5,
            ),

            array(
                'id' => 20,
                'ad_id' => 6,
                'parent_ad_comment_id' => null,
                'user_id'  => null,
                'approved'  => true,
                'comment'  => '<p>Buying Logitech C930e USB Desktop or Laptop Webcam comment # 8 </p><p>Lorem <strong>ipsum dolor sit</strong> amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis <strong>nostrud exercitation</strong> ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<ul>
    <li>Lorem 1st point </li>
    <li>Lorem 2nd point </li>
    <li>Lorem 3rd point </li>
</ul>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>',
                'rating'  => 3,
            ),


        ));

    }
}
