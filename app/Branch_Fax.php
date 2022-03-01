<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch_Fax extends Model
{
    protected $fillable=['Fax', 'Branches_ID'];
    public $timestamps = false;
    protected $table='branche_fax';
    protected $primaryKey ='Fax';

    public function Branches_Tel(){
        return $this->belongsTo(Branch::class,'Branches_ID','ID');
    }
}
