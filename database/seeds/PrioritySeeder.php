<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('priorities')->insert([
            ['sort' => 100, 'name' => 'Low', 'slug' => 'low', 'created_at' => now()],
            ['sort' => 200, 'name' => 'Normal', 'slug' => 'normal', 'created_at' => now()],
            ['sort' => 300, 'name' => 'High', 'slug' => 'high', 'created_at' => now()],
            ['sort' => 400, 'name' => 'Immediate', 'slug' => 'immediate', 'created_at' => now()],
        ]);
    }
}
