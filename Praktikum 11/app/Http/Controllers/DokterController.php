<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // Mengambil semua data dokter
         $list_dokter = Dokter::all();
         return view('dokter.index', compact('list_dokter'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return the view for creating a new dokter
        return view('dokter.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // Validate the incoming request data
       $request->validate([
        'nama' => 'required|string',
        'tmp_lahir' => 'required|string',
        'tgl_lahir' => 'required|date',
        'gender' => 'required|in:L,P',
        'kategori' => 'required|in:Umum,Spesialis,Bidan',
        'telpon' => 'required|string',
        'alamat' => 'required|string',
    ]);

    // Create a new Dokter instance with the validated data
    Dokter::create([
        'nama' => $request->nama,
        'tmp_lahir' => $request->tmp_lahir,
        'tgl_lahir' => $request->tgl_lahir,
        'gender' => $request->gender,
        'kategori' => $request->kategori,
        'telpon' => $request->telpon,
        'alamat' => $request->alamat,
    ]);

    // Redirect to the index page with a success message
    return redirect()->route('dokters.index')->with('success', 'Dokter created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Dokter $dokter)
    {
        // Pass the Dokter instance to the view
        return view('dokter.show', compact('dokter'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dokter $dokter)
    {
       // Pass the Dokter instance to the view
       return view('dokter.edit', compact('dokter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dokter $dokter)
    {
        // Update the Dokter instance
        $dokter->update($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('dokters.index')->with('success', 'Dokter updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dokter $dokter)
    {
        // Delete the Dokter instance
        $dokter->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('dokters.index')->with('success', 'Dokter deleted successfully');
    }
}
