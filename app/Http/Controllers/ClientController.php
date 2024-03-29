<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{

    public function viewclientreservations()
    {
        $user_id = Auth::id();
        $count = Cart::where('user_id', $user_id)->count();
        $user_name = Auth::user()->name;
        $usertype = Auth::user()->user_type;
        if ($usertype === '0') {
            $user_id = Auth::user()->id;
            $data = DB::table('users')
                ->join('reservations', 'users.id', '=', 'reservations.user_id')
                ->select('users.id', 'reservations.*')
                ->where('users.id', $user_id)
                ->get();
            return view('client.clientreservation', compact('data', 'user_name', 'count'));
        } else {
            return redirect()->back();
        }
    }
    // public function editreservation($id)
    // {
    //     $usertype = Auth::user()->user_type;
    //     if ($usertype === '0') {
    //         $data = reservation::find($id);
    //         return view('client.editreservation', compact('data'));
    //     } else {
    //         return redirect()->back();
    //     }
    // }
    // public function updatereservation(Request $request, $id)
    // {
    //     $data = reservation::find($id);
    //     $data->name = $request->name;
    //     $data->email = $request->email;
    //     $data->phone = $request->phone;
    //     $data->guest = $request->guest;
    //     $data->date = $request->date;
    //     $data->time = $request->time;
    //     $data->message = $request->message;
    //     $data->save();
    //     return redirect('clientreservation');
    // }
    public function deletereservation($id)
    {
        $data = reservation::find($id);
        $data->delete();
        flashy()->primary('Deleted reservation', 'http://your-awesome-link.com');
        return redirect()->back();
    }
}
