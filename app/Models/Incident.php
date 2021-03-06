<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * Model pour la table incident
 */
class Incident extends Model
{

    use HasFactory;
    /**
     * nom de la table
     *
     * @var string $table
     */
    protected $table = 'incident';

    /**
     * clef primaire
     *
     * @var string 
     */
    protected $primaryKey = 'incident_id';

    /**
     * Pas de table avec dates
     *
     * @var boolean
     */
    public $timestamps = false;

    // public function countrys()
    // {
    //     $this->belongsToMany(Countrys::class, 'have_incident', 'incident_id', 'country_id', 'incident_id', 'country_id');
    // }
    
    public function countrys() {
       return $this->belongsTo(Countrys::class, 'country_id', 'country_id' );
    }


    public function railwayIncident()
    {
        return $this->hasOne(RailwayIncident::class, 'incident_id', 'incident_id');
    }

    public function mobilityIncident()
    {
        return $this->hasOne(MobilityIncident::class, 'incident_id', 'incident_id');
    }
}
