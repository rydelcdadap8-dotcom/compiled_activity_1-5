<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    // DISPLAY ALL ITEMS
    public function index()
    {
        $items = Item::all();
        return view('items.index', compact('items'));
    }

    // SHOW CREATE FORM
    public function create()
    {
        return view('items.create');
    }

    // STORE NEW ITEM
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'priority' => 'required',
        ]);

        Item::create($request->all());

        return redirect('/items');
    }

    // SHOW SINGLE ITEM
    public function show($id)
    {
        $item = Item::findOrFail($id);
        return view('items.show', compact('item'));
    }

    // SHOW EDIT FORM
    public function edit($id)
    {
        $item = Item::findOrFail($id);
        return view('items.edit', compact('item'));
    }

    // UPDATE ITEM
    public function update(Request $request, $id)
    {
        $item = Item::findOrFail($id);
        $item->update($request->all());

        return redirect('/items');
    }

    // DELETE ITEM
    public function destroy($id)
    {
        Item::destroy($id);
        return redirect('/items');
    }
}