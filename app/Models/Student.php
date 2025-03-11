<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    
    use SoftDeletes;

    protected $fillable = [
     
        'name',
        'email',
        'number',
    ];
    public function numbers(){
        return $this->hasOne(number::class);

    }
    
}
