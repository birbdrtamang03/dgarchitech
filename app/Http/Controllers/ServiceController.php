<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceHeader;
use App\Models\ServiceContent;

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
        $serviceContents = ServiceContent::all(); // Get all service contents
        return view('service', compact('serviceHeader', 'serviceContents'));
    }

    // store service content
    public function storeServiceContent(Request $request) {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $images = [];
        if($request->hasfile('images')) {
            foreach($request->file('images') as $file) {
                $name = time().rand(1,100).'.'.$file->extension();
                $file->move(public_path('images'), $name);
                $images[] = $name;
            }
        }

        ServiceContent::create([
            'title' => $request->title,
            'content' => $request->content,
            'images' => $images
        ]);

        return back()->with('success', 'Service Content Updated Successfully!');
    }

    public function showServiceDetail($id) {
        $serviceContents = ServiceContent::findOrFail($id); // Get the specific service content by ID
        $serviceHeader = ServiceHeader::latest()->first();
        return view('servicedetail', compact('serviceContents', 'serviceHeader'));
    }
}
