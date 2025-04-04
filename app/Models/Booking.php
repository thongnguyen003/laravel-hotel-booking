<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relation\BelongsTo;
use Illuminate\Database\Eloquent\Relation\HasMany;
use App\Models\Room;
use App\Models\Invoice;
class Booking extends Model
{
    protected $table = "bookings";

    protected function room() : BelongsTo 
    {
        $this->belongsTo(Room::class,'product_id');
    }
    protected function invoice () : BelongsTo
    {
        $this->belongsTo(Invoice::class,'invoice_id');
    }
 }
