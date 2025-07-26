<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function addProperty ()
    {
        return view ('web.Backend.layouts.add-property');
    }
    public function singleProperty ()
    {
        return view ('web.frontend.layouts.single-property');
    }
    //All property get
    public function properties (){
        return view ('web.Frontend.layouts.properties');
    }


}
