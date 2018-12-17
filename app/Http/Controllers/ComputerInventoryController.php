<?php
namespace App\Http\Controllers;

use App\ComputerInventory;
use Illuminate\Http\Request;
use App\Imports\ComputerInventoryImport;
use App\Exports\ComputerInventoryExport;
use App\Services\FileService;

class ComputerInventoryController extends Controller
{
    use FileService;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $pages = ComputerInventory::All();
        return view( 'admin.pages.inventorys.computers', compact('pages'));
    }

    public function importFile(Request $req){
        try {
            if ($req->hasFile('fileImport')) {
                $this->import(new ComputerInventoryImport(), $req->file('fileImport'));

                if( in_array('api', explode('/', $req->path()))  ){
                    return \Response::json([
                        'status' => 'sucess',
                        'msg' => 'Importado com sucesso'
                    ]);
                }else{
                    $req->session()->flash('sucess', 'criado com sucesso'); 
                    return response()->redirectToRoute('index');
                }
            }else{
                throw new InvalidArgumentException('archive not found');
            }
        }catch (\Exception $e){
            $req->session()->flash('error', 'Oops algo deu errado'); 
            return response()->redirectToRoute('index');
        }
    }

    public function exportFile($type){
        return $this->export(new ComputerInventoryExport(), 'inventory.'.$type);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        try {
            ComputerInventory::create($req->all());
            $req->session()->flash('sucess', 'criado com sucesso'); 
            return response()->redirectToRoute('index');
        } catch (Exception $e) {
            $req->session()->flash('error', 'Oops algo deu errado'); 
            return response()->redirectToRoute('index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ComputerInventory  $computerInventory
     * @return \Illuminate\Http\Response
     */
    public function show(ComputerInventory $computerInventory)
    {
        try {
            return \Response::json($computerInventory);
        }catch (\Exception $e){
            throw $e->getMessage(); 

        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ComputerInventory  $computerInventory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComputerInventory $computerInventory)
    {
        try {
            $computerInventory->update($request->all());
            $request->session()->flash('sucess', 'alterado comsucesso'); 
            return response()->redirectToRoute('index');
        } catch (Exception $e) {
            $request->session()->flash('error', 'Oops algo deu errado'); 
            return response()->redirectToRoute('index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ComputerInventory  $computerInventory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ComputerInventory $computerInventory, Request $request)
    {
        try {
            $computerInventory->delete();
            $request->session()->flash('sucess', 'deletado com sucesso'); 
            return response()->redirectToRoute('index');
        } catch (Exception $e) {
            $request->session()->flash('error', 'Oops algo deu errado'); 
            return response()->redirectToRoute('index');   
        }
    }

}
