<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Request as Marathon;

class DashboardController extends Controller
{
    public function loadData(Request $request){
        $marathons = Marathon::all();
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

        // dd(count($marathons->groupBy('gender')['Female']));

        return view("dashboard")->withMarathons($marathons)->withMale($male)->withFemale($female);
    }
}
