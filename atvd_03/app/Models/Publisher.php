<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Publisher extends Model
{
    use Hasfactory; 

    protected $fillable = ['name','address'];

    public function books(){
        return $this->hasMany(Book::class);
        
    }


}
