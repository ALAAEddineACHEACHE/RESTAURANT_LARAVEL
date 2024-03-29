<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Food;
use App\Models\foodchefs;
use App\Models\Order;
use App\Models\reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Returning food data to the index main page
     *
     * @return void
     */
    public function index()
    {

        $data = Food::all();
        $data2 = foodchefs::all();
        $user_id = Auth::id();
        $count = cart::where('user_id', $user_id)->count();
        return view('index', compact('data', 'data2', 'count'));
    }

    /**
     * Admission for only admins
     *
     * @return void
     */
    public function redirects()
    {
        $data = food::all();
        $data2 = foodchefs::all();
        $usertype = Auth::user()->user_type;
        $userscount = User::count();
        $foodscount = Food::count();
        $chiefscount = foodchefs::count();
        $reservationscount = reservation::count();
        $orderscount = Order::count();
        if ($usertype === '1') {
            flashy()->success('welcome Admin', 'http://your-awesome-link.com');
            return view('admin.adhome', compact('userscount', 'reservationscount', 'orderscount', 'foodscount', 'chiefscount'));
        } else {
            $user_id = Auth::id();
            $count = cart::where('user_id', $user_id)->count();
            return view('index', compact('data', 'data2', 'count'));
        }
    }

    //Carts
    public function addcart(Request $request, $id)
    {
        if (Auth::id()) {
            $user_id = Auth::id();
            $foodid = $id;
            $quantity = $request->quantity;
            $cart = new Cart;
            $cart->user_id = $user_id;
            $cart->food_id = $foodid;
            $cart->quantity = $quantity;
            $cart->save();
            return redirect()->back();
        } else {
            return redirect('login');
        }
    }
    public function showcart(Request $request, $id)
    {
        if (Auth::id() == $id) {
            $count = cart::where('user_id', $id)->count();
            $data = cart::where('user_id', $id)->join('food', 'carts.food_id', '=', 'food.id')->get();
            $data2 = cart::select('*')->where('user_id', '=', $id)->get();
            return view('showcart', compact('count', 'data', 'data2'));
        } else {
            return redirect()->back();
        }
    }
    public function remove($id)
    {
        $data = cart::find($id);
        $data->delete();
        return redirect()->back();
    }
    //Orders
    public function orderconfirm(Request $request)
    {
        foreach ($request->foodname as $key => $foodname) {
            $user_id = Auth::id();
            $dataorder = new Order;
            $dataorder->user_id = $user_id;
            $dataorder->foodname = $foodname;
            $dataorder->price = $request->price[$key];
            $dataorder->quantity = $request->quantity[$key];
            $dataorder->phone = $request->phone;
            $dataorder->name = $request->name;
            $dataorder->adresse = $request->adresse;
            $dataorder->save();
        }
        flashy()->success('Order sent !', 'http://your-awesome-link.com');
        return redirect()->back();
    }
    public function viewdashboard()
    {
        $Ordersdata = Order::all();
        return view('Restaurateur.dashboard', compact('Ordersdata'));
    }
    public function removeorder($id)
    {
        $Ordersdata = Order::find($id);
        $Ordersdata->delete();
        flashy()->success('Order removed', 'http://your-awesome-link.com');
        return redirect()->back();
    }
}
