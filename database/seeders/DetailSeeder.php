<?php

namespace Database\Seeders;

use App\Models\Detail;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DetailSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        $strands = ['STEM', 'BAE', 'ASSH','TECHPRO_ict','TECHPRO_ht'];
        $programs = ['AB-ENG','ACT','BEED', 'BSBA-HRM','BSCS','BSED','BSHM','BSBA-MM' ,'BSPSY','BSTM'];

        // 50 SHS records (grade_level_code = 1)
        for ($i = 0; $i < 100; $i++) {
            Detail::create([
                'current_grade_level'  => $faker->randomElement(['Grade 10', 'Grade 11']),
                'incoming_grade_level' => $faker->randomElement(['Grade 11', 'Grade 12']),
                'first_name'           => $faker->firstName(),
                'middle_name'          => $faker->lastName(),
                'last_name'            => $faker->lastName(),
                'preferred_strand'     => $faker->randomElement($strands),
                'contact_number'       => '09' . $faker->numerify('#########'),
                'email'                => $faker->unique()->safeEmail(),
                'grade_level_code'     => 1,
            ]);
        }

        // 50 College records (grade_level_code = 2)
        for ($i = 0; $i < 100; $i++) {
            Detail::create([
                'current_grade_level'  => $faker->randomElement(['Freshman', '2nd Year', '3rd Year']),
                'incoming_grade_level' => $faker->randomElement(['2nd Year', '3rd Year', '4th Year']),
                'first_name'           => $faker->firstName(),
                'middle_name'          => $faker->lastName(),
                'last_name'            => $faker->lastName(),
                'preferred_strand'     => $faker->randomElement($programs),
                'contact_number'       => '09' . $faker->numerify('#########'),
                'email'                => $faker->unique()->safeEmail(),
                'grade_level_code'     => 2,
            ]);
        }
    }
}