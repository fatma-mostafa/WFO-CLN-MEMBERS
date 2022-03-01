<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch_Tel extends Model
{
    protected $fillable=['Telephone_Number', 'Branches_ID'];
    public $timestamps = false;
    protected $table='branche_tel';
    protected $primaryKey ='Telephone_Number';

    public function Branches_Tel(){
        return $this->belongsTo(Branch::class,'Branches_ID','ID');
    }
}
