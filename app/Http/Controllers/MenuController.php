<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\RestoCategoryValidate;
use App\Models\MenuCategory;
use App\Models\Menu;

class MenuController extends Controller
{
    public function saveMenuItem(Request $request) {
        $postData = $this->validate($request, [
            'restoId' => 'required|numeric',
            'price' => 'required|numeric',
            'item' => 'required',
            'category' => ['required', new RestoCategoryValidate(request('restoId'))]
        ]);

        $category = MenuCategory::where('resto_id', $postData['restoId'])->where('name', $postData['category'])->first();

        Menu::create([
            'name' => $postData['item'],
            'price' => $postData['price'],
            'description' => $request->input('description'),
            'resto_id' => $postData['restoId'],
            'category_id' => $category->id
        ]);

        return response()->json($menu, 201);
    }
}
