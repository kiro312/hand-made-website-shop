<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ItemCategoryController extends Controller
{
    public function create()
    {
        $items = Item::all();
        $categories = Category::all();
        return view('Admin.items-categories.create', compact('items', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'item' => 'numeric',
            'category' => 'numeric'
        ]);

        try {
            DB::table('item_categories')->insert([
                'item_id' => $request->item,
                'category_id' => $request->category,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]);

            return redirect()->route('items-categories.create');
        } catch (\Throwable $th) {
            $messages = 'This product already contains this category';
            return redirect()->route('items-categories.create')->withErrors($messages);
        }
    }

    public function delete_category(Request $request)
    {
        $item_id = $request->item_id;
        $category_id = $request->category_id;

        DB::table('item_categories')->where('item_id', '=', $item_id)->where('category_id', '=', $category_id)->delete();
        return redirect('items/' . $item_id . '/edit');
    }
}
