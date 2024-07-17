<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 10; $i++) { 
            $newProject = new Project();
            $newProject->title = $faker->sentence(2);
            $newProject->description = $faker->sentence(22);
            $newProject->cover_image = $faker->imageUrl(600, 400, 'projects', true, gray: true, format: 'jpg');
            $newProject->type_id = $faker->numberBetween(1,4);
            $newProject->save();
        }
    }
}
