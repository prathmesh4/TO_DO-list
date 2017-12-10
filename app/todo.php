<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    public function getTitleAttribute($value)
    {
    	return ucfirst($value);
    }
    public function setTitleAttribute($value)
    {
    	return $this->attributes['title']=ucfirst($value);
    }
}
