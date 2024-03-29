<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\foodchefs;
use App\Models\Order;
use App\Models\reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Flashy;

class AdminController extends Controller
{
    // USERS
    /**
     * Get all users data
     *
     * @return void
     */
    public function user()
    {
        if (Auth::id()) {
            $usertype = Auth::user()->user_type;
            if ($usertype === '1') {
                $data = User::paginate(3);
                return view('admin.users', compact('data'), ['User' => $data]);
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }
    /**
     * Get all users data
     *
     * @return void
     */
    public function deleteuser($id)
    {
        $data = User::find($id);
        $data->delete();
        flashy()->success('Deleted User', 'http://your-awesome-link.com');
        return redirect()->back();
    }
    //FOOD
    /**
     * Add food to the menu
     *
     * @return void
     */
    public function addfoodmenu()
    {
        if (Auth::id()) {
            $usertype = Auth::user()->user_type;
            if ($usertype === '1') {
                return view('admin.addfoodmenu');
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }
    /**
     * Get allfood  data
     *
     * @return void
     */
    public function foodmenu()
    {
        if (Auth::id()) {
            $usertype = Auth::user()->user_type;
            if ($usertype === '1') {
                $data = Food::paginate(4);
                return view('admin.foodmenu', compact('data'), ['Food' => $data]);
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }

    /**
     * delete food data
     *
     * @return void
     */
    public function deletemenu($id)
    {
        $data = food::find($id);
        $data->delete();
        flashy()->success('Deleted food', 'http://your-awesome-link.com');
        return redirect()->back();
    }
    /**
     * upload food data
     *
     * @return void
     */

    public function upload(Request $request)
    {
        $data = new Food();
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);
        $data->image = $imagename;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->save();
        flashy()->success('food added to the Menu', 'http://your-awesome-link.com');
        return redirect('foodmenu');
    }
    /**
     * Update viewchief
     *
     * @return void
     */
    public function updateview($id)
    {
        if (Auth::id()) {
            $usertype = Auth::user()->user_type;
            if ($usertype === '1') {
                $data = food::find($id);
                return view("admin.updateview", compact('data'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }
    /**
     * Update food data
     *
     * @return void
     */
    public function update($id, Request $request)
    {
        $data = food::find($id);
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);
        $data->image = $imagename;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->save();
        flashy()->success('Updated food', 'http://your-awesome-link.com');
        return redirect('foodmenu');
    }
    //CHEFS
    public function viewchefs()
    {
        if (Auth::id()) {
            $usertype = Auth::user()->user_type;
            if ($usertype === '1') {
                $data = foodchefs::paginate(2);
                return view('admin.viewchefs', compact('data'), ['foodchefs' => $data]);
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }
    public function addchef()
    {

        if (Auth::id()) {

            $usertype = Auth::user()->user_type;
            if ($usertype === '1') {
                return view('admin.addchef');
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }
    public function uploadchef(Request $request)
    {
        $data = new foodchefs();
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('chefimage', $imagename);
        $data->image = $imagename;
        $data->name = $request->name;
        $data->speciality = $request->speciality;
        $data->save();
        flashy()->success('Chief added', 'http://your-awesome-link.com');
        return redirect('viewchefs');
    }
    public function updatechef($id)
    {
        $usertype = Auth::user()->user_type;
        if ($usertype === '1') {
            $data = foodchefs::find($id);
            return view('admin.updatechef', compact("data"));
        } else {
            return redirect()->back();
        }
    }
    public function updatefoodchef(Request $request, $id)
    {
        $data = foodchefs::find($id);
        $image = $request->image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('chefimage', $imagename);
            $data->image = $imagename;
        }

        $data->name = $request->name;
        $data->speciality = $request->speciality;
        $data->save();
        flashy()->success('Updated Chief', 'http://your-awesome-link.com');
        return redirect('viewchefs');
    }
    public function deletechef($id)
    {
        $data = foodchefs::find($id);
        $data->delete();
        flashy()->success('deleted chief', 'http://your-awesome-link.com');
        return redirect()->back();
    }

    //Reservations
    public function reservation(Request $request)
    {
        $data = new reservation();
        $user_id = Auth::id();
        $data->user_id = $user_id;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->guest = $request->guest;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->message = $request->message;
        $data->save();
        flashy()->info('Reservation Registered', 'http://your-awesome-link.com');
        return redirect()->back();
    }
    public function viewreservation()
    {
        if (Auth::id()) {
            $usertype = Auth::user()->user_type;
            if ($usertype === '1') {

                $data = reservation::paginate(2);
                return view("admin.adminreservation", compact('data'), ['reservation' => $data]);
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }
    //Orders
    public function orders()
    {
        if (Auth::id()) {
            $usertype = Auth::user()->user_type;
            if ($usertype === '1') {
                $ordersdata = Order::paginate(2);
                return view('admin.orders', compact('ordersdata'), ['Order' => $ordersdata]);
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }
    public function deleteorder($id)
    {

        $orderdata = Order::find($id);
        $orderdata->delete();
        flashy()->success('deleted Order', 'http://your-awesome-link.com');
        return redirect()->back();
    }
    //GeneralSettings (Updating the Profile Data)
    public function generalsettings()
    {
        if (Auth::id()) {

            $user = Auth::user();
            $usertype = Auth::user()->user_type;
            if ($usertype === '1') {
                return view('admin.generalsettings', compact('user'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }
    public function updateProfile(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'telephone' => 'required',
            'password' => 'required'
        ]);
        $user = User::where('id', $id)->first();
        if ($user) {
            $user->name = $request->name;
            $user->email = $request->email;
            $user->telephone = $request->telephone;
            $user->password = Hash::make($request->password);
            $user->save();
            flashy()->success('Account Admin Updated', 'http://your-awesome-link.com');
            return redirect()->back();
        } else {
            return abort(404);
        }
    }
}
