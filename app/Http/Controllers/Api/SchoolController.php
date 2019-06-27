<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSchoolFormRequest;
use App\Models\School;

class SchoolController extends Controller
{

    private $school;

    public function __construct(School $school){
        $this->school = $school;
    }

    public function index(School $school, Request $request)
    {
        $schools = $this->school->getResults($request->name);

        return response()->json($schools, 200);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateSchoolFormRequest $request)
    {
        $schools = $this->school->create($request->all());

        return response()->json($schools, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateSchoolFormRequest $request, $id)
    {
        if(!$school = $this->school->find($id))
            return response()->json(['error' => 'Not found.'], 404);

        $school->update($request->all());

        return response()->json($school);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$school = $this->school->find($id))
            return response()->json(['error' => 'Not found.'], 404);

        $school->delete();

        return response()->json(['success' => true], 204);
    }
}
