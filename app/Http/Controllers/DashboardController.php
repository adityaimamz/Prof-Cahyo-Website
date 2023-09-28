<?php

namespace App\Http\Controllers;

use App\Models\dashboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = dashboard::all();
        return view('admin.dashboard.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $data = dashboard::where('id', $id)->first();
        return view('admin.dashboard.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
     public function update(Request $request, $id)
    {

        // Data yang akan diupdate
        $data = [
            'herosubtitle' => $request->herosubtitle,
            'abouttitle' => $request->abouttitle,
            'abouttext' => $request->abouttext,
            'contacttitle' => $request->contacttitle,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ];

        // Melakukan pembaruan data dashboard
        Dashboard::where('id', $id)->update($data);

        // Redirect ke halaman dashboard atau rute yang sesuai
        return redirect()->route('dashboard.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
