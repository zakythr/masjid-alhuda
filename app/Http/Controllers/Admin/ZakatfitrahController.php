<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\FormBuilder;
use Illuminate\Support\Facades\Auth;

use App\Traits\CrudTrait;
use App\Model\Zakatfitrah;
use App\Model\Jeniszakatfitrah;


use DataTables;
use Form;

class ZakatfitrahController extends Controller
{
    private $folder = 'admin.zakatfitrah';
    private $uri = 'admin.zakatfitrah';
    private $title = 'Zakat Fitrah';
    private $desc = 'Description';

    use CrudTrait;

    public function __construct(Zakatfitrah $table) 
    {
    	$this->table = $table;
    }

    public function index()
    {
        $data['page_title'] = $this->title;
    	$data['ajax'] = route($this->uri.'.data');
    	$data['create'] = route($this->uri.'.create');
        // $data['jeniszakatfitrah'] = Jeniszakatfitrah::all();
        // return session('birth_date');
    	return view($this->folder.'.index',$data);
    }

    public function filter(Request $request)
    {
        if (!empty($request->sex_id)) {
            $request->session()->put('sex_id', $request->sex_id);
        } else {
            $request->session()->forget('sex_id');
        }

        if (!empty($request->jeniszakat_id)) {
            $request->session()->put('jeniszakat_id', $request->jeniszakat_id);
        } else {
            $request->session()->forget('jeniszakat_id');
        }

        if (!empty($request->tanggalfitrah)) {
            $request->session()->put('tanggalfitrah', $request->tanggalfitrah);
        } else {
            $request->session()->forget('tanggalfitrah');
        }

        return redirect()->back();
    }

    public function data(Request $request)
    {
    	if ($request->ajax()) {
    		$data = $this->table->select(['id','nama','sex_id','jeniszakat_id','jmlorang','jumlahberas','jumlahuang','tanggalfitrah','alamat','created_at'])->orderBy('id')->orderBy('id', 'desc');
            if ($request->session()->has('sex_id')) {
                $data = $data->where('sex_id', $request->session()->get('sex_id'));
            }
            if ($request->session()->has('jeniszakat_id')) {
                $data = $data->where('jeniszakat_id', $request->session()->get('jeniszakat_id'));
            }
            if ($request->session()->has('tanggalfitrah')) {
                $data = $data->where('tanggalfitrah', $request->session()->get('tanggalfitrah'));
            }
    		return DataTables::of($data)
            // ->editColumn('id','<input type="checkbox" class="checkbox" name="id[]" value="{{$id}}"/>')
                ->editColumn('sex_id', function ($index) {
                    return $index->sex->name;
                })
                ->editColumn('jeniszakat_id', function ($index) {
                    return $index->jeniszakatfitrah->name;
                })
                ->editColumn('tanggalfitrah', function ($index) {
                    return date('d/m/Y', strtotime($index->tanggalfitrah));
                })
	            ->addColumn('action', function ($index) {
	                $tag = (Auth::user()->id == 1) ? Form::open(array("url" => route($this->uri.'.destroy',$index->id), "method" => "DELETE")) : '';
	                $tag .= "<a href=".route($this->uri.'.edit',$index->id)." class='btn btn-primary btn-xs'>Edit</a>";
	                $tag .= " <a href=".route($this->uri.'.show',$index->id)." class='btn btn-success btn-xs'>Detail</a>";
	                $tag .= (Auth::user()->id == 1) ? " <button type='submit' class='delete btn btn-danger btn-xs'>Hapus</button>" : " <button type='submit' class='delete btn btn-danger btn-xs' disabled=''>Hapus</button>";
	                $tag .= (Auth::user()->id == 1) ? Form::close() : '';
	                return $tag;
	            })
	    		->rawColumns(['action'])
	    		->make(true);
    	}
    }

    public function show(FormBuilder $formBuilder, $id)
    {
        $data['page_title'] = $this->title;
        $tbl = $this->table->find($id);
        $data['form'] = $formBuilder->create('App\Forms\ZakatfitrahForm', [
            'method' => 'PUT',
            'model' => $tbl,
            'url' => route($this->uri.'.update', $id)
        ])
        ->add('created_by', 'text', [
            // 'label' => 'Nama Ayah',
            'attr' => ['data-validation' => 'required'],
            'value' => isset($tbl->admin->name) ? $tbl->admin->name : '-'
        ])
        ->modify('sex_id', 'choice', [
            // 'label' => 'Status',
            // 'attr' => ['required' => ''],
            // 'choices' => [1 => 'YES', 0 => 'NO'],
            // 'choice_options' => [
            //     'wrapper' => ['class' => 'radio'],
            //     'label_attr' => ['class' => 'col-lg-10 col-md-10 col-sm-8 col-xs-7'],
            // ],
            'selected' => $tbl->sex_id,
            // 'expanded' => true,
            // 'multiple' => false
        ]);
    	// $data['detail'] = Citizens::findOrFail($id);
        $data['url'] = route($this->uri.'.index');
    	return view($this->folder.'.show', $data);
    }

