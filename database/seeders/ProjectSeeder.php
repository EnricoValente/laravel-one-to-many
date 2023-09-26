<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Type;
class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::truncate();

        for ($i=0; $i < 20; $i++) { 
            $randomType=Type::inRandomOrder()->first();
            Project::create([
                'title'=>fake()->sentence(3),
                'description'=>fake()->paragraph(),
                'start_date'=>fake()->dateTimeBetween('-1 year', 'now'),
                'end_date'=>fake()->dateTimeBetween('now' , '+1year'),
                'chief'=>fake()->firstName(),
                'members'=>fake()->randomDigitNotNull(),
                'type_id'=>$randomType->id

            ]);
        }
    }
}




