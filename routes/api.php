<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['middleware' => 'auth:api'], function (){

	Route::get('/all-computers', function (Request $request) {
	    return App\Http\Resources\InventoryComputersResource::collection(\App\ComputerInventory::All());
	});

	Route::get('/computer/{computer}', function (\App\ComputerInventory $computer) {
	    return new App\Http\Resources\InventoryComputersResource($computer);
	});

	Route::post('/create-computer', function (Request $request){
		$validatedData = $request->validate([
	        'name' => 'required|max:255',
	        'launch_year' => 'required|max:255' , 
	        'manufacturer' => 'required|max:255' , 
	        'operational_system' => 'required|max:255' ,
	        'cpu' => 'required|max:255' ,
	        'memory' => 'required|max:255' ,
	        'storage' => 'required|max:255' ,
	        'initial_price' => 'required|numeric' ,
	        'image' => 'required|max:255' ,
	        'comments' => 'nullable'
	    ]);

		\App\ComputerInventory::create($request->all());
		return response()->json(['sucess' => 'criado com sucesso']);
	});

	Route::post('/update-computer/{computer}', function (\App\ComputerInventory $computer, Request $request){	
		$computer->update($request->all());
		return new App\Http\Resources\InventoryComputersResource($computer);
	});

	Route::post('/delete-computer/{computer}', function (\App\ComputerInventory $computer, Request $request){	
		$computer->delete();
        return response()->json(['sucess' => 'excluido com sucesso']);
	});
	
	Route::post('/import', 'ComputerInventoryController@importFile')->name('import');
});

Route::post('/login', function ( Request $request) {
	try {
		$token = \Auth::guard('api')->attempt($request->only(['email', 'password']));
		if (!$token) {
			return response()->json([
				'error' => 'Credential Invalid'
			], 400);
		}
	    return ['token' => $token];
	}catch (\Exception $e){
		return response()->json($e->getMessage());
	}
});
