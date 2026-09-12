<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{

    public function run(): void
    {

    \App\Models\Tag::insert([
        ['name' => '質問'],
        ['name' => '要望'],
        ['name' => '不具合報告'],
        ['name' => 'ご意見'],
        ['name' => 'その他'],
    ]);

    }




}
