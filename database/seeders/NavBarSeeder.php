<?php

namespace Database\Seeders;

use App\Models\NavBar;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavBarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nav_bars')->delete();
        NavBar::create(['title' =>'Home','route'=>'home']);
        NavBar::create(['title' =>'About Us','route'=>'aboutus']);
        NavBar::create(['title' =>'Services','route'=>'siteservices']);
        NavBar::create(['title' =>'News','route'=>'sitenews']);
        NavBar::create(['title' =>'Projects','route'=>'siteprojects']);
        NavBar::create(['title' =>'Contact Us','route'=>'contactus']);
    }
}
