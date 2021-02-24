<?php

namespace App\Models;

use App\Models\Route;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Advertisement extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'district_id',
        'route_id',
        'vehicle_type_id',
        'seller_id',
        'title',
        'description',
        'sub_description',
        'date',
        'from_time',
        'to_time'
    ];

    protected $appends = [
        'category',
        'district',
        'vehicle_type',
        'route'
    ];

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function vehicleType()
    {
        return $this->belongsTo(VehicleType::class);
    }

    public function route()
    {
        return $this->belongsTo(Route::class);
    }

    public function getDistrictAttribute()
    {
        return ($this->district()->first())?($this->district()->first()->name):(null);
    }

    public function getCategoryAttribute()
    {
        return ($this->category()->first())?($this->category()->first()->name):(null);
    }

    public function getVehicleTypeAttribute()
    {
        return ($this->vehicleType()->first())?($this->vehicleType()->first()->name):(null);
    }

    public function getRouteAttribute()
    {
        return ($this->route()->first())?($this->route()->first()->route):(null);
    }
}
