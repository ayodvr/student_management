<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 

class staff extends Model
{
    //
    use SoftDeletes;
    
    protected $table = 'staff';
    public $primaryKey = 'id';
    public $timeStamps = true;
    

    protected $dates = ['deleted_at'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
