<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $fillable=['ID', 'Branch_Name' , 'Address' , 'Agents_ID'];
    public $timestamps = false;
    protected $table='branches';
    protected $primaryKey ='ID';

    public function Agents(){
        return $this->belongsTo(Agent::class,'Agents_ID','ID');
    }

}
