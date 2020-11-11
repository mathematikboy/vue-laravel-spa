<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Model\Bookable;
use Model\Booking;
class Review extends Model
{
    use HasFactory;
     protected $fillable = ['id', 'content', 'rating'];
      public function bookable(){
        return $this->belongsTo(Bookable::class);
    }
    public function booking(){
        return $this->belongsTo(Booking::class);
    }
    public function getIcrementing(){
        return false;
    }
    public function getKeyType(){
        return 'string';
    }

}
