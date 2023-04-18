<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;
    //make the fillable fields
    protected $fillable = [
        'first_name',
        'last_name',
        'date_of_birth',
        'address',
        'teaching_experience',
        'field_of_expertise',
        'user_id',
        'approved',
        'image',
        'cv',
        'address',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
    public function progress()
    {
        return $this->morphOne(Progress::class, 'progressable');
    }
}
