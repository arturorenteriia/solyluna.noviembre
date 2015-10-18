<?php namespace solyluna;

use Illuminate\Database\Eloquent\Model;

class TextWelcome extends Model {

    protected $fillable = ['title', 'firstText', 'secondText', 'phrase', 'description'];

}
