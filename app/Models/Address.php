<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{ 
    protected $fillable = [
      'zipcode',
      'street',
      'neighborhood',
      'city',
      'state'
    ];

    protected $hidden = [
      
    ];

    protected $casts = [
       
    ];
}
