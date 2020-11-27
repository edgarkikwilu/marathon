<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Request as Marathon;

class DashboardController extends Controller
{
    public function loadData(Request $request){
        // dd("afds");
        $marathons = Marathon::paginate(5);
        try{
            $male = count($marathons->groupBy('gender')['Male']);
        }catch(\Exception $ex){
            $male = 0;
        }

        try{
            $female = count($marathons->groupBy('gender')['Female']);
        }catch(\Exception $ex){
            $female = 0;
        }

        $total = Marathon::count();

        // dd(count($marathons->groupBy('gender')['Female']));

        return view("dashboard")->withMarathons($marathons)->withMale($male)->withFemale($female)->withTotal($total);
    }
}
