<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Models\UserSheet;
use App\Models\Race;

class UserSheetController extends Controller
{
    public function sheets()
    {
        $sheets = UserSheet::where('id_user', Auth::id())->with('race')->with('careerPath')->get();
        return view('sheets')->with('sheets', $sheets);
    }

    public function sheet(Request $request)
    {
        $sheet = UserSheet::where('id_user', Auth::id())->where('id_user_sheet', $request->input('sheet'))->with('race')->with('careerPath')->with('category')->with('eyes')->with('hair')->first();
        if (!is_null($sheet)) {
            return view('sheet')->with('sheet', $sheet);
        } else {
            return view('sheet_error');
        }
    }
}
