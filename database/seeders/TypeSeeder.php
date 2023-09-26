<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;
use Illuminate\Support\Facades\Schema;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            'PHP',
            'Javascript',
            'Pyton'

        ];
        Schema::withoutForeignKeyConstraints(function () {
            
            Type::truncate();
        });
        
        foreach ($types as $type) {
            Type::create([
                'name'=>$type
            ]);
        }
    }
}
