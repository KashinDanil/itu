<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            ['sort' => 100, 'name' => 'bug', 'slug' => 'bug', 'created_at' => now()],
            ['sort' => 200, 'name' => 'feature', 'slug' => 'feature', 'created_at' => now()],
            ['sort' => 300, 'name' => 'documentation', 'slug' => 'documentation', 'created_at' => now()],
        ]);
    }
}
