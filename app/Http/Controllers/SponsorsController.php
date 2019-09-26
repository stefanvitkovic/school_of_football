<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Sponsor;

use Image;

class SponsorsController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth', ['except' => ['index']]); 
    }

    public function index()
    {
        $sponsors = Sponsor::all();

        return view('sponzori',['sponsors'=>$sponsors]);
    }

    public function create()
    {
        return view('sponsorshipCreate');
    }

    public function store(Request $request)
    {   
    	
        // validacija 
        $this->validate($request, [
            "*" => 'required',
        ]);
        
        $d = new \DateTime();
    	$date = str_replace(":", "-", $d->format('H:i:s'));

        if(!empty($request->file('image')))
        {
            $image = $request->file('image');
            $filename = $request->input('name') . $date . '.png';
            $location = public_path("sponzori\\".$filename);
            Image::make($image)->resize(845,400)->save($location);

            $sponsor = new Sponsor($request->all());
            $sponsor->image = $filename;
            $sponsor->save();
        }else{
            $sponsor = new Sponsor($request->all());
            $sponsor->image = 'default.png';
            $sponsor->save();
        }

        return back()->with('message','Sponsorship added');
    }

    public function destroy($id)
    {
        Sponsor::destroy($id);
        return back()->with('message','Sponsorship deleted!');
    }
}
