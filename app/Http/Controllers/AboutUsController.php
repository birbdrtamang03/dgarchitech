<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Models\TeamMembers;

class AboutUsController extends Controller
{
    public function storeAboutUs(Request $request) {
        $request->validate([
            'aboutTitle' => 'required|string|max:255',
            'aboutSubtext' => 'required|string|max:255',
            'aboutImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        // Store the uploaded image
        if ($request->hasFile('aboutImage')) {
            $imagePath = $request->file('aboutImage')->store('aboutUs', 'public');
        } else {
            return back()->with('error', 'Image upload failed.');
        }

        // Save data to the database
        AboutUs::create([
            'image_path' => $imagePath,
            'aboutTitle' => $request->aboutTitle,
            'aboutSubtext' => $request->aboutSubtext
        ]);

        return back()->with('success', 'About Us content added successfully!');
    }

    public function fetchAboutUsContent() {
        $aboutContent = AboutUs::latest()->first(); // Get the most recent banner
        // fetch team members
        $teamMembers = TeamMembers::all();

        return view('about',compact('aboutContent','teamMembers'));
    }

    public function storeTeamMembers(Request $request) {
        $request->validate([
            'profile' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'social_media' => 'required|array', // Ensure it is an array
        ]);

        // Store the uploaded image
        if ($request->hasFile('profile')) {
            $imagePath = $request->file('profile')->store('team_members', 'public');
        } else {
            return back()->with('error', 'Profile upload failed.');
        }

        // Save data to the database
        TeamMembers::create([
            'image_path' => $imagePath,
            'name' => $request->name,
            'designation' => $request->designation,
            'social_media' => $request->social_media,
        ]);

        return back()->with('success', 'A new member added successfully!');
    }
}
