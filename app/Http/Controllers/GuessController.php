<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class GuessController extends Controller
{
    function index()
    {
        return view('guess.index');
    }

    function calguess(Request $request)
    {
        $currdate = Carbon::parse($request->dtwo)->format('d-m-Y');
        $dateone = Carbon::parse($request->done)->day;
        $datetwo = Carbon::parse($request->dtwo)->day;
        function isOdd($d)
        {
            if($res = $d%2==0)
            {
                return "is Even";
            }
            else
            {
                return "is Odd";
            }

        }
        $resone = isOdd($dateone);
        $restwo = isOdd($datetwo);
        if($resone == $restwo)
        {
            $epcon = "Morning";
        }
        else
        {
            $epcon = "Afternoon";
        }
        
        return view("guess.index", compact('epcon', 'currdate'));
    }
}
