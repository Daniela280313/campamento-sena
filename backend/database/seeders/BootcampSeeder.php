<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use File;
use App\Models\Bootcamps;

class BootcampSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //conectarnos al archivo json 
        $json = File::get("database/_data/bootcamps.json");
        json_decode($json);
        $Array_bootcamps=json_code($json);
        //reoger el archivo
        foreach($Array_bootcamps as $b ){

        
        //por cada instancia crear un bootcamps

        $bootcamp = new Bootcamp();
        $bootcamp ->name = $b -> name();
        $bootcamp ->descripcion = $b-> description();
        $bootcamp ->website = $b-> website();
        $bootcamp ->phone = $b-> phone();
        $bootcamp ->user_id = $b-> user_id();
        $bootcamp ->average_reating = $b-> average_reating();
        $bootcamp ->average_cost = $b-> average_cost();
        $bootcamp -> save();

        
        }
    }
}
