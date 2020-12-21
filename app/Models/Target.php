<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Target extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','name','start_date','end_date','status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function subtargets()
    {
        return $this->belongsToMany(Subtarget::class);
    }
}
