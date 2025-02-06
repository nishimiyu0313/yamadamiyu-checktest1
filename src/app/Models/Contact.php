<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'last_name',
        'first_name',
        'gender',
        'email',
        'tel',
        'address',
        'building',
        'detail'
    ];

    public static $rules = array(
            'last_name' => 'required',
            'first_name' => 'required',
            'gender' => 'required',
            'email' => 'required'|'email',
            'tel' => 'required'|'max:5',
            'address' => 'required',
            'building' => 'required',
            'detail' => 'required'|'max:120',
    );
    public function getDetail()
    {
        
    }

    
}