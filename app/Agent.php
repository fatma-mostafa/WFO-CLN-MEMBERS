<?php

namespace App;
use App\Category;
use App\Country;
use App\Organization;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $fillable=['ID', 'companyName' , 'Country_Name' , 'Category_ID'];
    public $timestamps = false;
    protected $table='agents';
    protected $primaryKey ='ID';



    public function Categories(){
        return $this->belongsTo(Category::class,'Category_ID','ID');
    }

    public function Countries(){
        return $this->belongsTo(Country::class,'Country_Name','Name');
    }

    public function organizations()
    {
        return $this->belongsToMany(Agent::class)->using(Membership::class);
    }
}
