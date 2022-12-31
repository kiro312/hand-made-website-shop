<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Offer;
use App\Models\Item;

class ItemOfferController extends Controller
{
    public function create()
    {
        $items = Item::all();
        $offers = Offer::all();
        return view('Admin.items-offers.create', compact('items', 'offers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'item' => 'numeric',
            'offer' => 'numeric'
        ]);

        try {
            DB::table('item_offers')->insert([
                'item_id' => $request->item,
                'offer_id' => $request->offer,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]);

            return redirect()->route('items-offers.create');
        } catch (\Throwable $th) {
            $messages = 'This product already contains offer';
            return redirect()->route('items-offers.create')->withErrors($messages);
        }
    }

    public function delete_offer(Request $request)
    {
        $item_id = $request->item_id;
        $offer_id = $request->offer_id;

        DB::table('item_offers')->where('item_id', '=', $item_id)->where('offer_id', '=', $offer_id)->delete();
        return redirect('admin/items/' . $item_id . '/edit');
    }
}
