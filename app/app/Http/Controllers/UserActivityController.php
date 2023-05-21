<?php

namespace App\Http\Controllers;

use App\Models\UserActivity;
use App\Models\ActivitiesType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;

use App\Models\User;

class UserActivityController extends Controller
{
    /**
     * Display a calendar of the resource.
     */
    public function index_calendar()
    {

        $month = date('m');

        $data = UserActivity::whereMonth('created_at',$month)->get();;
        $events = [];

        foreach($data as $elem){
            $events[]=[
                'title' => $elem->title,
                'start' =>$elem->add_date,
                'end' => $elem->add_date,
                'id' => $elem->id
            ];
        }

        //
        return view('userPanel', ['jsonCurrentMonth' => $events]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index_list()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($date=null)
    {
        //
        $types = ActivitiesType::all();
        return view('activityAdd', ['date'=>$date, 'types'=>$types]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $validator = Validator::make(
            $request->all(),
            [
                'act_type'=> 'required|Integer',
                'act_start'=> 'required',
                'act_name'=> 'required',
                'act_value'=> 'required',
                'act_time'=> 'required',

            ]
        );

        if($validator->passes()){
            $typ = ActivitiesType::where('slug','inne');
            $optional_activity = $request->input('act_optional', null);


            $ACT = UserActivity::create([

                'user_id' => Auth::user()->id,
                'activity_type_id' => $request->input('act_type'),
                'add_date' => $request->input('act_start'),
                'update_date' => $request->input('act_start'),
                'title' => $request->input('act_name'),
                'value' => $request->input('act_value'),
                'total_time' => $request->input('act_time'),
                'description' => $request->input('desc'),
            ]);

        }

        return redirect('/home');

    }

    /**
     * Display the specified resource.
     */
    public function show(UserActivity $userActivity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserActivity $userActivity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserActivity $userActivity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserActivity $userActivity)
    {
        //
    }



    // additional methods
    public function getJsonByMonth($monthNumber){

        $data = UserActivity::whereMonth('created_at',$monthNumber)->get();;
        $events = [];

        foreach($data as $elem){
            $events[]=[
                'title' => "$elem->title",
                'start' => "$elem->add_date",
                'end' => "$elem->add_date"
            ];
        }

        return $json = json_encode($events);

    }

}


