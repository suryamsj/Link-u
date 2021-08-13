<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $month = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'];

        $links = [];
        foreach ($month as $key => $value) {
            $links[] = DB::table('links')
                ->where('user_id', Auth::user()->id)
                ->where(DB::raw("DATE_FORMAT(created_at, '%m')"), $value)
                ->sum('views');
        }

        return view('dashboard', [
            "total_views" => Link::where('user_id', Auth::user()->id)->sum('views'),
            "total_link" => Link::where('user_id', Auth::user()->id)->count()
        ])->with('month', json_encode($month, JSON_NUMERIC_CHECK))->with('links', json_encode($links, JSON_NUMERIC_CHECK));
    }
}
