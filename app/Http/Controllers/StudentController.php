<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\studentfees;
use App\User;
use Illuminate\Http\Request;
use DB;

class FeesController extends Controller
{
    public function newFees(){
		$fees = new studentfees;
		$fees->studentemail = request('studentemail');
		$fees->year = request('year');
		$fees->semester = request('semester');
		$fees->amountpaid = request('amountpaid');
		$fees->save();
        echo('Fees Payement Registered');
        //$request->session()->flash(form_status, ‘Form submission was successful!');

	}

    public function allStudentFees(){
    	$studentfees =studentfees::all();
    	return view('allstudents',['studentfees'=>$studentfees]);
    }
    
      public function particularStudentFees(){
        // $users = database::select('select * from studentfees where $email="email"');
     $email = request('email');
    // dd($email);
     // return view('particularfees',['users'=>$users]);
        //$student = studentfees;
        //$student->studentemail = request('studentemail');
      $students = studentfees::where('studentemail', '=', $email)->get();
      //firstOrFail();
      //dd($student);
      //return $r;
        return view('particularfees', ['students'=> $students]);
        // $instance = new User;
         //$email = request('email');
     	//$user =  User::find($email)->studentsfees;
      //   return $user;
        //$result =$user->manyfees();
     	// return view('particularfees',['user'=>$user]);
}
public function index()
    {
        return view('particularfees');
    }
     // }

}
