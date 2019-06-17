<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\studentfees;
use App\User;
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
        // $instance = new User;
         $email = request('email');
     	$user =  User::find($email);
     	return $user->manyfees;
}
public function index()
    {
        return view('particularfees');
    }
     // }

}
