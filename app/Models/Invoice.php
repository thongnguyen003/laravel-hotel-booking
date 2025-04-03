<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relation\BelongsTo;
use Illuminate\Database\Eloquent\Relation\HasMany;
use App\Models\Booking;
use App\Models\User;
class Invoice extends Model
{
    protected $table = "invoices";
    //
    protected function user() : BelongsTo 
    { 
        $this->belongsTo(User::class,'user_id');
    }
    protected function booking() : HasMany
    {
         $this->hasMany(Booking::class,'booking_id');
    }
}
