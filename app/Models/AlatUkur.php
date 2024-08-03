<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlatUkur extends Model
{
    use HasFactory;

    protected $fillable = [
        'assy_number',
        'assy_name',
        'customer_id',
        'registrasi_number',
        'release_date',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function validasiAlatUkurs()
    {
        return $this->hasMany(ValidasiAlatUkur::class);
    }

    public function scheduleValidasis()
    {
        return $this->hasMany(ScheduleValidasi::class);
    }
    
}
