<?php

namespace App\Http\Livewire\Website\Stock\Components;

use App\Models\Brand;
use App\Models\BrandModel;
use Livewire\Component;

class StockVehicles extends Component
{


    // :: variable
    public $manufactureYear;
    public $brandId;
    public $brandModelId;



    public function mount()
    {


        // 1: checkSessions
        ! empty(session('manufactureYear')) ? $this->manufactureYear = session('manufactureYear') : null;
        ! empty(session('brandId')) ? $this->brandId = session('brandId') : null;


    } // end function




    // --------------------------------------------------------


    public function render()
    {


        // ::root
        $currentYear = date('Y');


        // 1: dependencies
        $brands = Brand::all();
        $brandModels = $this->brandId ? BrandModel::where('brandId', $this->brandId)->get() : [];



        // 1.2: years
        $years = [];
        for ($i = 1; $i > -4; $i--)
            array_push($years, $currentYear + $i);








        // :: init select
        $this->dispatch('init-tooltip');
        $this->dispatch('init-child-select');




        return view('livewire.website.stock.components.stock-vehicles', compact('brands', 'brandModels', 'years'));

    } // end function


} // end component
