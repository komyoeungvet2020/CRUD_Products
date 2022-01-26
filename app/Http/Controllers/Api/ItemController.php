<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::orderby('id', 'desc')->get();
        return response()->json($items);
    }

    public function store(Request $request)
    {
        $item = Item::create($request->all());
        return response()->json([
            'status' => 'success',
            'item'   => $item
        ]);
    }

    public function show($id)
    {
        $item = Item::find($id);

        return response()->json($item);
    }

    public function update(Request $request, $id)
    {
        $item = Item::find($id);
        $item->update($request->all());

        return response()->json([
            'status' => 'success',
            'post'   => $item
        ]);
    }

    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();

        return response()->json('Item successfully deleted!');
    }
}
