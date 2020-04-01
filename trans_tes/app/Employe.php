<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    protected $table = 'employes';
    protected $fillable = ['nama','company_id','email'];

    public function company()
    {
    	return $this->belongsTo('App\Company');
    }
}
