<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\BrandModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class BrandSeeder extends Seeder
{


    public function run() : void
    {


        // 1: import JSON
        $brandAndModels = Storage::disk('public')->get('sources/vehicles.json');
        $brandAndModels = json_decode($brandAndModels);
        $IDCounter = 1;


        // 1: loop - Brand
        foreach ($brandAndModels as $brandAndModel) {


            // 1.2: createBrand
            $singleBrand = Brand::create([
                'name' => $brandAndModel->brand,
                'nameAr' => $brandAndModel->brand
            ]);


            foreach ($brandAndModel->models as $singleModel) {


                // 1.3: createBrandModel
                BrandModel::create([
                    'name' => $singleModel,
                    'nameAr' => $singleModel,
                    'brandId' => $IDCounter,
                ]);


            } // end loop




            // :: nextID
            $IDCounter++;


        } // end loop






    } // end function



} // end seeder
