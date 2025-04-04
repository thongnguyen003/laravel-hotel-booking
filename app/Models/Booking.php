<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Relations\BelongsTo;
// use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Room;
use App\Models\Invoice;
class Booking extends Model
{
    protected $table = "bookings";

    public function room() 
    {
        return $this->belongsTo(Room::class,'room_id');
    }
    public function invoice () 
    {
        return $this->belongsTo(Invoice::class,'invoice_id');
    }
 }
