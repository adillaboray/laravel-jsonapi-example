<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        DB::table('people')->insert([
            'name' => Str::random(15),
            'nickname' => Str::random(6),
            'birth_date' => $faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now'),
            'email' => Str::random(10).'@email.com',
            'gender' => $faker->randomElement($array = array ('male', 'female'))
        ]);
    }
}
