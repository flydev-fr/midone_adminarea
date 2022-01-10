<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ad;

class AdsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('ads')->delete();

        Ad::create([
            'id' => 1,
            'title' => 'Dell SE2416HX 23.8" Screen LED-Lit IPS Monitor',
            'slug' => 'dell-se2416hx-23-8-screen-led-lit-ips-monitor',
            'phone_display' => true,
            'has_locations' => true,
            'status' => 'A',
            'price' => 145.90,
            'ad_type' => 'B',
            'expire_date' => '2025-01-19 ',
            'description' => '<p>Dell SE2416HX 23.8" Screen LED-Lit IPS Monitor </p><p>Lorem <strong>ipsum dolor sit</strong> amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis <strong>nostrud exercitation</strong> ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<ul>
    <li>Lorem 1st point </li>
    <li>Lorem 2nd point </li>
    <li>Lorem 3rd point </li>
</ul>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
',
            'creator_id' => 3,
        ]);


        Ad::create([
            'id' => 2,
            'title' => 'Dell S2415H 24-Inch Screen LED-Lit Monitor',
            'slug' => 'dell-s2415h-24-inch-screen-led-lit-monitor',
            'phone_display' => false,
            'has_locations' => false,
            'status' => 'A',
            'price' => 152.50,
            'ad_type' => 'B',
            'expire_date' => '2023-01-24 ',
            'description' => '<p>Dell S2415H 24-Inch Screen LED-Lit Monitor </p><p>Lorem <strong>ipsum dolor sit</strong> amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis <strong>nostrud exercitation</strong> ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<ul>
    <li>Lorem 1st point </li>
    <li>Lorem 2nd point </li>
    <li>Lorem 3rd point </li>
</ul>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
',
            'creator_id' => 2,
        ]);


        Ad::create([
            'id' => 3,
            'title' => 'Dell S2240M 21.5-Inch Screen LED-lit Monitor',
            'slug' => 'dell-s2240m-21-5-inch-screen-led-lit-monitor',
            'phone_display' => true,
            'has_locations' => false,
            'status' => 'A',
            'price' => 170.00,
            'ad_type' => 'B',
            'expire_date' => '2024-02-03',
            'description' => '<p>Dell S2240M 21.5-Inch Screen LED-lit Monitor </p><p>Lorem <strong>ipsum dolor sit</strong> amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis <strong>nostrud exercitation</strong> ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<ul>
    <li>Lorem 1st point </li>
    <li>Lorem 2nd point </li>
    <li>Lorem 3rd point </li>
</ul>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
',
            'creator_id' => 1,
        ]);


        Ad::create([
            'id' => 4,
            'title' => 'Newest MSI 15.6" GP	P',
            'slug' => 'newest-msi-15-6-gp',
            'phone_display' => true,
            'has_locations' => false,
            'status' => 'A',
            'price' => 970.00,
            'ad_type' => 'B',
            'expire_date' => '2022-12-04',
            'description' => '<p>Newest MSI 15.6" GP	P </p><p>Lorem <strong>ipsum dolor sit</strong> amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis <strong>nostrud exercitation</strong> ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<ul>
    <li>Lorem 1st point </li>
    <li>Lorem 2nd point </li>
    <li>Lorem 3rd point </li>
</ul>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
',
            'creator_id' => 2,
        ]);


        Ad::create([
            'id' => 5,
            'title' => 'MSI VR Ready GT83VR Titan SLI-024 18.4"',
            'slug' => 'msi-vr-ready-gt83vr-titan-sli-024-18-4',
            'phone_display' => false,
            'has_locations' => false,
            'status' => 'A',
            'price' => 875.00,
            'ad_type' => 'S',
            'expire_date' => '2024-02-09',
            'description' => '<p>MSI VR Ready GT83VR Titan SLI-024 18.4" </p><p>Lorem <strong>ipsum dolor sit</strong> amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis <strong>nostrud exercitation</strong> ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<ul>
    <li>Lorem 1st point </li>
    <li>Lorem 2nd point </li>
    <li>Lorem 3rd point </li>
</ul>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
',
            'creator_id' => 5,
        ]);


        Ad::create([
            'id' => 6,
            'title' => 'Logitech C930e USB Desktop or Laptop Webcam',
            'slug' => 'logitech-c930e-usb-desktop-or-laptop-webcam-hd-1',
            'phone_display' => true,
            'has_locations' => true,
            'status' => 'A',
            'price' => 115.00,
            'ad_type' => 'B',
            'expire_date' => '2023-01-28',
            'description' => '<p>Logitech C930e USB Desktop or Laptop Webcam </p><p>Lorem <strong>ipsum dolor sit</strong> amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis <strong>nostrud exercitation</strong> ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<ul>
    <li>Lorem 1st point </li>
    <li>Lorem 2nd point </li>
    <li>Lorem 3rd point </li>
</ul>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
',
            'creator_id' => 1,
        ]);


        Ad::create([
            'id' => 7,
            'title' => 'Some abusing content ad',
            'slug' => 'some-abusing-content-ad',
            'phone_display' => true,
            'has_locations' => false,
            'status' => 'B',
            'price' => 125.00,
            'ad_type' => 'B',
            'expire_date' => '2025-01-22',
            'description' => '<p>Some abusing content ad </p><p>Lorem <strong>ipsum dolor sit</strong> amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis <strong>nostrud exercitation</strong> ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<ul>
    <li>Lorem 1st point </li>
    <li>Lorem 2nd point </li>
    <li>Lorem 3rd point </li>
</ul>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
',
            'creator_id' => 1,
        ]);


        Ad::create([
            'id' => 8,
            'title' => 'Some abusing content breaking rules of the site',
            'slug' => 'some-abusing-content-breaking-rules-of-the-site',
            'phone_display' => true,
            'has_locations' => false,
            'status' => 'B',
            'price' => 82.00,
            'ad_type' => 'S',
            'expire_date' => '2022-01-22',
            'description' => '<p>Some abusing content breaking rules of the site </p><p>Lorem <strong>ipsum dolor sit</strong> amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis <strong>nostrud exercitation</strong> ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<ul>
    <li>Lorem 1st point </li>
    <li>Lorem 2nd point </li>
    <li>Lorem 3rd point </li>
</ul>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
',
            'creator_id' => 4,
        ]);


        Ad::create([
            'id' => 9,
            'title' => 'Some draft content',
            'slug' => 'some-draft-content',
            'phone_display' => false,
            'has_locations' => false,
            'status' => 'D',
            'price' => 64.00,
            'ad_type' => 'S',
            'expire_date' => '2024-01-22',
            'description' => '<p>Some draft content </p><p>Lorem <strong>ipsum dolor sit</strong> amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis <strong>nostrud exercitation</strong> ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<ul>
    <li>Lorem 1st point </li>
    <li>Lorem 2nd point </li>
    <li>Lorem 3rd point </li>
</ul>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
',
            'creator_id' => 1,
        ]);



    }
}
