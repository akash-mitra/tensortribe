<?php

namespace App\Http\Controllers;

use App\Query;
use Illuminate\Http\Request;

class QueryController extends Controller
{
    public function save(Request $request)
    {

        $request->validate([
            'email' => 'required|email:rfc',
            'query' => 'required|max:500'
        ]);

        $query = new Query($request->input());
        
        $query->save();

        return redirect()->back()->with('success', true);
    }
}
