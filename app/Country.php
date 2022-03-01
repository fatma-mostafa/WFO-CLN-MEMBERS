<?php
use App\Agent;
namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable=['Name'];

    public $timestamps = false;
    protected $table='country';
    protected $primaryKey ='Name';

    public function Agents()
    {
        return $this->hasMany(Agent::class,'Name','Country_Name');
    }
}
