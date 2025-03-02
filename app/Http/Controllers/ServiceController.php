<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceHeader;

class ServiceController extends Controller
{
     // store service header content
     public function storeServiceHeader(Request $request) {
        $request->validate([
            'header' => 'required|string|max:255',
            'sub_content' => 'required|string|max:255',
        ]);
        // Save data to the database
        ServiceHeader::create([
            'header' => $request->header,
            'sub_content' => $request->sub_content,
        ]);
        return back()->with('success', 'Service Header Updated Successfully!');
    }


    public function fetchServiceHeaderContent() {
        $serviceHeader = ServiceHeader::latest()->first(); // Get the most recent banner
        return view('service',compact('serviceHeader'));
    }
}
