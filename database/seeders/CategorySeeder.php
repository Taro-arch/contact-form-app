<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{


    public function run(): void
    {

    \App\Models\Category::insert([
        ['content' => '商品のお届けについて'],
        ['content' => '商品の交換について'],
        ['content' => '商品トラブル'],
        ['content' => 'ショップへのお問い合わせ'],
        ['content' => 'その他'],
    ]);

    }




}
