<?php namespace solyluna;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model {

    protected $fillable = ['first_name', 'last_name', 'full_name', 'email', 'telephone', 'country', 'state', 'city', 'zip_code', 'body', 'subject'];

}
