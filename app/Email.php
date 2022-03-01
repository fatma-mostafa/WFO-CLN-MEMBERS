<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $fillable=['Email', 'Branches_ID'];
    public $timestamps = false;
    protected $table='email';
    protected $primaryKey ='Email';

    public function Branches_Tel(){
        return $this->belongsTo(Branch::class,'Branches_ID','ID');
    }
}
