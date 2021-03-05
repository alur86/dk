<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;


    protected $table = 'reviews';

    protected $fillable = ['body', 'rate'];

   
    protected $hidden = ['profile_id'];
       



 public function profile() 
 {

  return $this->belongsTo(Profile::class);

  }





}
