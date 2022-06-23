<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call(NavBarSeeder::class);
       $this->call(InfoSeeder::class);
       $this->call(SectionsSeeder::class);

       DB::table('users')->delete();
       User::create([
           'name' => 'Sihad Admin'
           ,'email' => 'admin@sihad.com'
           ,'password' => Hash::make('$i7@d_2022')
       ]);
    }
}
