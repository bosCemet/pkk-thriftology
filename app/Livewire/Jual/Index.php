<?php

namespace App\Livewire\Jual;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    public $products;
    public $user;

    public function mount(){
        //user information
        $this->user = User::findOrFail(auth()->user()->id);
        //products sold by user
        $this->products = Product::where("user_id", auth()->user()->id)->get();
    }
    public function render()
    {
        return view('livewire.jual.jual', ['user'=> $this->user, 'products'=> $this->products]);
    }
}
