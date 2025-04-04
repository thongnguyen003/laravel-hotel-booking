<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory; // Correct import for HasFactory
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Relations\BelongsTo;
// use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Booking;
use App\Models\User;
class Invoice extends Model
{
    use HasFactory;  // Use the HasFactory trait to enable model factories

    protected $fillable = [
        'id',
        'user_id',
        'check_in',
        'check_out',
        'total_amount',
        'gateway_id',
        'payment_status',
    ];
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
