<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index(Request $request)
    {
        $properties = Property::query();

        if ($request->filled('kategori')) {
            $properties->where('kategori', $request->kategori);
        }

        if ($request->filled('lokasi')) {
            $properties->where('lokasi', $request->lokasi);
        }

        if ($request->filled('harga_min')) {
            $properties->where('harga', '>=', $request->harga_min);
        }

        if ($request->filled('harga_max')) {
            $properties->where('harga', '<=', $request->harga_max);
        }

        if ($request->filled('status')) {
            $properties->where('status', $request->status);
        }

        return view('properties.index', ['properties' => $properties->get()]);
    }

    public function create()
    {
        return view('properties.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|gambar|max:2048',
            'harga' => 'required|numeric',
            'lokasi' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'status' => 'required|in:available,sold,rented',
        ]);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('property_gambars', 'public');
        }

        Property::create($data);

        return redirect()->route('properties.index');
    }

    public function show(Property $property)
    {
        return view('properties.show', ['property' => $property]);
    }

    public function edit(Property $property)
    {
        return view('properties.edit', ['property' => $property]);
    }

    public function update(Request $request, Property $property)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|gambar|max:2048',
            'harga' => 'required|numeric',
            'lokasi' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'status' => 'required|in:available,sold,rented',
        ]);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('property_gambars', 'public');
        }

        $property->update($data);

        return redirect()->route('properties.index');
    }

    public function destroy(Property $property)
    {
        $property->delete();

        return redirect()->route('properties.index');
    }
}
