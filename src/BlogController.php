<?php

namespace Arifulislamrana\Blogged;

use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function add(int $a, int $b)
    {
        return view('blogged::add', ['result' => $a * $b]);
    }
}
