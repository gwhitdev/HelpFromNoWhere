<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VisibilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('visibilities')->insert([
            'option' => 'Draft',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('visibilities')->insert([
            'option' => 'Live',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('visibilities')->insert([
            'option' => 'In Review',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('visibilities')->insert([
            'option' => 'Hidden',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('visibilities')->insert([
            'option' => 'Blocked',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
