<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    public function index(Request $request)
    {
        $properties = Property::query();

        $properties->when($request->filled('nama_property'), function ($query) use ($request) {
            $query->where('nama_property', $request->nama_property);
        });

        $properties->when($request->filled('deskripsi'), function ($query) use ($request) {
            $query->where('deskripsi', $request->deskripsi);
        });

        $properties->when($request->filled('tanggal'), function ($query) use ($request) {
            $query->where('tanggal', $request->tanggal);
        });
        $properties->when($request->filled('harga'), function ($query) use ($request) {
            $query->where('harga', $request->harga);
        });
        $properties->when($request->filled('lokasi'), function ($query) use ($request) {
            $query->where('lokasi', $request->lokasi);
        });
        $properties->when($request->filled('tipe_rumah'), function ($query) use ($request) {
            $query->where('tipe_rumah', $request->tipe_rumah);
        });

        return view('properties.index', ['properties' => $properties->get()]);
    }

    public function property(){
        return view('property');
    }

    public function create()
    {
        return view('properties.create');
    }

   public function store(Request $request)
    {
        $data = $request->validate([
            'nama_property' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric',
            'image_path' => 'nullable|image|max:2048',
            'tanggal' => 'required|date',
            'tipe_rumah' => 'required|in:31,42,53,81,72,36',
            'kamar_tidur' => 'required|integer|min:1',
            'kamar_mandi' => 'required|integer|min:1',
            'luas' => 'required|numeric',
        ]);

        if ($request->hasFile('image_path')) {
            $data['image_path'] = $request->file('image_path')->store('property_images', 'public');
        }

        Property::create($data);

        return redirect()->route('properties.index')->with('success', 'Property berhasil ditambahkan');
    }
    public function show(Property $property)
    {
        return view('properties.show', ['property' => $property]);
    }

    public function edit(Property $property)
    {
        // Tampilkan form edit data properti
        return view('properties.edit', compact('property'));
    }

    public function update(Request $request, Property $property)
    {
        $data = $request->validate([
            'nama_property' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric',
            'image_path' => 'nullable|image|max:2048',
            'tanggal' => 'required|date',
            'tipe_rumah' => 'required|in:31,42,53,81,72,36',
            'kamar_tidur' => 'required|integer|min:1',
            'kamar_mandi' => 'required|integer|min:1',
            'luas' => 'required|numeric',
        ]);

        if ($request->hasFile('image_path')) {
            if ($property->image_path) {
                Storage::disk('public')->delete($property->image_path);
            }
            $data['image_path'] = $request->file('image_path')->store('property_images', 'public');
        }

        $property->update($data);

        return redirect()->route('properties.index')->with('success', 'Property berhasil diupdate');
    }
    public function destroy($id)
    {
        $property = Property::find($id);
        $property->delete();
        return redirect()->route('properties.index')->with('success', 'Property berhasil dihapus');
    }
}
