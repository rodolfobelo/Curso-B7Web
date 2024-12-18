<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Address extends Model
{
    public $table = 'addresses';

    protected $fillable = [
        'address', 'users_id'
    ];

    protected $hidden = ['users_id'];

    public function user() {
        return $this->hasOne(User::class, 'id', 'users_id');
    }

    use HasFactory;
}
