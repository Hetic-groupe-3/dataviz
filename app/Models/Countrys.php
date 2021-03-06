<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countrys extends Model
{
    use HasFactory;
    protected $table = 'countrys';
    protected $primaryKey = 'country_id';
    public $timestamps = false;


    public function incident()
    {
        return $this->hasOne(Incident::class, 'country_id', 'country_id');

    }

    public function organisation()
    {
        return $this->hasOne(organisation::class, 'organisation_id', 'country_id');
    }


}
