<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Admin;
use App\Models\Category;
use App\Models\ClientMessage;
use App\Models\contactme;
use App\Models\Gallery;
use App\Models\Invoice;
use App\Models\menu;
use App\Models\User;
use App\Models\Payment;
use App\Models\story;
use App\Models\Video;
use App\Models\WebGallery;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{



    public function menuchangeStatus(Request $request)
    {
        $statusid = $request->status;

        if ($request->status == 0) {
            $statusid = 'Inactive';
        } else {
            $statusid = 'Active';
        }

        $wbgal = menu::find($request->menu_id);
        $wbgal->status = $statusid;
        $wbgal->save();

        return response()->json(['type' => $statusid]);
    }

    public function updateMenuList(Request $request)
    {

        $menuData = $request->all();

        try {
            // Begin a database transaction
            \DB::beginTransaction();

            // Loop through the provided array data and update the records in the database
            foreach ($menuData['name'] as $index => $name) {
                $parentId = $menuData['parent_id'][$index];
                $serial = $menuData['serial'][$index];

                $menu = Menu::find($index + 1);

                if ($menu) {
                    // Update the menu record
                    $menu->name = $name;
                    $menu->parent_id = $parentId;
                    $menu->serial = $serial;
                    $menu->save();
                } else {
                    // Handle if the menu record is not found
                    throw new \Exception("Menu with name '$name' not found.");
                }
            }

            // Commit the transaction
            \DB::commit();
            return redirect()->back()->with(['success' => 'Menus updated successfully']);
        } catch (\Exception $e) {
            // Rollback the transaction if an error occurs
            \DB::rollback();
            return redirect()->back()->with(['error' => $e->getMessage()], 500);
        }
    }

    public function menuList()
    {
        // $menulist = menu::where('status', 'Active')->get();
        // dd($menulist->toArray());
        $menus = menu::get();
        return view('admin.pages.menu.menuList', get_defined_vars());
    }

    public function paymentList()
    {
        $invoice = Invoice::get();
        return view('admin.pages.sale.paymentList', get_defined_vars());
    }

    public function paymentView($id)
    {

        $invoice_details = Invoice::with('orders.suborders')
            ->find($id);

        return view('admin.pages.sale.paymentView', get_defined_vars());
    }

    public function paymentAccept($id)
    {

        $acceptPayment = Invoice::find($id);

        if ($acceptPayment) {
            $acceptPayment->payment_status = 'COMPLETED';
            $acceptPayment->save();

            return redirect()->back()->with('success', 'Payment accepted');
        } else {
            return redirect()->back()->with('error', 'Payment not accepted');
        }
    }


    public function index(Request $request)
    {

        if ($request->session()) {
            $story = story::count();
            $contactemail = contactme::count();
            $categorycount = Category::count();
            $galleryimage = WebGallery::count();
            $galleryvideo = Video::count();
            $invoice = Invoice::count();
            $allcontactme = contactme::orderByRaw("CASE WHEN status = 'Unread' THEN 0 ELSE 1 END")
                ->orderBy('status')
                ->get();;


            $invoiceList = Invoice::orderByRaw("CASE WHEN payment_status = 'PENDING' THEN 0 ELSE 1 END")
                ->orderBy('payment_status')
                ->get();

            $international = Achievement::where('type', 'International')->count();
            $national = Achievement::where('type', 'National')->count();
            return view('admin/pages/dashboard', get_defined_vars());
        } else {
            $request->session()->flash('error', 'You Can not access this page before login');
            return view('admin.include.login');
        }
        return view('admin.include.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function deleteEmail($id)
    {

        contactme::find($id)->delete();
        return redirect()->back()->with('success', 'Contact message deleted !!');
    }

    public function contactsmail(Request $request)
    {
        $allcontactme = contactme::all();
        return view('admin.pages.user_message.all-messages', get_defined_vars());
    }

    public function clientMessages()
    {
        $allmessages = ClientMessage::all();
        return view('admin.pages.user_message.client-message', get_defined_vars());
    }

    public function actionMessage(Request $request, $id, $value)
    {
        $clientMessagess = ClientMessage::find($id);

        if ($clientMessagess) {
            $clientMessagess->status = $value;
            $clientMessagess->save();

            return redirect()->back()->with('success', 'Status updated');
        } else {
            return redirect()->back()->with('error', 'Status not updated');
        }
    }

    public function readMessage($id)
    {
        $inquery = contactme::find($id);

        if ($inquery) {
            $inquery->status = 'Read';
            $inquery->save();

            return redirect()->back()->with('success', 'This message readed');
        } else {
            return redirect()->back()->with('error', 'This message no readed');
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function userlist(Admin $admin)
    {
        $users = DB::table('users')->where('type', 'Admin')->get();
        return view('admin.pages.user.userList', get_defined_vars());
    }
    public function myClientList(Admin $admin)
    {
        $users = DB::table('users')->where('type', 'User')->get();
        return view('admin.pages.clients.myClientList', get_defined_vars());
    }




    public function userchangeStatus(Request $request)
    {
        $statusid = $request->status;
        $wbgal = User::find($request->user_id);
        $wbgal->status = $statusid;
        $wbgal->save();

        return response()->json(['type' => $statusid]);
    }

    public function view_member(Admin $admin, $id)
    {
        $userDetails = User::where('id', $id)->first();

        return view('admin.pages.viewMember', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin, $id)
    {
        $userinfo = User::find($id);
        return view('admin.pages.user.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
        ]);

        $userinfo = User::find($id);
        $userinfo->name = $request->name;
        $userinfo->email = $request->email;
        $userinfo->save();
        session()->flash('success', 'User Info updated Successfully.');
        return redirect()->route('user-list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }





    public function changepass()
    {
        return view('admin.pages.user.changepapss', get_defined_vars());
    }

    public function passstore(Request $request)
    {
        $request->validate([
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);


        session()->flash('success', 'Password change successfully.');
        return redirect('change-password');
    }
}
