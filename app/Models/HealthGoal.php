<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthGoal extends Model
{
    use HasFactory;

    protected $table = 'health_goals';

    protected $fillable = ['title'];



  public function profile() 
  {

   return $this->belongsTo(Profile::class);

  }






}
