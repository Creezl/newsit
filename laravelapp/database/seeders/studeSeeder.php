<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\st;
use App\Database\Factories\stFactory;

class studeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {st::factory()->count(100)->create();
        /*st::create([
            'name'=> "Илья",
            'vozrast'=> "18",
            
        ]);*/
        //
    }
}
