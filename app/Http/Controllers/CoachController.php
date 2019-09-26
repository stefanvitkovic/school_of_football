<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Ability;

use App\Player;

use App\Category;

use App\Article;

use App\Sponsor;

use App\Position;

use DB;

use Auth;

use Image;

class CoachController extends Controller
{
    public function __construct(){
        return $this->middleware('auth',['except' => ['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coaches = User::all();
        return view('coaches',['coaches'=>$coaches]);
    }

    public function admin()
    {
        $players = Player::with('ability')->get();
        $categories = Category::all();
        return view('admin',['players'=>$players,'categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminc()
    {
        $coaches = User::all();
        $categories = Category::all();
        $sponsors = Sponsor::all();
        $positions = DB::table('positions')->select('*')->get();
        return view('adminc',['coaches'=>$coaches,'categories'=>$categories,'sponsors'=>$sponsors,'positions'=>$positions]);
    }

    public function admina()
    {
        $articles = Article::all();
        return view('articleAdmin',['articles'=>$articles]);
    }

    public function create()
    {
        return view('createc');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            "*" => 'required',
            'email' => 'unique:users,email',
        ]);

        if(!empty($request->file('image')))
        {
            $image = $request->file('image');
            $filename = $request->input('name') . $request->input('date') . '.png';
             // . $image->getClientOriginalExtension()
            $location = public_path("imagesc\\".$filename);
            Image::make($image)->resize(200,200)->save($location);

            $coach = new User($request->all());
            $coach->password = \Hash::make($request->input('password'));
            $coach->image = $request->input('name') . $request->input('date');
            $coach->height = $request->input('height');
            $coach->weight = $request->input('weight');
            $coach->date = $request->input('date');
            $coach->bio = 'bio';
            $coach->save();
        }else{
            $coach = new User($request->all());

            $coach->password = \Hash::make($request->input('password'));
            $coach->image = 'default';
            $coach->height = $request->input('height');
            $coach->weight = $request->input('weight');
            $coach->date = $request->input('date');
            $coach->bio = 'bio';
            $coach->save();
        }   
        return back()->with('message','Coach added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $coach)
    {
        return view('coach',['coach'=>$coach]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $coach)
    {
        return view('editc',['coach'=>$coach]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            "*" => 'required',
        ]);

        $coach = User::findOrFail($id);
        $coach->bio = $request->input('bio');
        $coach->save();

        return back()->with('message','Updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return back()->with('message','Coach deleted !');
    }
}
