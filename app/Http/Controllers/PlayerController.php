<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Ability;

use App\Player;

use App\Position;

use App\PlayerPosition;

use App\Category;

use DB;

use Auth;

use Image;

use Carbon\Carbon;

use Illuminate\Support\Facades\Input;

class PlayerController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth', ['except' => ['index','welcome','show']]); 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        return view('welcome');
    }

    public function index()
    {
        $all_players = Player::all();
        return view('index',['all_players'=>$all_players]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // validacija 
        $this->validate($request, [
            "*" => 'required',
        ]);
        
        if(!empty($request->file('image')))
        {
            $image = $request->file('image');
            $filename = $request->input('name') . $request->input('date') . '.png';
             // . $image->getClientOriginalExtension()
            $location = public_path("images\\".$filename);
            try{
            Image::make($image)->resize(200,200)->save($location);
        }catch(Exception $e){
            dd($e);
        }
            $player_image = $request->input('name') . $request->input('date');
        }else{
            $player_image = 'default';
        }

        $player = new Player($request->all());
        $player->image = $player_image;
        $player->save();

        $now = Carbon::now();
        $player_id = $player->id;

        DB::insert("insert into abilities (user_id) values(?)",[$player_id]);



        return back()->with('message','Player added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player)
    {
        $positions = $player->positions()->join('positions','player_positions.position_id','=','positions.id')->get();
        $abilities = $player->ability()->join('categories','abilities.category','=','categories.id')->first();
        return view('player',['full_info'=>$player,'positions'=>$positions,'abilities'=>$abilities]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player)
    {
        $positions = $player->positions()->join('positions','player_positions.position_id','=','positions.id')->get();
        $abilities = $player->ability()->join('categories','abilities.category','=','categories.id')->first();
        $category = Category::all();
        $all_positions = Position::all();
        return view('edit',['player_category'=>$abilities,'id'=>$player->id,'player'=>$player,'positions'=>$positions,'categories'=>$category,'all_positions'=>$all_positions]);
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
            'shirt_number' => 'unique:abilities,shirt_number,NULL,NULL,category,'.$request->age_group,
            'category' => 'unique:abilities,category,NULL,NULL,shirt_number,'.$request->shirt_number,
        ]);

        $player = Player::findOrFail($id);
        $player->height = $request->height;
        $player->weight = $request->weight;
        $player->save();
        $stats = Ability::findOrFail($request->id);
        $stats->speed = $request->speed;
        $stats->power = $request->power;
        $stats->creativity = $request->creativity;
        $stats->dribbling = $request->dribbling;
        $stats->passing = $request->passing;
        $stats->finishing = $request->finishing;
        $stats->defending = $request->defending;
        $stats->heading = $request->heading;
        $stats->comment = $request->comment;
        $stats->category = $request->age_group;
        $stats->shirt_number = $request->shirt_number;
        $stats->save();

        $data = Input::get('cb');
        if(!empty($data)){
            foreach($data as $box=>$val){
                DB::insert('INSERT IGNORE INTO player_positions (player_id,position_id) VALUES (?,?)', array($id,$val));
            }
        }
        
        return back()->with('message','Done !');
    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $player = Player::findOrFail($id);
        $filename = $player->name . $player->date . '.png';
        $location = public_path("images\\".$filename);
        
        if(file_exists($location)){
            unlink($location);
        } 

        Player::destroy($id);
        Ability::where('user_id',$id)->delete();

        return back()->with('message','Player deleted !');
    }

    public function sponzori()
    {
        return view('sponzori');
    }
}
