<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relation\HasMany;
use Illuminate\Database\Eloquent\Relation\BelongsTo;
use App\Models\Capacity;
use App\Models\Type;
class Room extends Model
{
    protected $table = "rooms";

    protected function capacity () : BelongsTo{
        $this->belongsTo(Capacity::class,'capacity_id');
    }
    protected function type () : BelongsTo{
        $this->belongsTo(Type::class,'type_id');
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