    public function create(FormBuilder $formBuilder)
    {
        $data['form'] = $formBuilder->create('App\Forms\ZakatfitrahForm', [
            'method' => 'POST',
            'url' => route($this->uri.'.store')
        ]);
        $data['url'] = route($this->uri.'.index');
        $data['page_title'] = $this->title;
        return view($this->folder.'.create', $data);
    }

    public function edit(FormBuilder $formBuilder, $id)
    {
        $data['page_title'] = $this->title;
    	$tbl = $this->table->find($id);
    	$data['form'] = $formBuilder->create('App\Forms\ZakatfitrahForm', [
    		'method' => 'PUT',
    		'model' => $tbl,
    		'url' => route($this->uri.'.update', $id)
    	])
        // ->modify('religion_id', 'select', [
        //     'attr' => ['data-validation' => '', 'class' => 'form-control select2'],
        //     'choices' => Religion::where('id', $tbl->religion_id)->pluck('name', 'id')->toArray(),
        //     'selected' => ($tbl->religion_id) ? $tbl->religion_id : null,
        //     'empty_value' => '- Please Select -'
        // ])
        // ->modify('education_id', 'select', [
        //     'attr' => ['data-validation' => '', 'class' => 'form-control select2'],
        //     'choices' => Education::where('id', $tbl->education_id)->pluck('name', 'id')->toArray(),
        //     'selected' => ($tbl->education_id) ? $tbl->education_id : null,
        //     'empty_value' => '- Please Select -'
        // ])
        // ->modify('job_id', 'select', [
        //     'attr' => ['data-validation' => '', 'class' => 'form-control select2'],
        //     'choices' => Job::where('id', $tbl->job_id)->pluck('name', 'id')->toArray(),
        //     'selected' => ($tbl->job_id) ? $tbl->job_id : null,
        //     'empty_value' => '- Please Select -'
        // ])
        // ->modify('marital_status_id', 'select', [
        //     'attr' => ['data-validation' => '', 'class' => 'form-control select2'],
        //     'choices' => MaritalStatus::where('id', $tbl->marital_status_id)->pluck('name', 'id')->toArray(),
        //     'selected' => ($tbl->marital_status_id) ? $tbl->marital_status_id : null,
        //     'empty_value' => '- Please Select -'
        // ])
        // ->modify('family_status_id', 'select', [
        //     'attr' => ['data-validation' => '', 'class' => 'form-control select2'],
        //     'choices' => FamilyStatus::where('id', $tbl->family_status_id)->pluck('name', 'id')->toArray(),
        //     'selected' => ($tbl->family_status_id) ? $tbl->family_status_id : null,
        //     'empty_value' => '- Please Select -'
        // ])
        // ->modify('country_id', 'select', [
        //     'attr' => ['data-validation' => '', 'class' => 'form-control select2'],
        //     'choices' => Country::where('id', $tbl->country_id)->pluck('name', 'id')->toArray(),
        //     'selected' => ($tbl->country_id) ? $tbl->country_id : null,
        //     'empty_value' => '- Please Select -'
        // ])
        ->modify('sex_id', 'choice', [
            // 'label' => 'Status',
            // 'attr' => ['required' => ''],
            // 'choices' => [1 => 'YES', 0 => 'NO'],
            // 'choice_options' => [
            //     'wrapper' => ['class' => 'radio'],
            //     'label_attr' => ['class' => 'col-lg-10 col-md-10 col-sm-8 col-xs-7'],
            // ],
            'selected' => null,
            // 'expanded' => true,
            // 'multiple' => false
        ]);

    	$data['url'] = route($this->uri.'.index');
    	return view($this->folder.'.create', $data);
    }

    public function destroy($id)
    {
        $tb = $this->table->findOrFail($id);
        $tb->delete();
        return redirect(route($this->uri.'.index'))->with('success',trans('message.delete'));
    }

}
