<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Http\Controllers\Controller;

class AdvertisementController extends Controller
{
    public function index(Request $request)
    {

        $advertisements = Advertisement::query();

        if($request->seller_id){
            $advertisements = $advertisements->where('seller_id',$request->seller_id);
        }
        if($request->district_id){
            $advertisements = $advertisements->where('district_id',$request->district_id);
        }
        if($request->route_id){
            $advertisements = $advertisements->where('route_id',$request->route_id);
        }
        if($request->vehicle_type_id){
            $advertisements = $advertisements->where('vehicle_type_id',$request->vehicle_type_id);
        }
        if($request->category_id){
            $advertisements = $advertisements->where('category_id',$request->category_id);
        }


        $advertisements = $advertisements->get();

        return response()->json(['advertisements' => $advertisements,'message' => 'Advertisements get'], 200);
    }

    public function show(Request $request)
    {

        $advertisement = Advertisement::find($request->id);

        return response()->json(['advertisement' => [$advertisement],'message' => 'advertisemen get'], 200);
    }

    public function destroy(Request $request)
    {

        $advertisement = Advertisement::where('id',$request->id)->delete();

        return response()->json(['advertisementDelete' => [],'message' => 'Advertisement deleted'], 200);
    }

    public function store(Request $request)
    {
        $advertisement = Advertisement::create([
            'category_id' => $request->category_id,
            'district_id' => $request->district_id,
            'route_id' => $request->route_id,
            'vehicle_type_id' => $request->vehicle_type_id,
            'seller_id' => $request->seller_id,
            'title' => $request->title,
            'description' => $request->description,
            'sub_description' => $request->sub_description,
            'date' => $request->date,
            'from_time' => $request->from_time,
            'to_time' => $request->to_time,
        ]);

        $advertiser = User::where('id',$request->seller_id)->first();
        if(Advertisement::count() % 10 == 0){

            if($advertiser->rate <= 5){
                User::where('id',$request->seller_id)->increment('rate');
            }
        }

        $advertisement = Advertisement::find($advertisement->id);

        return response()->json(['advertisementCreate' => [$advertisement],'message'=>'Created'], 200);
    }
}
