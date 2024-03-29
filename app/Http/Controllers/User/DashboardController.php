<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Trade;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __invoke()
    {
        //return main account balance
        $user = User::findOrFail(auth()->user()->id);
        $userMainBalance = $user->accountBalance();
        //return referral account balance
        $userRefBalance = $user->accountBalance('referral');
        //return referral account balance
        $userInvestedBalance = $user->accountBalance('invested');

        //return withdrawals
        $withdrawals = $user->transactions()->where('type', 'withdrawal')->limit(6)->get();
        $total_withdrawals = $user->transactions()->where('type', 'withdrawal')->sum('amount');
        $num_withdrawals = $user->transactions()->where('type', 'withdrawal')->count();
        //return deposits
        $deposits = $user->transactions()->where('type', 'deposit')->limit(6)->get();
        $total_deposits = $user->transactions()->where('type', 'deposit')->sum('amount');
        $num_deposits = $user->transactions()->where('type', 'deposit')->count();
        //return buy trades
        $buyTrades = $user->trades()->where('type', 'buy')->limit(6)->get();
        $num_buyTrades = $user->trades()->where('type', 'buy')->count();
        //return sell trades
        $sellTrades = $user->trades()->where('type', 'sell')->limit(6)->get();
        $num_sellTrades = $user->trades()->where('type', 'buy')->count();

        $trade_profits = $user->trades()->sum('returns');

        // dd($total_withdrawals);
        return inertia('user.index', [
            'userMainBalance' => $userMainBalance,
            'userRefBalance' => $userRefBalance,
            'userInvestedBalance' => $userInvestedBalance,
            'withdrawals' => $withdrawals,
            'total_withdrawals' => $total_withdrawals,
            'withdrawals_count' => $num_withdrawals,
            'deposits' => $deposits,
            'total_deposits' => $total_deposits,
            'deposits_count' => $num_deposits,
            'buyTrades' => $buyTrades,
            'num_buyTrades' => $num_buyTrades,
            'sellTrades' => $sellTrades,
            'num_sellTrades' => $num_sellTrades,
            'trade_profits' => $trade_profits,
            'active_trades' => $user->trades()->where('status', 'active')->count()
        ]);
    }
}
