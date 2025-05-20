<?php

namespace App\Livewire\Detail;

use App\Models\Product;
use Livewire\Component;

class Index extends Component
{
    public $productId;
    public $product;
    public $availablity;
    public $isOpenModal = false;

    //render
    public function mount($id)
    {
        $this->productId = $id;
        $this->product = Product::findOrFail($this->productId)->load('users');
    }

    public function render()
    {
        return view('livewire.detail.index');
    }

    //Modals
    public function openModal(){
        $this->isOpenModal = true;
    }

    public function closeModal(){
        $this->isOpenModal = false;
    }

    public function shCheckout(){
        $this->openModal();
        $this->product = Product::findOrFail($this->productId);
    }


    //checkout function
    public function checkout(){
        $quantity = $request->input('stock', 1);
        $check = $this -> availablity = Product::findOrFail($this->productId)->stock;

        if($check){
            $check->decrement('stock', $quantity);

            if ($check->stock === 0) {
                    $check->is_sold_out = true;
                    $check->save();
                }

            return response()->json(['message' => 'Checkout berhasil!'], 200);
            $this->closeModal();
        }
    }
}
