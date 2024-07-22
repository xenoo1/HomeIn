<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index(Request $request)
    {
        $properties = Property::query();

        $properties->when($request->filled('kategori'), function ($query) use ($request) {
            $query->where('kategori', $request->kategori);
        });

        $properties->when($request->filled('lokasi'), function ($query) use ($request) {
            $query->where('lokasi', $request->lokasi);
        });

        $properties->when($request->filled('harga_min'), function ($query) use ($request) {
            $query->where('harga', '>=', $request->harga_min);
        });

        $properties->when($request->filled('harga_max'), function ($query) use ($request) {
            $query->where('harga', '<=', $request->harga_max);
        });

        $properties->when($request->filled('status'), function ($query) use ($request) {
            $query->where('status', $request->status);
        });

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
        'gambar' => 'nullable|image|max:2048',
        'harga' => 'required|numeric',
        'lokasi' => 'required|string|max:255',
        'kategori' => 'required|string|max:255',
        'status' => 'required|in:tersedia,terjual',
    ]);

    if ($request->hasFile('gambar')) {
        $data['gambar'] = $request->file('gambar')->store('property_gambars', 'public');
    }

    $property = new Property();
    $property->nama = $data['nama'];
    $property->deskripsi = $data['deskripsi'];
    $property->gambar = $data['gambar'];
    $property->harga = $data['harga'];
    $property->lokasi = $data['lokasi'];
    $property->kategori = $data['kategori'];
    $property->status = $data['status'];
    $property->save();

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
            'gambar' => 'nullable|image|max:2048',
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
        return redirect()->route('properties.index')->with('success', 'Property deleted successfully!');
    }
}
