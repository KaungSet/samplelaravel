<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\CustomCarbon;

class CarbontestController extends Controller
{
    function index()
    {
        return view('carbontest.index');
    }


    function caldate(Request $request)
    {
        $now = Carbon::now();
        $dforcal = $request->dforcal;
        switch ($request->selmeth) {
            case 1:
                $result = Carbon::now()->format('d-m-Y');
                $methodname = "now()";
                break;

            case 2:
                $result = Carbon::parse($dforcal);
                $methodname = "parse()";
                break;
            
            case 3:
                $result = Carbon::parse($dforcal)->format('l, F j, Y g:i A');
                $methodname = "format()";
                break;
            
            case 4:
                $result = Carbon::parse($dforcal)->addDays(5)->format('d-m-Y');
                $methodname = "addDays()";
                break;

            case 5:
                $result = Carbon::parse($dforcal)->subDays(5)->format('d-m-Y');
                $methodname = "subDays()";
                break;

            case 6:
                $result = Carbon::parse($dforcal)->addHours(1)->format('g:i A');
                $methodname = "addHours()";
                break;

            case 7:
                $result = Carbon::parse($dforcal)->subHours(1)->format('g:i A');
                $methodname = "subHours()";

            case 8:
                $result = $now->diffInDays($dforcal);
                $methodname = "diffInDays()"; 
                break;

            case 9:
                $booSat = Carbon::parse($dforcal)->isSaturday();
                if($booSat)
                {
                    $result = "This date is Saturday";
                }else
                {
                    $result = "No this date is not Saturday";
                }

                $methodname = "isSaturaday()";
                break;

            case 10:
                $booSun = Carbon::parse($dforcal)->isSunday();
                if($booSun)
                {
                    $result = "This date is Sunday";
                }else
                {
                    $result = "No this date is not Sunday";
                }
                $methodname = "isSunday()";
                break;

                case 10:
                    $booSun = Carbon::parse($dforcal)->isSunday();
                    if($booSun)
                    {
                        $result = "This date is Sunday";
                    }else
                    {
                        $result = "No this date is not Sunday";
                    }
                    $methodname = "isSunday()";
                    break;
            
                case 11:
                    $booWeek = Carbon::parse($dforcal)->isWeekend();
                    if($booWeek)
                    {
                        $result = "This date is Weekend";
                    }else
                    {
                        $result = "No this date is not Weekend";
                    }
                    $methodname = "isWeekend()";
                    break;

                case 12:
                    $result = Carbon::parse($dforcal)->startofDay();
                    $methodname = "startOfDay()";
                    break;

                case 13:
                    $result = Carbon::parse($dforcal)->endOfDay();
                    $methodname = "endOfDay()";
                    break;

                case 14:
                    $result = Carbon::parse($dforcal)->startOfMonth();
                    $methodname = "startOfMonth()";
                    break;

                case 15:
                    $result = Carbon::parse($dforcal)->endOfMonth();
                    $methodname = "endOfMonth()";
                    break;

                case 16:
                    $result = CustomCarbon::parse($dforcal)->middleOfDay();
                    $methodname = "middleOfDay()";
                    break;

                case 17:
                    
                    break;

                default:
                    $result = "please choose date and method for calculation";
                    $methodname ="you need to choose method for calculation";
                break;
        }
        
        return view('carbontest.index',compact('result', 'methodname', 'dforcal'));
    }
}
