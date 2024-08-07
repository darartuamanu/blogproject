<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;

class DetailController extends Controller
{
    public function index()
    {
        $details = Detail::all();
        return view('details.index', ['details' => $details]);
    }

    public function create()
    {
        return view('details.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'blog_id' => 'required|exists:blogs,id',
            'description' => 'required',
        ]);

        Detail::create($request->all());
        return redirect()->route('details.index')->with('success', 'Detail created successfully.');
    }

   // public function show($id)
   // {
       // $detail = Detail::find($id);
        //return view('details.show', compact('detail'));
    //}

    //public function edit($id)
    //{
        //$detail = Detail::find($id);
        //return view('details.update', compact('detail'));
    //}

    public function update(Request $request, $id)
{
    $request->validate([
        'description' => 'required',
    ]);

    // Find the Detail model by ID
    $detail = Detail::find($id);

    // Check if the model exists
    if (!$detail) {
        return redirect()->route('details.index')->with('error', 'Detail not found.');
    }

    // Update the detail
    $detail->update($request->all());

    return redirect()->route('details.index')->with('success', 'Detail updated successfully.');
}


   // public function destroy($id)
//{
   // $detail = Detail::findOrFail($id);
    //if ($detail) {
       // $detail->delete();
       // return redirect()->route('details.index')->with('success', 'Detail deleted successfully.');
    //} else {
        //dd("Detail not found with ID: ".$id);
   // }
    
//}
}