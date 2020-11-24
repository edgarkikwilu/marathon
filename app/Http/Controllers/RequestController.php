<?php

namespace App\Http\Controllers;

use App\Models\Request as MarathonRequest;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function all(Request $request){
        $marathonRequests = MarathonRequest::all();
        return view('admin.marathons')->withRequests($marathonRequests);
    }

    public function store(Request $request){
        // dd($request->all());

        $marathonRequest = new MarathonRequest();
        $marathonRequest->full_name = $request->fullname;
        $marathonRequest->nationality = $request->nationality;
        $marathonRequest->gender = $request->gender;
        $marathonRequest->age = $request->age;
        $marathonRequest->mobile = $request->mobile;
        $marathonRequest->email = $request->email;
        $marathonRequest->district = $request->district;
        $marathonRequest->race_category = $request->race_category;
        $marathonRequest->team_name = $request->team_name;
        $marathonRequest->emergency = $request->emergency;
        $marathonRequest->save();

        return redirect()->route('success');
    }   
}
