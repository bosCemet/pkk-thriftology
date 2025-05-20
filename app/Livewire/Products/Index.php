<?php

namespace App\Livewire\Products;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    
    public $products;
    public $productId;
    public $product;

     public function mount()
    {
        $this->products = Product::all(); // Contoh mengambil semua produk
    }


    public function render()
    {
        return view('livewire.products.index', ['products' => Product::latest()->paginate(5)]);
    }

}
