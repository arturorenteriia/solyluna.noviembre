<?php namespace solyluna;

use Illuminate\Database\Eloquent\Model;

class Gastronomy extends Model {

    protected $fillable = ['nombre', 'apellidos', 'acerca', 'docencia', 'image', 'property_id'];
    public function property()
    {
        return $this->belongsTo('solyluna\Property');
    }
}
