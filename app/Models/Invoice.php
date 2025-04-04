<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Relations\BelongsTo;
// use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Booking;
use App\Models\User;
class Invoice extends Model
{
    protected $table = "invoices";
    //

    public function user() 
    { 
        return $this->belongsTo(User::class,'user_id');
    }
    public function booking() 
    {
        return $this->hasMany(Booking::class,'invoice_id');

    }
}
