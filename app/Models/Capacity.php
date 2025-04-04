<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Relation\BelongsTo;
// use Illuminate\Database\Eloquent\Relation\HasMany;
use App\Models\Room;
class Capacity extends Model
{
    protected $table = "capacities";
    protected $fillable = ['capacity'];
    public function room () 
    {
        return $this->hasMany(Room::class,'capacity_id');
    }
}
