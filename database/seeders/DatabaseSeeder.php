<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {


        // :: callSeeders
        $this->call([
            BrandSeeder::class
        ]);

    } // end function


} // end seeder
