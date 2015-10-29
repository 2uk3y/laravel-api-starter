<?php

namespace Api\Controllers;

use App\Premise;
use App\Http\Requests;
use Illuminate\Http\Request;
use Api\Requests\PremiseRequest;
use Api\Transformers\PremiseTransformer;

/**
 * @Resource('Dogs', uri='/dogs')
 */
class PremisesController extends BaseController
{

    public function __construct() 
    {
        $this->middleware('jwt.auth');
    }

    /**
     * Show all dogs
     *
     * Get a JSON representation of all the dogs
     * 
     * @Get('/')
     */
    public function index()
    {
        return $this->collection(Premise::all(), new PremiseTransformer);
    }

    /**
     * Store a new dog in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PremiseRequest $request)
    {
        return Premise::create($request->only(['regno', 'company_name', 'state_name', 'district_name']));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->item(Premise::findOrFail($id), new PremiseTransformer);
    }

    /**
     * Update the premise in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PremiseRequest $request, $id)
    {
        $premis = Premise::findOrFail($id);
        $premis->update($request->only(['regno', 'company_name', 'state_name', 'district_name']));
        return $premis;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Premise::destroy($id);
    }
}
