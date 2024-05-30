<?php

namespace App\Http\Controllers;

use App\Models\unit_kerja;
use Illuminate\Http\Request;

class UnitKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data unit_kerja
        $list_unit_kerja = unit_kerja::all();
        return view('unit_kerja.index', compact('list_unit_kerja'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         // Return the view for creating a new pasien
         return view('unit_kerja.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'nama' => 'required|string',
        ]);

        // Create a new Unit Kerja instance with the validated data
        unit_kerja::create([
            'nama' => $request->nama,
        ]);

        // Redirect to the index page with a success message
        return redirect()->route('unit_kerjas.index')->with('success', 'Unit Kerja created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(unit_kerja $unit_kerja)
    {
        // Pass the Unit Kerja instance to the view
        return view('unit_kerja.show', compact('unit_kerja'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(unit_kerja $unit_kerja)
    {
         // Pass the Unit Kerja instance to the view
         return view('unit_kerja.edit', compact('unit_kerja'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, unit_kerja $unit_kerja)
    {
        // Update the Unit Kerja instance
        $unit_kerja->update($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('unit_kerjas.index')->with('success', 'Unit Kerja updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(unit_kerja $unit_kerja)
    {
        // Delete the Unit Kerja instance
        $unit_kerja->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('unit_kerjas.index')->with('success', 'Unit Kerja deleted successfully');
    }
}
