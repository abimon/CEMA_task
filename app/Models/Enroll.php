<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{
    //
    protected $fillable = [
        'client_id',
        'program_id',
        'is_active',
    ];
    public function user(){
        return $this->belongsTo(User::class,'client_id','id');
    }
    public function program(){
        return $this->belongsTo(Program::class,'program_id','id');
    }
}
