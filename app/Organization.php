<?php
use App\Agent;
namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $fillable=['ID', 'Name'];

    public $timestamps = false;
    protected $table='organizations';
    protected $primaryKey ='ID';

    public function agents()
    {
        return $this->belongsToMany(Agent::class)->using(Membership::class);
    }
}
