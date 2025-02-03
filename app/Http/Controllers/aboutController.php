<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\aboutModel;

class aboutController extends Controller
{
    public function index()
    {
        return view('about.aboutpage');
    }

    public function insertabout(Request $request)
    {
        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'nickname' => 'required|string|max:255',
        ]);

       $dataAbout = aboutModel::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'nickname' => $request->nickname,
        ]);

        return response()->json([
            'message' => 'Data berhasil disimpan',
            'data' => $dataAbout
        ]);

    }
}
