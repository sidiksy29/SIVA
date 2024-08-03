<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    //add fillable
    protected $fillable = [
        'name',
        'code',
    ];

    public function alatUkurs()
    {
        return $this->hasMany(AlatUkur::class);
    }
}
