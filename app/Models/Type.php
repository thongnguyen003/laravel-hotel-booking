<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\BelongsTo;
use Illuminate\Database\Eloquent\Relation\HasMany;
use App\Models\Room;
class Type extends Model
{
    protected $table = "types";

    protected function room() : HasMany
    {
        $this->hasMany(Room::class,'room_id');
    }
}
