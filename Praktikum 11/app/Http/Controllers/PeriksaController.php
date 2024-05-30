<?php

namespace App\Http\Controllers;

use App\Models\Periksa;
use Illuminate\Http\Request;

class PeriksaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // Mengambil semua data periksa
                $list_periksa = Periksa::get();
                return view('periksa.index', compact('list_periksa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       // Return the view for creating a new periksa
       return view('periksa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // Validate the incoming request data
       $request->validate([
        'tanggal' => 'required|date',
        'berat' => 'required|numeric',
        'tinggi' => 'required|numeric',
        'tensi' => 'required|string',
        'keterangan' => 'required|string',
    ]);

    // Create a new Periksa instance with the validated data
    Periksa::create([
        'tanggal' => $request->tanggal,
        'berat' => $request->berat,
        'tinggi' => $request->tinggi,
        'tensi' => $request->tensi,
        'keterangan' => $request->keterangan,
    ]);

        // Redirect to the index page with a success message
        return redirect()->route('periksas.index')->with('success', 'Periksa created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Periksa $periksa)
    {
         // Pass the Periksa instance to the view
         return view('periksa.show', compact('periksa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Periksa $periksa)
    {
        // Pass the Periksa instance to the view
        return view('periksa.edit', compact('periksa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Periksa $periksa)
    {
       // Update the Periksa instance
            $periksa->update($request->all());

       // Redirect to the index page with a success message
            return redirect()->route('periksas.index')->with('success', 'Periksa updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Periksa $periksa)
    {
        // Delete the Periksa instance
        $periksa->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('periksas.index')->with('success', 'Periksa deleted successfully');
    }
}
