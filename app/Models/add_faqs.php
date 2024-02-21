<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class add_faqs extends Model
{
    use HasFactory;
    protected $table='faqs';
    public function insurance()
    {
        return $this->belongsTo(Insurance::class, 'insurance_id');
    }
}
