<?php

namespace App\Http\Controllers;

use App\Models\Vassal;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function iza()
    {
        $id = request()->get('id');
        $name = Vassal::find($id)->name;

        return response()->json(['name' => $name]);
    }
}
