<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;

class PagesInitData extends Seeder
{
    public function run()
    {
        Page::create([
            'id'               => 1,
            'title'            => 'About',
            'slug'             => 'about',
            'content'          => '<b>About</b> sed do <b>eiusmod</b>  tempor incididunt ut <b>labore</b> et dolore magna aliqua
 <p>Lorem  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
 <p>Lorem  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
 <p>Lorem  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
 <p>Lorem  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>...',
            'content_shortly'  => 'About sed do eiusmod  tempor incididunt',
            'creator_id'       => 3,
            'is_homepage'      => false,
            'published'        => true,
            'image'            => 'about.jpg',
            'meta_description'   => 'About meta description sed do eiusmod  tempor incididunt',
            'meta_keywords'      => json_encode(['About','About Site Content']),
            'created_at'       => now(),
        ]);
        //

        Page::create([
            'id'               => 2,
            'title'            => 'Contact Us',
            'slug'             => 'contact-us',
            'content'          => '<b>Contact Us</b> sed do <b>eiusmod</b>  tempor incididunt ut <b>labore</b> et dolore magna aliqua
 <p>Lorem  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt </p> ',
            'content_shortly'  => 'Contact Us sed do eiusmod tempor incididunt ut ',
            'creator_id'       => 4,
            'is_homepage'      => false,
            'published'        => true,
            'meta_description'   => 'Contact Us meta description...',
            'meta_keywords'      => json_encode([ 'Contact Us', 'Contact Us Site Content' , 'Contact Us text' ]),
            'image'            => 'contact-us.png',
            'created_at'       => now(),
        ]);
        //

        Page::create([
            'id'               => 3,
            'title'            => 'Security privacy',
            'slug'             => 'security-privacy',
            'content'          => '<b>Security privacy</b> sed do <b>eiusmod</b>  tempor incididunt ut <b>labore</b> et dolore magna aliqua
 <p>Lorem  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
 <p>Lorem  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
 <p>Lorem  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
 <p>Lorem  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>...',
            'content_shortly'  => null,
            'creator_id'       => 3,
            'is_homepage'      => false,
            'published'        => true,
            'meta_description'   => 'Security privacy meta description',
            'meta_keywords'      => json_encode(['Security privacy', 'Security privacy key']),
            'image'            => 'security-privacy.png',
            'created_at'       => now(),
        ]);
        //



        Page::create([
            'id'               => 4,
            'title'            => 'Terms of service',
            'slug'             => 'terms-of-service',
            'content'          => '<b>Terms of service</b> sed do <b>eiusmod</b>  tempor incididunt ut <b>labore</b> et dolore magna aliqua
 <p>Lorem  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
 <p>Lorem  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
 <p>Lorem  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
 <p>Lorem  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>...',
            'content_shortly'  => null,
            'creator_id'       => 3,
            'is_homepage'      => false,
            'published'        => true,
            'meta_description'   => 'Terms of service meta description sed do eiusmod  tempor incididunt ut labore et dolore magna',
            'meta_keywords'      => json_encode(['Terms of service', 'Terms of service meta']),
            'image'            => 'terms-of-service.png',
            'created_at'       => now(),
        ]);

        Page::create([
            'id'               => 5,
            'title'            => 'Rules of site',
            'slug'             => 'rules-of-site',
            'content'          => '<b>Rules of site</b> sed do <b>eiusmod</b>  tempor incididunt ut <b>labore</b> et dolore magna aliqua
 <p>Lorem  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
 <p>Lorem  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
 <p>Lorem  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
 <p>Lorem  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>...',
            'content_shortly'  => 'Rules of site sed do eiusmod tempor incididunt',
            'creator_id'       => 1,
            'is_homepage'      => false,
            'published'        => true,
            'meta_description'   => 'Rules of site meta description sed do eiusmod  tempor incididunt ut labore et dolore magna',
            'meta_keywords'      => json_encode(['Rules of site', 'Control', 'User rules']),
            'image'            => 'rules-of-site.png',
            'created_at'       => now(),
        ]);

        Page::create([
            'id'               => 6,
            'title'            => 'Site home page',
            'slug'             => 'site-home-page',
            'content'          => '<b>Site home page</b> sed do <b>eiusmod</b>  tempor incididunt ut <b>labore</b> et dolore magna aliqua
 <p>Lorem  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
 <p>Lorem  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
 <p>Lorem  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
 <p>Lorem  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>...',
            'content_shortly'  => 'Site home page sed do eiusmod tempor incididunt tempor incididunt ut ',
            'creator_id'       => 3,
            'is_homepage'      => true,
            'published'        => true,
            'meta_description'   => 'Site home page meta description sed do eiusmod  tempor incididunt ut labore et dolore magna',
            'meta_keywords'      => json_encode(['Site home page', 'Site home keyword']),
            'image'            => 'site-home-page.png',
            'created_at'       => now(),
        ]);

        Page::create([
            'id'               => 7,
            'title'            => 'Home page content',
            'slug'             => 'home-page-content',
            'content'          => '<b>Home page content</b> sed do <b>eiusmod</b>  tempor incididunt ut <b>labore</b> et dolore magna aliqua
 <p>Lorem  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
 <p>Lorem  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
 <p>Lorem  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
 <p>Lorem  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>...',
            'content_shortly'  => 'Home page content sed do eiusmod tempor incididunt tempor incididunt ut ',
            'creator_id'       => 3,
            'is_homepage'      => true,
            'published'        => true,
            'meta_description'   => 'Home page content meta description sed do eiusmod  tempor incididunt ut labore et dolore magna',
            'meta_keywords'      => json_encode(['Home page content', 'Home lorem']),
            'image'            => 'home-page-content.png',
            'created_at'       => now(),
        ]);

        Page::create([
            'id'               => 8,
            'title'            => 'Explain our site flow',
            'slug'             => 'explain-our-site-flow',
            'content'          => '<b>Explain our site flow</b> sed do <b>eiusmod</b>  tempor incididunt ut <b>labore</b> et dolore magna aliqua
 <p>Lorem  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
 <p>Lorem  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
 <p>Lorem  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
 <p>Lorem  ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>...',
            'content_shortly'  => 'Explain our site flow sed do eiusmod tempor incididunt tempor incididunt ut ',
            'creator_id'       => 3,
            'is_homepage'      => true,
            'published'        => true,
            'meta_description'   => 'Explain our site flow meta description sed do eiusmod  tempor incididunt ut labore et dolore magna',
            'meta_keywords'      => json_encode(['Explain our site flow', 'Explain our site key']),
            'image'            => 'explain-our-site-flow.png',
            'created_at'       => now(),
        ]);

    }

}
