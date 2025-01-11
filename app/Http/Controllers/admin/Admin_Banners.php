<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Admin_Banners extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images  =  DB::table('Banners')->get();
        return view('admin.componnets.gallery.All',compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.componnets.gallery.create_Banner');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('Banners')->create([
            'image' => '/storage/' . Storage::disk('public')->putFile( 'files', request()->file('image'))
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $images  =  DB::table('Banners')->where('id',$id)->delete();
        return back();

    }

    public function create_logo(){
        return view('admin.componnets.gallery.logo');
    }


    public function create_logo_post(){
        DB::table('settings')->where('id',1)->update([
            'logo' => '/storage/' . Storage::disk('public')->putFile( 'files', request()->file('image'))
        ]);
        return back();
    }
}
