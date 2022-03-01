<?php

namespace App;
use App\Agent;
use App\Organization;
use Illuminate\Database\Eloquent\Relations\pivot;
use Illuminate\Database\Eloquent\Builder;

class Membership extends pivot
{
    protected $fillable=['Organizations_ID', 'Agents_ID'];

    public $timestamps = false;
    protected $table='membership';
    protected $primaryKey =['Organizations_ID', 'Agents_ID'];
}
