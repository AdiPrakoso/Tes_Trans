<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
    protected $fillable = ['nama','email','logo','website'];

    public function employe()
    {
    	return $this->hasMany('App\Employe');
    }
}
