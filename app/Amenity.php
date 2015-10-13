<?php namespace solyluna;

use Illuminate\Database\Eloquent\Model;

class Amenity extends Model {

    protected $fillable = ['property_id', 'category', 'amenity'];


    public function property()
    {
        return $this->belongsTo('solyluna\Property');
    }

}
