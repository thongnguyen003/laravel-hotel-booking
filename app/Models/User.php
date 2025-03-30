<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Exception;

class User extends Authenticatable
{
    protected $table = 'users';
    protected $append = ['data_parts'];
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'day_of_birth', 'gender', 'role', 'phone'
    ];

    protected $hidden = [
        'password',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function getDataPartsAttribute(){
        return $this->split_date($this->day_of_birth);
    }
    public function split_date($date) {
        try {
            $dateObj = new \DateTime($date);
            return [
                'year'  => $dateObj->format('Y'),
                'month' => $dateObj->format('m'),
                'day'   => $dateObj->format('d'),
            ];
        } catch (Exception $e) {
            return null; 
        }
    }
}
