<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Patient;
use Illuminate\Database\Eloquent\SoftDeletes;
class PatientTreatment extends Model
{
	use SoftDeletes;
	
    public function patient()
    {
    	return $this->belongsTo(Patient::class);
    }
}
