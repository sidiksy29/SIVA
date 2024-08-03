<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleValidasi extends Model
{
    use HasFactory;
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
