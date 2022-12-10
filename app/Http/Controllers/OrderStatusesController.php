<?php

namespace App\Http\Controllers;

use App\Models\OrderStatuses;
use Illuminate\Http\Request;

class OrderStatusesController extends Controller
{
    public function index()
    {
        $order_statuses = OrderStatuses::all();
        return view('order-statuses.index', compact('order_statuses'));
    }

    public function create()
    {
        return view('order-statuses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'order_statuses_title' => 'required',
            'order_statuses_description' => 'required'
        ]);

        OrderStatuses::create($request->all());

        return view('order-statuses.create');
    }

    public function show($id)
    {
        $order_statuses = OrderStatuses::find($id);
        return view('order-statuses.show', compact('order_statuses'));
    }

    public function edit($id)
    {
        $order_statuses = OrderStatuses::find($id);
        return view('order-statuses.edit', compact('order_statuses'));
    }

    public function update(Request $request, $id)
    {
        $order_statuses = OrderStatuses::find($id);
        $request->validate([
            'order_statuses_title' => 'required',
            'order_statuses_description' => 'required'
        ]);

        $order_statuses->update($request->all());
        return redirect()->route('order-statuses.index');
    }

    public function destroy($id)
    {
        $order_statuses = OrderStatuses::find($id);
        $order_statuses->delete();
        return redirect()->route('order-statuses.index');
    }
}
