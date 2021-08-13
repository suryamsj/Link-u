<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Nette\Utils\Random;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $link = Link::where('user_id', Auth::user()->id)->latest()->get();
        return view('link.home', compact('link'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('link.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'full_url'      => 'required|url',
            'costume_url'   => 'required|min:6|unique:links,costume_url'
        ]);

        $random = random_int(1, 10) + random_int(2, 20) + Auth::user()->id . Auth::user()->id;

        $link = Link::create([
            'id'            => $random,
            'costume_url'   => $request->costume_url,
            'full_url'      => $request->full_url,
            'user_id'       => Auth::user()->id
        ]);

        if ($link) {
            return redirect()->route('links.index')
                ->with('berhasil', 'Berhasil memperpendek link!');
        } else {
            return redirect()->route('links.create')
                ->with('gagal', 'Gagal memperpendek link!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Link $link)
    {
        return view('link.edit', compact('link'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Link $link)
    {
        $request->validate([
            'costume_url' =>  'required|unique:links,costume_url|min:6',
        ]);

        $link = Link::findOrFail($link->id);

        $link->update([
            'costume_url'  => $request->costume_url,
        ]);

        if ($link) {
            return redirect()->route('links.index')
                ->with('berhasil', 'Berhasil memperpendek link!');
        } else {
            return redirect()->route('links.index')
                ->with('gagal', 'Gagal memperpendek link!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $link = Link::findOrFail($id);
        $link->delete();

        if ($link) {
            return redirect()->route('links.index')
                ->with('berhasil', 'Berhasil menghapus link!');
        } else {
            return redirect()->route('links.index')
                ->with('gagal', 'Gagal menghapus link!');
        }
    }
}
