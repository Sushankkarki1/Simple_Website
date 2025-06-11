<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index() {
        $items = Item::all();
        return view('items.index', compact('items'));
    }

    public function store(Request $request) {
        Item::create($request->only(['name', 'description']));
        return redirect('/');
    }

    public function edit($id) {
        $item = Item::findOrFail($id);
        return view('items.edit', compact('item'));
    }

    public function update(Request $request, $id) {
        $item = Item::findOrFail($id);
        $item->update($request->only(['name', 'description']));
        return redirect('/');
    }

    public function destroy($id) {
        Item::destroy($id);
        return redirect('/');
    }
}

