<?php

namespace App\Http\Controllers;

use App\Models\PaketWisata;
use Illuminate\Http\Request;

class PaketWisataController extends Controller
{
    public function index()
    {
        $paket = PaketWisata::all();

        return view('paket.index', compact('paket'));
    }
}