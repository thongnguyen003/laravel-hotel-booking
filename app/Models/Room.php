<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Relations\HasMany;
// use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Capacity;
use App\Models\Type;
use App\Models\Booking;
class Room extends Model
{
    protected $table = "rooms";
    protected $appends = ['type_name','discount_price'];

    public function capacity () 
    {
        return    $this->belongsTo(Capacity::class,'capacity_id');
    }
    public function type () 
    {
        return $this->belongsTo(Type::class,'type_id');
    }
    public function booking () 
    {
        return $this->hasMany(Booking::class,'room_id');
    }
    public function getTypeNameAttribute()
    {
        return $this->type ? $this->type->type_name : null;
    }
    public function getDiscountPriceAttribute()
    {
        return $this->discount ? ($this->price - $this->discount) : $this->price;
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function markings()
    {
        return $this->hasMany(Marking::class);
    }
}
