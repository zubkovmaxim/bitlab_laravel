<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    public function __construct(Request $request)
    {
        dump($request->route()->getName());
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
//        $data = DB::table('country')->get();
//        $data = DB::table('country')->limit(4)->get()->sortBy('Continent');
//        $data = DB::table('country')->select('Name','Continent')->get();
//        $data = DB::table('country')->select('Name','Continent')->first();
//        $data = DB::table('country')->select('Name','Continent')->orderBy('Name','DESC')->first();
//        $city = DB::table('city')->select('Name', 'Id')->find('2');
//        $city = DB::table('city')->select('Name', 'Id')->where('id', '=', '2');
//        $contry = DB::table('country')->limit(10)->pluck('Name');
//        $contry = DB::table('country')->count();
//        $contry = DB::table('country')->max('Name','population');
//        $contry = DB::table('city')->select('countryCode')->distinct()->get();
        $data = DB::table('city')->select('city.ID', 'city.Name as city_name', 'country.code', 'country.Name as country_name')->limit(10)->join('country','city.CountryCode','=','country.code')->orderBy('city.id')->get();
        dd($data);




    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "Post id $id";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('posts.edit',['id'=>$id]);
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
        dump($id);
        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd($id);
    }
}
