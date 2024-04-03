<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personaldatamodel;

class PersonaldataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personaldata = Personaldatamodel::all();
        return view('personaldata.index', compact('personaldata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personaldata.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'address' => 'required',
        ]);

        Personaldatamodel::create($request->all());

        return redirect()->route('personaldata.index')
            ->with('success', 'Personal data created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personaldata = Personaldatamodel::findOrFail($id);
        return view('personaldata.show', compact('personaldata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personaldata = Personaldatamodel::findOrFail($id);
        return view('personaldata.edit', compact('personaldata'));
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
        $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'address' => 'required',
        ]);

        $personaldata = Personaldatamodel::findOrFail($id);
        $personaldata->update($request->all());

        return redirect()->route('personaldata.index')
            ->with('success', 'Personal data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $personaldata = Personaldatamodel::findOrFail($id);
        $personaldata->delete();

        return redirect()->route('personaldata.index')
            ->with('success', 'Personal data deleted successfully');
    }
}
