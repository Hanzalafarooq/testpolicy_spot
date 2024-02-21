<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    use HasFactory;
    protected $table='category';
    public function insurances()
    {
        return $this->hasMany(Insurance::class , 'insurance_id');
    }
    protected $fillable = [
        'category_title',
        // 'slug',
        // 'status',
        // 'featured_image',
        // 'meta_title',
        // 'meta_description'
    ];
    // public function sluggable():array {
        // return [
        //     'slug' => [
        //         'source' => 'category_title'
        //     ]
        // ];
    }
    // public function Subcategories() {
    //     return $this->hasMany(Subcategories::class, 'category_id_fk', 'id');
    // }
    // public function product() {
    //     return $this->hasMany(product::class, 'category_id',	'id');
    // }
// }
