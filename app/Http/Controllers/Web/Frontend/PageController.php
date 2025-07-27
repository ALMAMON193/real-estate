<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class PageController extends Controller
{
    public function index(){
        $property = Property::with([
            'images', 'videos', 'nearbyPlaces', 'location',
            'contact', 'extraInformation', 'features'
        ])->take(8)->latest()->get();
        return view('web.Frontend.layouts.index',compact('property'));
    }
    public function addProperty ()
    {
        return view ('web.Backend.layouts.add-property');
    }
    public function singleProperty ($encryptedId)
    {
        $id = Crypt::decryptString($encryptedId);
        $property = Property::with([
            'images', 'videos', 'nearbyPlaces', 'location',
            'contact', 'extraInformation', 'features'
        ])->findOrFail($id);
        return view ('web.frontend.layouts.single-property',compact('property'));
    }
    //All property get
    public function properties (){
        return view ('web.Frontend.layouts.properties');
    }


}
