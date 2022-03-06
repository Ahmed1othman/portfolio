<?php

namespace Database\Seeders;

use App\Models\ActiveSection;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('active_sections')->delete();
        ActiveSection::create(['section_name' => 'about_us']);
        ActiveSection::create(['section_name' => 'contact_us']);
        ActiveSection::create(['section_name' => 'services']);
        ActiveSection::create(['section_name' => 'news']);
        ActiveSection::create(['section_name' => 'projects']);
        ActiveSection::create(['section_name' => 'slider']);
        ActiveSection::create(['section_name' => 'why_chosse_us']);
        ActiveSection::create(['section_name' => 'request_call_back']);
        ActiveSection::create(['section_name' => 'subscritoin']);
        ActiveSection::create(['section_name' => 'footer']);
    }
}
