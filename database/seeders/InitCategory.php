<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InitCategory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(['name' => '挨拶', 'user_id' => 1, 'description' => '']);
        DB::table('categories')->insert(['name' => '紹介', 'user_id' => 1, 'description' => '']);
        DB::table('categories')->insert(['name' => '電話をかける', 'user_id' => 1, 'description' => '']);
        DB::table('categories')->insert(['name' => '注意を受ける', 'user_id' => 1, 'description' => '']);
    }
}
