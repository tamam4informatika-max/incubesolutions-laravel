<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutSection;
use Illuminate\Http\Request;

class AboutSectionController extends Controller
{
    public function index()
    {
        $about = AboutSection::all();
        return view('admin.about.index', compact('about'));
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        AboutSection::create($request->all());

        return redirect()->route('admin.about.index')
            ->with('success', 'About section berhasil ditambahkan');
    }

    public function edit($id)
    {
        $about = AboutSection::findOrFail($id);
        return view('admin.about.edit', compact('about'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $about = AboutSection::findOrFail($id);
        $about->update($request->all());

        return redirect()->route('admin.about.index')
            ->with('success', 'About section berhasil diupdate');
    }

    public function destroy($id)
    {
        AboutSection::findOrFail($id)->delete();

        return redirect()->route('admin.about.index')
            ->with('success', 'About section berhasil dihapus');
    }
}
