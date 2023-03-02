<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('_fordaproduct')->insert([
        // \App\Models\User::factory(10)->create();
        'id' => 1,
        'header' => '-By Maria Jessica Jupillo',
        'desc' => 'PosibiliTEA',
        'desc2' => 'Milktea',
        'title' => 'Options to Choose',
        ]);
    }
}
