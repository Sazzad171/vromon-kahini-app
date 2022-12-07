<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class StoryController extends Controller
{
    // get all story
    public function index() {
        $story = Story::where('status', 'Active')
            ->orderBy('updated_at', 'desc')
            ->take(6)
            ->get();

        return view('home', ['story' => $story]);
    }

    // find story details
    public function find($id) {
        $storyDetails = Story::where('storyId', $id)->first();

        if ($storyDetails) {
            return view('details', ['storyDetails' => $storyDetails]);
        }
        else {
            abort('404');
        }
    }

    // stories page
    public function stories() {
        $stories = Story::where('status', 'Active')->orderBy('updated_at', 'desc')->paginate(9);

        return view('stories', ['stories' => $stories]);
    }

    // search result
    public function search(Request $request) {

        $searchQuery = $request->search;

        $searchResults = Story::query()
        ->where('story_heading', 'LIKE', "%{$searchQuery}%")
        ->orWhere('details', 'LIKE', "%{$searchQuery}%")
        ->orWhere('location', 'LIKE', "%{$searchQuery}%")
        ->get();
        
        return view('searchResults', compact('searchResults', 'request'));
    }

    // create show new
    public function create() {
        return view('publishNew');
    }

    // store new story
    public function store(Request $request) {
        // validation
        $formFields = $request->validate([
            'story_heading' => 'required',
            'location' => 'required',
            'details' => 'required'
        ]);

        // user id data
        $user = Auth::user();
        $formFields['fk_user_id'] = $user->id;

        // image upload
        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('story-image', 'public');
        }

        // store data at DB
        Story::create(array_merge($formFields, [
            'status' => 'Active'
        ]));

        Session::flash('message', 'Successfully Created Story');
        
        return redirect('/');
    }

    // show edit form view
    public function edit($id) {
        $storyDetails = Story::where('storyId', $id)->first();

        return view('editStory', ['storyDetails' => $storyDetails]);
    }

    // update story item
    public function update(Request $request, Story $story) {

        // check it is story owner or not
        if (Auth::check()) {
            if ($story->fk_user_id != auth()->id()) {
                abort(403, 'Unauthorized Action'); 
            }
        }

        // validation
        $formFields = $request->validate([
            'story_heading' => 'required',
            'location' => 'required',
            'details' => 'required'
        ]);

        // image upload
        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('story-image', 'public');
        }

        // store data at DB
        $story->update($formFields);

        Session::flash('message', 'Successfully Updated Story');
        
        return back();
    }

    // delete story item
    public function delete(Story $story) {
        // delete from DB
        $story->delete();

        Session::flash('message', 'Successfully Deleted Story');

        return redirect('/');
    }

    // manage my stories
    public function manage() {
        if(Auth::check()) {
            $user = Auth::user();
            $stories = Story::where('fk_user_id', $user->id)->get();

            return view('manageStory', ['stories' => $stories]);
        }
        
        return view('/');
    }
}
