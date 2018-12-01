<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Voucher;
class VoucherParticular extends Model
{
    public function voucher()
    {
    	return $this->belongsTo(Voucher::class);
    }
}
