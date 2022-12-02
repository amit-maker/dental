<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Appointment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if (Auth::id())
        {
            
            if(Auth::user()->usertype=='0')
            {
            return view('home');  
            }
            else
            {

                $search = $request['search'] ?? "";
                if ($search != ""){
                    $appointment = appointment::where('name','LIKE','%'.$search.'%')->get();
                } 
                else{
                    $appointment= appointment::all();

                }

                $data= compact('appointment','search');
                return view('admin.index')->with($data);
                // $appointment= appointment::all();
                // $data= compact('appointment');
                // return view('admin.index')->with($data);
            }


        }

    }

    public function destroy($id)
    {
        
        $appointment= appointment::find($id);
        $appointment->delete();
        return redirect('/home');
    }


}
