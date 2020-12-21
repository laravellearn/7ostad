<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    protected $fillable = ['study_id','name','status'];

    public function study()
    {
        return $this->belongsTo(Study::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }

    public function lessongroups()
    {
        return $this->belongsToMany(Lessongroup::class);
    }
}
