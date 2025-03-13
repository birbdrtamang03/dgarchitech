<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeroBanner;
use App\Models\AboutUs;
use App\Models\ServiceHeader;
use App\Models\ServiceContent;

class HeroBannerController extends Controller {

    // post hero banner content
    public function store(Request $request) {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'main_text' => 'required|string|max:255',
            'sub_text' => 'required|string|max:255',
            'social_media' => 'required|array', // Ensure it is an array
        ]);

        // Store the uploaded image
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('hero_banners', 'public');
        } else {
            return back()->with('error', 'Image upload failed.');
        }

        // Save data to the database
        HeroBanner::create([
            'image_path' => $imagePath,
            'main_text' => $request->main_text,
            'sub_text' => $request->sub_text,
            'social_media' => $request->social_media,
        ]);

        return back()->with('success', 'Hero Banner added successfully!');
    }


    // fetch hero banner content
    public function fetchHeroBannerContent() {
        $content = HeroBanner::latest()->first(); // Get the most recent banner

        // about content
        $aboutContent = AboutUs::latest()->first(); // Get the most recent banner

        // service
        $serviceHeader = ServiceHeader::latest()->first(); // Get the most recent banner
        $serviceContents = ServiceContent::all(); // Get all service contents


        return view('index', compact('content','aboutContent','serviceHeader','serviceContents'));

    }

}


