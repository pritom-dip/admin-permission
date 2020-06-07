<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Dominion;

class Process extends Model
{
    protected $fillable = [
    	'dominion_id', 'guard', 'name', 'route_name'
    ];

    public function dominion(){
    	return $this->belongsTo('App\Model\Dominion');
    }

    // public function setNameAttribute($value){
    //     $this->attributes['name'] = $value;
    //     $this->setRouteNameAttribute($this->attributes['dominion_id'] );
    // }

    // private function setRouteNameAttribute( $dominion_id ){ 
    // 	$dominion_name = strtolower(Dominion::find($dominion_id)->name);
    // 	$this->attributes['route_name'] = $dominion_name . '.' . strtolower($this->attributes['name']); 
    // }

    public function menus(){
        return $this->hasMany('App\Model\Menu');
    }
}
