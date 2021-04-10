<?php

namespace App\Models;

use App\Models\User;
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
        'status',
        'add_line_1',
        'add_line_2',
        'add_line_3',
        'latitude',
        'longitude'
    ];

    protected $visible = ['id','customer_id','advertisement_id','order_details','description_1','description_2','description_3'
        ,'status','add_line_1','add_line_2','add_line_3','latitude','longitude','name','last_name','phone','add_line_1','add_line_2','add_line_3','created_at',
        'updated_at'];

    protected $appends = ['name','last_name','phone','add_line_1','add_line_2','add_line_3'];


    public function advertisement()
    {
        return $this->belongsTo(Advertisement::class);
    }

    public function customer()
    {
        return $this->belongsTo(User::class);
    }

    public function getNameAttribute()
    {
        return $this->customer->name;
    }

    public function getLastNameAttribute()
    {
        return $this->customer->last_name;
    }

    public function getPhoneAttribute()
    {
        return $this->customer->phone;
    }

    public function getAddLine1Attribute()
    {
        return $this->customer->add_line_1;
    }

    public function getAddLine2Attribute()
    {
        return $this->customer->add_line_2;
    }

    public function getAddLine3Attribute()
    {
        return $this->customer->add_line_3;
    }




}
