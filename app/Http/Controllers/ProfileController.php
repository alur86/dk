<?php

namespace App\Http\Controllers\User;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use View;
use App\Models\HealthTest;
use App\Models\HealthGoat;
use App\Models\Symptoms;
use App\Models\User;
use App\Models\Review;
use App\Models\Condition;

class ProfileController extends AppUserController
{


    public function __construct()
    {
        $this->middleware('auth');
    }




    public function profile(Request $request)
    {
    	$id = request->get('profile_id');

        $profile = Profile::findOrFail($id);
        $symptoms = Symptom::where('profile_id','=',$id)->get();
        $reviews = Review::where('profile_id','=',$id)->get();
        $healthgoats = HealthGoat::where('profile_id','=',$id)->get();
        $healhtests = HealTest::where('profile_id','=',$id)->get();
        $conditions = Condition::where('profile_id','=',$id)->get();

        return view('profile.index',compact('profile','symptoms', "reviews",'healhtests','healthgoats','conditions'));
    }

    
  
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}
