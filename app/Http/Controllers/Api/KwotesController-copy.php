?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Quote;
use Illuminate\Http\Request;

class KwotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = null)
    {
        if ($id != null) {
            $kwote = Quote::find($id);
            return $kwote ? $kwote : ['error' => 'Kwotes not found!'];
        }

        $kwotes = Quote::all();
        return $kwotes;
    }

    public function search($quote)
    {
        $result = Quote::where('quote', 'like', '%'. $quote .'%')->get();

        return $result;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'likes' => 'nullable'
        ]);

        return Quote::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kwote = Quote::find($id);
        $kwote->quote = $request->quote;
        $kwote->author = $request->author;
        $kwote->category = $request->category;
        $kwote->likes = $request->likes;
        
        if ($kwote->save()) {
            return ['message' => 'Kwotes Updated!'];
        }

        return ['message' => 'Kwotes Failed!'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kwote = Quote::findOrFail($id);
        
        if ($kwote->delete()) {
            return ['message' => 'Deleted Successfully!'];
        }
        return ['message' => 'Some Problem!'];
    }
}
