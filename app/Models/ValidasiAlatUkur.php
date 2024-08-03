<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValidasiAlatUkur extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'alat_ukur_id',
        'validation_date',
        'upload_file_validation',
    ];

    public function alatUkur()
    {
        return $this->belongsTo(AlatUkur::class);
    }


    
}
