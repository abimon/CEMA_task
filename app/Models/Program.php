<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    //
    protected $fillable = [
        'title',
        'code',
        'description',
    ];
    public function enrolls()
    {
        return $this->hasMany(Enroll::class, 'program_id', 'id');
    }
}
