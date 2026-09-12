<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

public function run(): void
{
    $faker = \Faker\Factory::create('ja_JP');

    for ($i = 0; $i < 20; $i++) {

        $contact = \App\Models\Contact::create([
            'category_id' => \App\Models\Category::inRandomOrder()->first()->id,
            'first_name'  => $faker->firstName(),
            'last_name'   => $faker->lastName(),
            'gender'      => $faker->numberBetween(1, 3),
            'email'       => $faker->safeEmail(),
            'tel'         => $faker->numerify('0##########'),
            'address'     => $faker->address(),
            'building'    => $faker->optional()->secondaryAddress(),
            'detail'      => $faker->realText(120),
        ]);

        $tagIds = \App\Models\Tag::inRandomOrder()
            ->limit(random_int(1, 3))
            ->pluck('id');

        $contact->tags()->attach($tagIds);
    }
}



}
