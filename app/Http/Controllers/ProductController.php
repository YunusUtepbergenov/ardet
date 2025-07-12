<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title.ru' => 'required|string|max:255',
            'title.uz' => 'required|string|max:255',
            'short_desc.ru' => 'nullable|string',
            'short_desc.uz' => 'nullable|string',
            'category' => 'nullable|string|max:50',
            'image' => 'required|image|max:20480',
        ]);

        $file = $request->file('image');
        $filename = 'catalog/' . Str::random(10) . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('img/catalog'), basename($filename));

        Product::create([
            'title' => $request->input('title'),
            'short_desc' => $request->input('description'),
            'image' => 'img/' . $filename,
            'category' => $request->input('category'),
        ]);

        return redirect()->route('products.create')->with('success', 'Продукт добавлен!');
    }
}
