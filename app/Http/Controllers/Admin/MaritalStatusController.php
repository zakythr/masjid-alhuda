<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Traits\CrudTrait;
use App\Model\MaritalStatus;
use DataTables;

class MaritalStatusController extends Controller
{
    private $folder = 'admin.marital';
    private $uri = 'admin.marital';
    private $title = 'Marital';
    private $desc = 'Description';

    use CrudTrait;

    public function __construct(MaritalStatus $table) 
    {
    	$this->table = $table;
    }

    public function index()
    {
    	$data['ajax'] = route($this->uri.'.data');
    	$data['create'] = route($this->uri.'.create');
    	return view($this->folder.'.index',$data);
    }

    public function data(Request $request)
    {
    	if ($request->ajax()) {
    		$data = $this->table->select(['id','name','created_at']);
    		return DataTables::of($data)
	            ->addColumn('action', function ($index) {
	                $tag = Form::open(array("url" => route($this->uri.'.destroy',$index->id), "method" => "DELETE"));
	                $tag .= "<a href=".route($this->uri.'.edit',$index->id)." class='btn btn-primary btn-xs'>EDIT</a>";
	                $tag .= " <button type='submit' class='delete btn btn-danger btn-xs'>Delete</button>";
	                $tag .= Form::close();
	                return $tag;
	            })
	    		->rawColumns(['id', 'action'])
	    		->make(true);
    	}
    }

    public function create(FormBuilder $formBuilder)
    {
        $data['form'] = $formBuilder->create('App\Forms\MaritalForm', [
            'method' => 'POST',
            'url' => route($this->uri.'.store')
        ]);
        $data['url'] = route($this->uri.'.index');
        return view($this->folder.'.create', $data);
    }

    public function edit(FormBuilder $formBuilder, $id)
    {
    	$tbl = $this->table->find($id);
    	$data['form'] = $formBuilder->create('App\Forms\MaritalForm', [
    		'method' => 'PUT',
    		'model' => $tbl,
    		'url' => route($this->uri.'.update', $id)
    	]);

    	$data['url'] = route($this->uri.'.index');
    	return view($this->folder.'.create', $data);
    }
}
