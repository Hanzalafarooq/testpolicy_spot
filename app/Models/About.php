<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

        protected $table = 'about_us';
        public function sluggable():array {
            return [
                'slug' => [
                    'source' => 'title'
                ]
            ];
        }
}