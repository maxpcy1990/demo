<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ItemController extends Controller
{    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
    */
    public function index(): \Illuminate\Http\JsonResponse
    {
        $data = Item::all();
        return response()->json(['status' => true, 'data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        if($request->quantity <= 0){
            return response()->json(['status' => false, 'message' => 'Quantity less than or equal 0']);
        }

        $data = Item::where('item_name', $request->item_name);
        if ($data->first()) {
            return response()->json(['status' => false, 'message' => 'Already exist']);
        }

        $req = $request->all();
        $data = Item::create($req);
        return response()->json(['status' => true, 'data' => $data], 201);
    }
}