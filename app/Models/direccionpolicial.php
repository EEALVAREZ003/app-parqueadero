<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class direccionpolicial extends Model
{
    use HasFactory;

    protected $table='direccionpolicials';
    protected $fillable=['nombres'];
}
