<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    // Table Name
    protected $table = 'events'; //Moet niet (zo kan je naam veranderen)

    // Primary Key
    public $primaryKey = 'id';

    //Timestamps
    public $timeStamps = true; //standaard op true

    public function user(){
        return $this->belongsTo('App\User');
    }
}
