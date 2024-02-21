<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    protected $table = 'faqs_cms';
    // protected $fillable = [
    //     'title',
    //     'description',
    //     'order_no'
    // ];
}
