<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\st;   
//use App\database\factories\studeFactory;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {st::create([
        'name'=> "Илья",
        'vozrast'=> "18",
        
    ]);
       // stude::factory()->count(10)->create();
        /*App\Models\Post::factory()->count(10)->create();
        \App\Models\Post::factory(10)->create();
       \App\Models\lud1::factory()->create([
            'fam' => 'Trishkin',
            'imya' => 'Ilya',*/
        
    }
}
