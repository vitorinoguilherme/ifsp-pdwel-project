<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Exception;

class PublicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publications = Publication::all(); //fetch all blog posts from DB

        // return $publications;
	    return view('publication.index', compact('publications')); //returns the fetched posts
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('publication.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->post());

        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $publication = Publication::create([
            'title' => $request->title,
            'content'=> $request->content,
            'user_id'=> Auth::user()->id,
            'category_id'=> 1,
        ]);

        return redirect('publications/' . $publication->id);;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function show($publication_id)
    {
        $publication = Publication::findOrFail($publication_id);

        return view('publication.show', compact('publication'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function edit($publication_id)
    {
        $publication = Publication::findOrFail($publication_id);

        if ($publication->user_id !== Auth::user()->id) {
            throw new Exception('You must be the author of this publication to edit.');
        }

        return view('publication.edit', [
            'publication' => $publication,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $publication_id)
    {
        $publication = Publication::findOrFail($publication_id);

        $publication->update([
            'title' => $request->title,
            'content' => $request->content
        ]);

        return redirect('publications/' . $publication->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function destroy($publication_id)
    {
        $publication = Publication::findOrFail($publication_id);

        $publication->delete();

        return redirect('/publications');
    }
}
