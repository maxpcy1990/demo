<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\ItemRestock;
use App\Models\ItemSale;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        $user = Auth()->user();
    }

    public function async()
    {
        return view('internals/async');
    }

    public function ajax()
    {
        return view('internals/ajax');
    }

    public function query()
    {
        $items = DB::table('items')
            ->leftJoin('item_restocks', 'items.id', '=', 'item_restocks.item_id')
            ->leftJoin('item_sales', 'items.id', '=', 'item_sales.item_id')
            ->select('items.id', 'items.item_name', 'item_sales.sale_usd',
                'item_restocks.restock'
            )
            ->get();

        $tableData = ['tableData' => $items];
        
        return view('internals/query')->with($tableData);
    }
}