<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Comment;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        $categories= Category::find($product->id);
        if($categories) {
            $products = $categories->products;
        }
        
        return view('user.products.productdetail', compact([
            'product',
            'products',
        ]));
    } 
}
