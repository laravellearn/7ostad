<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'grade_id',
        'study_id',
        'user_id',
        'fname',
        'lname',
        'email',
        'national_code',
        'birthdate',
        'address',
        'description',
        'image',
        'gender',
        'school',
        'zipcode',
        'mobile',
        'phone',
        'status',
        'stid'
    ];
    public function study()
    {
        return $this->belongsTo(Study::class);
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
