<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * model pour la table railway incident
 */
class RailwayIncident extends Model
{
    use HasFactory;

    /**
     * variable de la table
     *
     * @var string
     */
    protected $table = 'railway_incident';

    /**
     * clef primaire de la table
     *
     * @var string
     */
    protected $primaryKey = 'railway_incident_id';

    /**
     * il n'y a pas de date pour la table
     *
     * @var boolean
     */
    public $timestamps = false;

    
    /**
     * fonction pour lier la table à la table incident (FK)
     *
     * @return void
     */
    public function Incident()
    {
        return $this->belongsTo(Incident::class, 'incident_id', 'incident_id');
    }

}
