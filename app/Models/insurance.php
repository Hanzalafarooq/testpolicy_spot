<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class insurance extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function faqs()
{
    return $this->hasMany(Faq::class);
}

    protected $table = 'insurances';
    public function sluggable():array {
        return [
            'slug' => [
                'source' => 'insurance_id'
            ]
        ];
    }
}
