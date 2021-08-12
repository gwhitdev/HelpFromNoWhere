<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            'name' => 'Needs Help',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('statuses')->insert([
            'name' => 'Planning',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('statuses')->insert([
            'name' => 'Planned',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('statuses')->insert([
            'name' => 'In Progress',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('statuses')->insert([
            'name' => 'To Be Continued',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('statuses')->insert([
            'name' => 'Completed',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
