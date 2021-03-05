<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profiles';

    protected $fillable = ['title', 'speciality', 'location', 'intro', 'eductaion', 'avatar','language'];


    protected $hidden = [
        'user_id',
        'review_id',
    ];
       
    

    public function user()
    {
       return $this->belongsTo(User::class);
    }


    public function reviews()
    {

       return $this->hasMany(Review::class);

    }


   
    public function conditions()
    {

       return $this->hasMany(Condition::class);

    }


   
    public function healthtest()
    {

       return $this->hasMany(HealhTtest::class);

    }



    public function symptoms()
    {

      return $this->hasMany(Symptom::class);

    }


    public function  healthgoal()
    {

      return $this->hasMany(HealhTGoal::class);

    }











}


