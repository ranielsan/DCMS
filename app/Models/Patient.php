<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PatientTreatment;
use Illuminate\Database\Eloquent\SoftDeletes;
class Patient extends Model
{
	use SoftDeletes;
	
    public function treatments()
    {
    	return $this->hasMany(PatientTreatment::class);
    }
}
