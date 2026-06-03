<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Wishlist;

class CustomerDashboardController extends Controller
{
    public function index()
    {
        return view('customer.dashboard');
    }

    public function products()
    {
        return view('customer.products');
    }

    public function checkout($id)
{
    $cart = Cart::findOrFail($id);

    Order::create([

        'user_id'=>$cart->user_id,

        'product_name'=>$cart->product_name,

        'qty'=>$cart->qty,

        'price'=>$cart->price,

        'image'=>$cart->image,

        'status'=>'Diproses'

    ]);

    $cart->delete();

    return redirect('/orders')
        ->with(
            'success',
            'Pesanan berhasil dibuat'
        );
}

    public function cart()
    {
        $cart = Cart::where(
            'user_id',
            Auth::id()
        )->get();

        return view(
            'customer.cart',
            compact('cart')
        );
    }

    public function addCart(Request $request)
{
    Cart::create([

        'user_id' => Auth::id(),

        'product_name' => $request->product_name,

        'qty' => 1,

        'price' => $request->price,

        'image' => $request->image

    ]);

    return redirect('/cart')
        ->with('success','Produk berhasil ditambahkan');
}

    public function increaseQty($id)
    {
        $cart = Cart::findOrFail($id);

        $cart->qty += 1;

        $cart->save();

        return back();
    }

    public function decreaseQty($id)
    {
        $cart = Cart::findOrFail($id);

        if($cart->qty > 1)
        {
            $cart->qty -= 1;
            $cart->save();
        }

        return back();
    }

    public function removeCart($id)
    {
        Cart::findOrFail($id)->delete();

        return back()->with(
            'success',
            'Produk dihapus'
        );
    }

    public function wishlist()
{
    $wishlist = Wishlist::where(
        'user_id',
        Auth::id()
    )->get();

    return view(
        'customer.wishlist',
        compact('wishlist')
    );
}

public function removeWishlist($id)
{
    Wishlist::findOrFail($id)->delete();

    return back();
}

public function clearWishlist()
{
    Wishlist::where(
        'user_id',
        Auth::id()
    )->delete();

    return back()->with(
        'success',
        'Wishlist dikosongkan'
    );
}

    public function orders()
{
    $orders = Order::where(
        'user_id',
        Auth::id()
    )->get();

    return view(
        'customer.orders',
        compact('orders')
    );
}
    public function clearCart()
{
    Cart::where(
        'user_id',
        Auth::id()
    )->delete();

    return back()->with(
        'success',
        'Semua produk berhasil dihapus'
    );
}
    public function addWishlist(Request $request)
{
    Wishlist::create([

        'user_id' => Auth::id(),

        'product_name' => $request->product_name,

        'price' => $request->price,

        'image' => $request->image

    ]);

    return redirect('/wishlist')
        ->with('success','Produk masuk wishlist ❤️');
}
    public function profile()
    {
        return view('customer.profile');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([

            'name' => 'required',

            'email' => 'required|email',

            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'

        ]);

        /** @var User $user */
        $user = Auth::user();

        if($request->hasFile('photo'))
        {
            $path = $request->file('photo')
                            ->store('profiles','public');

            $user->photo = $path;
        }

        $user->name = $request->name;

        $user->email = $request->email;

        $user->save();

        return back()->with(
            'success',
            'Profil berhasil diperbarui'
        );

        
    }
}