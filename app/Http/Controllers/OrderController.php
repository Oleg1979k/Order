<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;

class OrderController extends Controller
{
    public function order(OrderRequest $request)
    {
        return response()->json(['success' => true], 200);
    }
}
