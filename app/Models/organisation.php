<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model 
 */
class organisation extends Model
{
    use HasFactory;
    protected $table = 'organisation';
    protected $primaryKey = 'organisation_id';
}
