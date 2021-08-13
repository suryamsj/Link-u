<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class DirectController extends Controller
{
    public function direct($link)
    {
        $find = Link::where('costume_url', $link)->first();
        if ($find == null) {
            return view('template.error.404');
        }
        Link::where('costume_url', $link)
            ->update(['views' => $find->views + 1]);
        return redirect($find->full_url);
    }
}
