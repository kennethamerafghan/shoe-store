<?php

namespace App\Http\Controllers;

use App\Models\Shoe;
use Illuminate\Http\Request;

class ShoeController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $shoes = Shoe::where('name', 'LIKE', "%$search%")
            ->orWhere('brand', 'LIKE', "%$search%")
            ->get();

        return view('shoes.index', compact('shoes', 'search'));
    }

    public function create()
    {
        return view('shoes.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('images'), $imageName);
            $data['image'] = $imageName;
        }

        Shoe::create($data);

        return redirect()->route('shoes.index');
    }

    public function edit(Shoe $shoe)
    {
        return view('shoes.edit', compact('shoe'));
    }

    public function update(Request $request, Shoe $shoe)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('images'), $imageName);
            $data['image'] = $imageName;
        }

        $shoe->update($data);

        return redirect()->route('shoes.index');
    }

    public function destroy(Shoe $shoe)
    {
        $shoe->delete();

        return redirect()->route('shoes.index');
    }
}