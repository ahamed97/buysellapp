<?php

namespace App\Models;

use App\Models\Advertisement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'advertisement_id',
        'order_details',
        'description_1',
        'description_2',
        'description_3',
        'status'
    ];

    protected $visible = ['id','customer_id','advertisement_id','order_details','description_1','description_2','description_3','status'];


    public function advertisement()
    {
        return $this->belongsTo(Advertisement::class);
    }
}
