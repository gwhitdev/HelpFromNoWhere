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
            'name' => 'Draft',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('visibilities')->insert([
            'name' => 'Live',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('visibilities')->insert([
            'name' => 'In Review',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('visibilities')->insert([
            'name' => 'Hidden',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('visibilities')->insert([
            'name' => 'Blocked',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
