<?php

namespace Database\Seeders;

use App\Models\Info;
use App\Models\SliderOption;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('infos')->delete();
        DB::table('slider_options')->delete();
        Info::create(['option' => 'website_name_en','value' => 'Ahmed Othman','type' => 'string']);
        Info::create(['option' => 'website_name_ar','value' => 'أحمد عثمان','type' => 'string']);
        Info::create(['option' => 'logo_en','value' => 'logo.png','type' => 'image']);
        Info::create(['option' => 'logo_ar','value' => 'logo.png','type' => 'image']);
        Info::create(['option' => 'show_logo','value' => true,'type' => 'checkbox']);
        Info::create(['option' => 'about_image','value' => 'about.png','type' => 'image']);
        Info::create(['option' => 'services_image','value' => 'service.png','type' => 'image']);
        Info::create(['option' => 'projects_image','value' => 'projects.png','type' => 'image']);
        Info::create(['option' => 'call_image','value' => 'call.png','type' => 'image']);
        Info::create(['option' => 'news_image','value' => 'news.png','type' => 'image']);
        Info::create(['option' => 'footer_image','value' => 'footer.png','type' => 'image']);
        Info::create(['option' => 'contact_image','value' => 'contact.png','type' => 'image']);
        Info::create(['option' => 'email','value' => '','type' => 'string']);
        Info::create(['option' => 'phone','value' => '','type' => 'string']);
        Info::create(['option' => 'whats_up','value' => '','type' => 'string']);
        Info::create(['option' => 'address_en','value' => '','type' => 'string']);
        Info::create(['option' => 'address_ar','value' => '','type' => 'string']);
        Info::create(['option' => 'fb_link','value' => '','type' => 'string']);
        Info::create(['option' => 'twitter_link','value' => '','type' => 'string']);
        Info::create(['option' => 'linked_link','value' => '','type' => 'string']);
        Info::create(['option' => 'instagram_link','value' => '','type' => 'string']);
        Info::create(['option' => 'snapchat_link','value' => '','type' => 'string']);
        Info::create(['option' => 'youtube_link','value' => '','type' => 'string']);
        Info::create(['option' => 'about_us_en','value' => 'About US bla bla bla bla bla bla bla bla ...','type' => 'text']);
        Info::create(['option' => 'about_us_ar','value' => 'بلااااابلااااابلااااامن نحن بلااااا ','type' => 'text']);
        Info::create(['option' => 'main_color','value' => '#05233a','type' => 'color']);
        Info::create(['option' => 'secondary_color','value' => '#16a086','type' => 'color']);
        Info::create(['option' => 'main_font_color','value' => '#05233a','type' => 'color']);
        Info::create(['option' => 'secondary_font_color','value' => '#16a086','type' => 'color']);
        Info::create(['option' => 'font_family','value' => '\'Cairo\', sans-serif','type' => 'string']);
        Info::create(['option' => 'font_url','value' => 'https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap','type' => 'string']);
        SliderOption::create(['image' => 'slidingoverlayhorizontal','word' => 'x:right']);
    }
}
