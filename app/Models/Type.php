<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Relations\BelongsTo;
// use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Room;
class Type extends Model
{
    protected $table = "types";

    public function room() : HasMany
    {
        return $this->hasMany(Room::class,'room_id');
    }
}
