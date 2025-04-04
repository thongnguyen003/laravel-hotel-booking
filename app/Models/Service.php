<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    // app/Models/Room.php
    public function services()
        {
            return $this->belongsToMany(Service::class);
        }
}
