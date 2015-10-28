<?php namespace solyluna;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model {

    protected $fillable = ['image1', 'image2', 'image3', 'image4', 'image5', 'image6', 'image7', 'image8', 'image9', 'property_id'];

    public function setImage1Attribute($value)
    {
        if(!empty($value))
        {
            $this->attributes['image1'] = $value;
        }
    }

    public function setImage2Attribute($value)
    {
        if(!empty($value))
        {
            $this->attributes['image2'] = $value;
        }
    }

    public function setImage3Attribute($value)
    {
        if(!empty($value))
        {
            $this->attributes['image3'] = $value;
        }
    }

    public function setImage4Attribute($value)
    {
        if(!empty($value))
        {
            $this->attributes['image4'] = $value;
        }
    }

    public function setImage5Attribute($value)
    {
        if(!empty($value))
        {
            $this->attributes['image5'] = $value;
        }
    }

    public function setImage6Attribute($value)
    {
        if(!empty($value))
        {
            $this->attributes['image6'] = $value;
        }
    }

    public function setImage7Attribute($value)
    {
        if(!empty($value))
        {
            $this->attributes['image7'] = $value;
        }
    }

    public function setImage8Attribute($value)
    {
        if(!empty($value))
        {
            $this->attributes['image8'] = $value;
        }
    }

    public function setImage9Attribute($value)
    {
        if(!empty($value))
        {
            $this->attributes['image9'] = $value;
        }
    }

}
