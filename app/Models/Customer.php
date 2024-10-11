<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
use BezhanSalleh\FilamentShield\Traits\HasPanelShield;

class Customer extends Model
{
    use HasFactory, HasRoles, HasPanelShield;
    //add fillable
    protected $guard_name = 'web'; 
    protected $fillable = [
        'name',
        'code',
    ];

    public function alatUkurs()
    {
        return $this->hasMany(AlatUkur::class);
    }
}
