<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function store(Request $request)
    {
        $postData = $this->validate($request, [
            'name' => 'required|min:3',
            'location' => 'required|min:3',
            'tables' => 'required|integer'
        ]);

        $resto = request()->user()
                    ->restaurants()
                    ->create($postData);

        return response()->json($resto, 201);
    }
}
