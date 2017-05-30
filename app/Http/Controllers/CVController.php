<?php

namespace App\Http\Controllers;

use App\Cvs;
use App\Themes;
use App\Skills;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CVController extends Controller
{
    public function index()
    {
        $myCvs = Auth::User()->myCvs()->get();
        //dd($myCvs);
        return view('cvs.index',compact('myCvs'));
    }

    public function viewCv($id)
    {
        $cv = Cvs::where('cv_id', $id)->get()[0];
        //dd($cv->theme_id);
        $theme = Themes::where('theme_id', $cv->theme_id)->get()[0];
        $userDet = Auth::user()->getUserDet();

                $cvStory = DB::table('custom')->where('cv_id',$id)
            ->where('name','story');
        //dd($user);

        //* AHMED CHANGES *
        //$skills = Skills::where('cv_id', $cv->cv_id)->get();
        $coding_skills = DB::table('skills')->where([
            ['type', '=', 'CODING'],
            ['cv_id', $cv->cv_id],
        ])->get();
        $design_skills = DB::table('skills')->where([
            ['type', '=', 'DESIGN'],
            ['cv_id', $cv->cv_id],
        ])->get();
        $lang_skills = DB::table('skills')->where([
            ['type', '=', 'LANGUAGES'],
            ['cv_id', $cv->cv_id],
        ])->get();
        return view('themes.'.$theme->theme_name.'.index',compact('cv','userDet','coding_skills','design_skills','lang_skills'));
    }

    public function newCv()
    {
        $themes = Themes::pluck('theme_name', 'theme_id');;
        return view('cvs.create',compact('themes'));
    }


    public function createCv(Request $request)
    {

        //dd(Auth::User()->userId());
        $request->merge(['user_id' => Auth::User()->userId()]);
        Cvs::create($request->all());
        return redirect(url('/mycvs'));
    }

}
