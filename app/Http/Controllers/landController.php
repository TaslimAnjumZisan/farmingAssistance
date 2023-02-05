<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\land;

class landController extends Controller
{
    public function Landlist()
    {
        return land::all();
    }

    public function landCreate(Request $req)
    {
        $lnd=new land();
        //$lnd->landcode=$req->namelandCode;
        $lnd->landlocation=$req->landLocation;
        $lnd->landsize=$req->landSize;
        $lnd->ownerusername=$req->ownerUserName;
        $lnd->ownercontact=$req->ownerContact;
        $lnd->landregistrationnumber=$req->landRegistrationNumber;
        $lnd->save();
    }

    public function landUpdate(Request $request)
    {

    $lnd = $request->landcode;
    $usetable = new land();
    $landupdate = $usetable->where('landcode', $lnd)->update(['landlocation' => $request->landLocation]);
    $landupdate = $usetable->where('landcode', $lnd)->update(['landsize' => $request->landSize]);
    $landupdate = $usetable->where('landcode', $lnd)->update(['ownerusername' => $request->ownerUserName]);
    $landupdate = $usetable->where('landcode', $lnd)->update(['ownercontact' => $request->ownerContact]);
    $landupdate = $usetable->where('landcode', $lnd)->update(['landregistrationnumber' => $request->landRegistrationNumber]);
    //return redirect()->intended('/profile');       
    }

    public function landDelete(Request $request)
    {

        $lnd = $request->landcode;
        $usetable = new land();
        $landupdate = $usetable->where('landcode', $lnd)->delete();
      
    }

    public function landSearchByCode(Request $request)
    {
        
        $lnd = $request->landloc;
        $usetable = new land();
        $result = $usetable->where('landlocation', $lnd)->get();
        return response()->json($result);

    }

    
}
