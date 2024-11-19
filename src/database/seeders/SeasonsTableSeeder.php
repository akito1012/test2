<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = ['name' => 'spring'];
        DB::table('seasons')->insert($param);
        $param = ['name' => 'summer'];
        DB::table('seasons')->insert($param);
        $param = ['name' => 'autumn'];
        DB::table('seasons')->insert($param);
        $param = ['name' => 'winter'];
        DB::table('seasons')->insert($param);
    }
}
