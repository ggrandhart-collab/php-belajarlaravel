<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Pest\Plugins\Tia\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $products = Product::with('category')->orderBy('id', 'DESC')->get();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Produk || PPPKD Sticker";
        $categories = Category::all();
        return view ('admin.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
         'category_id' => 'required|exists:categories,id',
         'image' => 'nullable|image|mimes:png,jpg,jpeg,gif|max:2048',
         'name' => 'required|string|max:60',
        //  'stock' => 'required|integer',
         'slug' => 'nullable|string|unique:product.slug',
         'price' => 'required | integer',
         'price_art_cartoon' =>'nullable|integer',
         'price_art_paper' =>'nullable|integer',
         'price_art_hvs' =>'nullable|integer',
         'price_art_doft' =>'nullable|integer',
         'price_art_glossy' =>'nullable|integer',
         'cutting_price' =>'nullable|integer',
         'brief_description' =>'nullable|integer',
         'description' =>'nullable|string',
        ]);

        $validated['slug'] = $validated['slug'] ? Str::slug($validated['slug']) : Str::slug($validated['name']);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products','public');
        }

        Product::create([
            'category_id'=>$request->category_id,
            'image' =>  $request->$imagePath,
            'name' =>   $request->name,
            // 'stock' =>  $request->stock,
            'price' =>  $request->price,
            'price_art_cartoon' =>  $request->price_art_cartoon
        ]);
        return redirect()->route('admin.product.index')
            ->with('success', 'Produk berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if($request->hasFile('ing')) {
            if($product->img){
                Storage::disk('public')->delet($product->img);
            }
            $validate['img'] =$request->file('img')->store('product','public');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        if ($product->img){
            Storage::disk('public')->delete($product->img);
        }
        $product->delete();
    }
}
