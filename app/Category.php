<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['ID', 'Description'];

    public $timestamps = false;
    protected $table='category';
    protected $primaryKey ='ID';
}
