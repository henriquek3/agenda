<?php

namespace Modules\Contatos\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Contatos\Entities\Peoples;

class PeopleController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        //return view('contatos::people');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('contatos::people');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request, Peoples $peoples)
    {
        try {
            DB::beginTransaction();
            $resouce = $peoples->create($request->all());
            DB::commit();
        } catch (\PDOException $exception) {
            DB::rollBack();
            dd($exception);
        }
        dd($resouce);
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('contatos::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
