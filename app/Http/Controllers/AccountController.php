<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Mail\VerifyMailCode;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class AccountController extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function verifymail()
    {
        return view('accounts.verify');
    }

    public function sendcodemail(Request $request)
    {
        $code = getRandomWord();
        $data = ['code'=>$code,'name'=>Auth::user()->name];
        $request->session()->put(Auth::user()->email,$code);
        /* Mail::send('mails.verifycode', $data, function ($message) {
            $message->to(Auth::user()->email, Auth::user()->name);
            $message->subject('Coinmarket Verify Your Email');
        }); */
        Mail::to($request->user())->send(new VerifyMailCode($data));
        
        return back()->with('success', 'An email containing a code has been sent to your Email address.');
    }

    public function verifycode(Request $request)
    {
        $request->validate(['code'=>'required']);
        $user = Auth::user();
        //dd(session(dd(session($user->email))));
        if ($request->code == session($user->email)) {
            $user->markEmailAsVerified();
            $request->session()->flash('success','Email Verified Successfully');
            return redirect(route('home'));
        }
        $request->session()->flash('danger','Invalid Code Entered');
        return back();
    }

    public function verifyid(Request $request)
    {
        $request->validate(['id_type'=>'required', 'id_front'=>'max:2048|required','id_back'=>'max:2048|required']);
        $user = Auth::user();
        if ($request->hasFile('id_front') && $request->hasFile('id_back')) {
            $id_front = $request->file('id_front')->storePublicly('userids-front');
            $id_back = $request->file('id_back')->storePublicly('userids-back');
            $data = $request->except('_token');
            $data['id_front'] = $id_front;
            $data['id_back'] = $id_back;
            $data['id_submitted'] = now();
            $data['skip_id'] = false;
            $user->account->update($data);
            return redirect(route('home'));

        }        
        return back()->with('danger','Submit a Valid Document or Skip Verification');
    }

    public function skip_id()
    {
        Auth::user()->account->update(['skip_id'=>true]);
        return redirect(route('home'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* $this->validate($request, [
            'phone' => 'required|string|unique:accounts',
        ]); */ 

//dd($request);
        $account = Account::where('acct_no', $request->acct_no)->where('bank_name', $request->bank)->first();
        if (!empty($account)) {
            return back()->with('status', 'Duplicate Accounts not Allowed');
        } else {
            //dd($request);
            //$address = "$request->address1, $request->city, $request->state";
            //dd($address);
            $data = $request->except('_token');
            //$data['bank_name'] = $request->bank;
            //$data['address'] = $address;
            Account::updateOrCreate(['user_id' => Auth::id()], $data);
            $user = User::find(Auth::id());
            //$user->account_status = 'completed';
            if ($user->name !== $request->acct_name) {
                $user->name = $request->acct_name;
            }
            $user->save();
            return redirect(route('home'))->with('success', 'Account Onboarded, Successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(Account $account)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Account $account)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
        //
    }
}
