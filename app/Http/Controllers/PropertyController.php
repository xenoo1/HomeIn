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

    public function property()
    {
        $properties = Property::all(); // retrieve all properties from database
        return view('property', compact('properties'));
    }

    public function detailproperty(){
        return view('detailproperty');
    }

    public function create()
    {
        return view('properties.create');
    }

    public function store(Request $request)
    {
        $property = new Property();
        $property->nama_property = $request->input('nama_property');
        $property->alamat = $request->input('alamat');
        $property->deskripsi = $request->input('deskripsi');
        $property->harga = str_replace('.', '', $request->input('harga'));
        $property->tipe_rumah = $request->input('tipe_rumah');
        $property->kamar_tidur = $request->input('kamar_tidur');
        $property->kamar_mandi = $request->input('kamar_mandi');
        $property->luas = $request->input('luas');

        if ($request->hasFile('gambar')) {
            $property->gambar = $request->file('gambar')->store('public/gambar');
        }

        $property->save();
    
        return redirect()->route('properties.index')->with('success', 'Data property berhasil disimpan');
    }

    public function edit(Property $property)
    {
        // Tampilkan form edit data properti
        return view('properties.edit', compact('property'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'nama_property' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric',
            'gambar' => 'nullable|image|max:2048',
            // 'tanggal' => 'required|date',
            'tipe_rumah' => 'required|in:31,42,53,81,72,36',
            'kamar_tidur' => 'required|integer|min:1',
            'kamar_mandi' => 'required|integer|min:1',
            'luas' => 'required|numeric',
            // 'galeri.*' => 'nullable|image|max:2048',
        ]);
    
        $property = Property::findOrFail($id);
        $property->nama_property = $data['nama_property'];
        $property->alamat = $data['alamat'];
        $property->deskripsi = $data['deskripsi'];
        $property->harga = $data['harga'];
       
        $property->tipe_rumah = $data['tipe_rumah'];
        $property->kamar_tidur = $data['kamar_tidur'];
        $property->kamar_mandi = $data['kamar_mandi'];
        $property->luas = $data['luas'];
        // $property->update($data);
    
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($property->gambar) {
                Storage::disk('public')->delete($property->gambar);
            }
            $property->gambar = $request->file('gambar')->store('gambar', 'public');
        }
    
        // if ($request->hasFile('galeri')) {
        //     // Hapus gambar galeri lama jika ada
        //     foreach ($property->galeri as $gambar) {
        //         Storage::disk('public')->delete($gambar->path);
        //         $gambar->delete();
        //     }
        //     // Simpan gambar galeri baru
        //     foreach ($request->file('galeri') as $file) {
        //         $path = $file->store('galeri', 'public');
        //         $property->galeri()->create(['path' => $path]);
        //     }
        // }
    
        $property->save();
    
        return redirect()->route('properties.index')->with('success', 'Property berhasil diperbarui');
    }
    
    public function show($id)
    {
    $property = Property::findOrFail($id);
    return view('properties.show', compact('property'));
    }

    public function destroy($id)
    {
        $property = Property::find($id);
        $property->delete();
        return redirect()->route('properties.index')->with('success', 'Property berhasil dihapus');
    }
}
