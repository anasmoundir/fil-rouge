<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    //make the fillable fields
    protected $fillable = [
        'first_name',
        'last_name',
        'date_of_birth',
        'address',
        'enrollement_date',
        'user_id',
    ];
    use HasFactory;
    //belong to user relation 
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
