<?php

namespace App\Http\Controllers;

use App\Models\PcItem;
use Illuminate\Http\Request;

class PcItemController extends Controller
{
    public function index()
    {
        $pc_items = PcItem::orderBy('id', 'asc')->paginate(10);

        return inertia('Pcitem', compact('pc_items'));
    }
}
