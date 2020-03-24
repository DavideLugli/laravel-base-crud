<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cd;

class CdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $cds = Cd::all();
    // dd($cds);
 return view('cds.index', compact('cds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('cds.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $data = $request->all();
    $cd = new Cd;
    $cd->name = $data['name'];
    $cd->artist = $data['artist'];
    $cd->year = $data['year'];
    $cd->songs_number = $data['songs_number'];
    $cd->genre = $data['genre'];

    $saved = $cd->save();

    if ($saved) {
    return redirect()->route('cds.index');
    }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cd $cd)
    {
      if(empty($cd)) {
          abort('404');
      }
    return view('cds.show', compact('cd'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cd $cd)
    {
      if(empty($cd)) {
          abort('404');
      }
    return view('cds.edit', compact('cd'));
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
      $cd = Cd::find($id);
          if(empty($cd)) {
              abort('404');
          }

          $data = $request->all();
          $updated = $cd->update($data);
          // dd($updated);
          if ($updated) {
              $cd = Cd::find($id);
              return redirect()->route('cds.show', compact('cd'));
          }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
