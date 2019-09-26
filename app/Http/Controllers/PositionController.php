<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Position;

use Image;

use Illuminate\Support\Facades\Storage;

class PositionController extends Controller
{
    public function __construct(){
        return $this->middleware('auth');
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
        return view('create_position');
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
            'name' => 'unique:positions,position_name',
        ]);
        
        $position = new Position;
        $position->position_name = $request->name;
        $position->position_desc = $request->description;
        $position->ptv = $request->ptv;
        $position->save();

        if(!empty($request->file('positionImage')))
        {
            $image = $request->file('positionImage');
            $filename = $position->id . '.png';
            $location = public_path("skills\\".$filename);
            try{
            Image::make($image)->resize(200,200)->save($location);
            }catch(Exception $e){
                dd($e);
            }
        }
        if(!empty($request->file('ptvImage')))
        {
            $image = $request->file('ptvImage');
            $filename = $position->id . '.png';
            $location = public_path("skills\players\\".$filename);
            try{
            Image::make($image)->resize(200,200)->save($location);
            }catch(Exception $e){
                dd($e);
            }
        }
        return back()->with('message','Position added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Position $position)
    {
        return view('position',compact('position'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Position $position)
    {
        return view('position_edit',compact('position'));
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
            "*" => 'required'
        ]);
        
        $position = Position::findOrFail($id);
        $position->position_name = $request->name;
        $position->position_desc = $request->description;
        $position->ptv = $request->ptv;
        $position->save();

        if(!empty($request->file('positionImage')))
        {
            $image = $request->file('positionImage');
            $filename = $position->id . '.png';
            $location = public_path("skills\\".$filename);
            try{
            Image::make($image)->resize(200,200)->save($location);
            }catch(Exception $e){
                dd($e);
            }
        }
        if(!empty($request->file('ptvImage')))
        {
            $image = $request->file('ptvImage');
            $filename = $position->id . '.png';
            $location = public_path("skills\players\\".$filename);
            try{
            Image::make($image)->resize(200,200)->save($location);
            }catch(Exception $e){
                dd($e);
            }
        }
        return back()->with('message','Position edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Position::destroy($id);

        if(file_exists(public_path("skills\\".$id.".png"))){
            unlink(public_path("skills\\".$id.".png"));
        }
        if(file_exists(public_path("skills\players\\".$id.".png"))){
            unlink(public_path("skills\players\\".$id.".png"));
        }
        
        return back()->with('message','Position deleted !');
    }
}
