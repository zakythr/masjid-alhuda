<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\FormBuilder;
use Illuminate\Support\Facades\Auth;

use App\Traits\CrudTrait;
use App\Model\Citizens;

use App\Model\Religion;
use App\Model\Job;
use App\Model\MaritalStatus;
use App\Model\FamilyStatus;
use App\Model\Country;
use App\Model\Education;

use DataTables;
use Form;

class CitizensController extends Controller
{
    private $folder = 'admin.citizens';
    private $uri = 'admin.citizens';
    private $title = 'Data Penduduk';
    private $desc = 'Description';

    use CrudTrait;

    public function __construct(Citizens $table) 
    {
    	$this->table = $table;
    }

    public function index()
    {
        $data['page_title'] = $this->title;
    	$data['ajax'] = route($this->uri.'.data');
    	$data['create'] = route($this->uri.'.create');
        $data['education'] = Education::all();
        $data['jobs'] = Job::all();
        $data['marital'] = MaritalStatus::all();
        $data['family'] = FamilyStatus::all();
        $data['religion'] = Religion::all();
        // return session('birth_date');
    	return view($this->folder.'.index',$data);
    }

    public function filter(Request $request)
    {
        if (!empty($request->religion_id)) {
            $request->session()->put('religion_id', $request->religion_id);
        } else {
            $request->session()->forget('religion_id');
        }

        if (!empty($request->education_id)) {
            $request->session()->put('education_id', $request->education_id);
        } else {
            $request->session()->forget('education_id');
        }
        
        if (!empty($request->job_id)) {
            $request->session()->put('job_id', $request->job_id);
        } else {
            $request->session()->forget('job_id');
        }

        if (!empty($request->marital_status_id)) {
            $request->session()->put('marital_status_id', $request->marital_status_id);
        } else {
            $request->session()->forget('marital_status_id');
        }

        if (!empty($request->family_status_id)) {
            $request->session()->put('family_status_id', $request->family_status_id);
        } else {
            $request->session()->forget('family_status_id');
        }

        if (!empty($request->sex_id)) {
            $request->session()->put('sex_id', $request->sex_id);
        } else {
            $request->session()->forget('sex_id');
        }

        if (!empty($request->birth_date)) {
            $request->session()->put('birth_date', $request->birth_date);
        } else {
            $request->session()->forget('birth_date');
        }

        return redirect()->back();
    }

    public function data(Request $request)
    {
    	if ($request->ajax()) {
    		$data = $this->table->select(['id','kk_number','name','nik','sex_id','birth_date','religion_id','created_at'])->orderBy('kk_number', 'id')->orderBy('id', 'desc');
            if ($request->session()->has('religion_id')) {
                $data = $data->where('religion_id', $request->session()->get('religion_id'));
            }
            if ($request->session()->has('sex_id')) {
                $data = $data->where('sex_id', $request->session()->get('sex_id'));
            }
            if ($request->session()->has('job_id')) {
                $data = $data->where('job_id', $request->session()->get('job_id'));
            }
            if ($request->session()->has('marital_status_id')) {
                $data = $data->where('marital_status_id', $request->session()->get('marital_status_id'));
            }
            if ($request->session()->has('family_status_id')) {
                $data = $data->where('family_status_id', $request->session()->get('family_status_id'));
            }
            if ($request->session()->has('education_id')) {
                $data = $data->where('education_id', $request->session()->get('education_id'));
            }
            if ($request->session()->has('birth_date')) {
                $data = $data->whereYear('birth_date', $request->session()->get('birth_date'));
            }
    		return DataTables::of($data)
            // ->editColumn('id','<input type="checkbox" class="checkbox" name="id[]" value="{{$id}}"/>')
                ->editColumn('sex_id', function ($index) {
                    return $index->sex->name;
                })
                ->editColumn('religion_id', function ($index) {
                    return $index->religion->name;
                })
                ->editColumn('birth_date', function ($index) {
                    return date('d/m/Y', strtotime($index->birth_date));
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
        $data['form'] = $formBuilder->create('App\Forms\CitizenForm', [
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
        $data['form'] = $formBuilder->create('App\Forms\CitizenForm', [
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
    	$data['form'] = $formBuilder->create('App\Forms\CitizenForm', [
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
