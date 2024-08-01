<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function showDetails()
    {
    $details = [
        'title' => 'Product Details',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        
        
    ];

    return view('details', ['details' => $details]);
}
}