<?php

namespace App\Http\Livewire\Website\Home\Components;

use App\Models\Brand;
use App\Models\BrandModel;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class HomeHero extends Component
{



    // :: variable
    public $manufactureYear;
    public $brandId;






    public function searchVehicle()
    {

        // 1: makeFilterSessions
        $this->manufactureYear ? Session::flash('manufactureYear', $this->manufactureYear) : null;
        $this->brandId ? Session::flash('brandId', $this->brandId) : null;


        return $this->redirect('/stock', navigate: true);


    } // end function









    // -------------------------------------------------------------------




    public function render()
    {

        // ::root
        $currentYear = date('Y');


        // 1: dependencies
        $brands = Brand::all();
        $brandModels = BrandModel::all();


        // 1.2: years
        $years = [];
        for ($i = 1; $i > -4; $i--)
            array_push($years, $currentYear + $i);




        return view('livewire.website.home.components.home-hero', compact('brands', 'brandModels', 'years'));


    } // end function



} // end component
