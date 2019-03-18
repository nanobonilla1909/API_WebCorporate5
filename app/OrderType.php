<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Order;

class OrderType extends Model
{

	use SoftDeletes;

	protected $dates = ['deleted_at'];

    protected $fillable = [
        'name'
    ];


    public function orders() {

        return $this->hasMany(Order::class);
    }

}
