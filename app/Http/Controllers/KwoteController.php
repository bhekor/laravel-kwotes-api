<?php

namespace App\Http\Controllers;

use App\Http\Resources\Kwote as ResourcesKwote;
use App\Models\Kwote;
use Illuminate\Http\Request;

class KwoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kwotes = Kwote::paginate(5);

        return ResourcesKwote::collection($kwotes);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kwote  $kwote
     * @return \Illuminate\Http\Response
     */
    public function show(Kwote $kwote)
    {
        return new ResourcesKwote($kwote);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'quote' => 'required',
            'author' => 'required',
            'category' => 'required',
            'likes' => 'required',
        ]);

        $nKwote = new Kwote;
        $nKwote->quote = $request->quote;
        $nKwote->author = $request->author;
        $nKwote->category = $request->category;
        $nKwote->likes = $request->likes;
        
        if ($nKwote->save()) {
            return [
                $nKwote,
                'message' => 'Kwote saved successfully!'
            ];
        }
        else{
            return [
                'error' => 'Something went wrong!'
            ];
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kwote  $kwote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kwote $kwote)
    {

        $kwote->quote = $request->quote;
        $kwote->author = $request->author;
        $kwote->category = $request->category;
        $kwote->likes = $request->likes;

        if ($kwote->save()) {
            return [
                $kwote,
                'message' => 'Kwote Updated Successfully!',
            ];
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kwote  $kwote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kwote $kwote)
    {
        if ($kwote->delete()) {
            return [
                $kwote,
                'message' => 'Kwote Deleted Successfully!',
            ];
        }
    }
}
