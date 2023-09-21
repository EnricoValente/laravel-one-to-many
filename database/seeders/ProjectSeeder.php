<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::truncate();

        for ($i=0; $i < 20; $i++) { 
            Project::create([
                'title'=>fake()->sentence(3),
                'description'=>fake()->paragraph(),
                'start_date'=>fake()->dateTimeBetween('-1 year', 'now'),
                'end_date'=>fake()->dateTimeBetween('now' , '+1year'),
                'chief'=>fake()->firstName(),
                'members'=>fake()->randomDigitNotNull()





            ]);
        }
    }
}
