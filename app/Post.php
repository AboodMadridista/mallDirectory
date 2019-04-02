<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table Name
    protected $table ="Tenants";
    //Primary Key
    public $primaryKey = 'lotNumber';
    //Timestamps
    public $timestamps = 'true';
}
