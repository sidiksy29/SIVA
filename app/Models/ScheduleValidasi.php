<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
use BezhanSalleh\FilamentShield\Traits\HasPanelShield;

class ScheduleValidasi extends Model
{
    use HasFactory, HasRoles, HasPanelShield;
    protected $guard_name = 'web'; 
    protected $table = 'schedule_validasis';
    protected $fillable = [
        'alat_ukur_id',
        'validation_date',
        'revalidation_date',
    ];
    
    public function alatUkur()
    {
        return $this->belongsTo(AlatUkur::class);
    }

    


}
