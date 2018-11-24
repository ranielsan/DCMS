<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\VoucherParticular;
class Voucher extends Model
{
   public function particulars()
   {
   	return $this->hasmany(VoucherParticular::class);
   }
}
