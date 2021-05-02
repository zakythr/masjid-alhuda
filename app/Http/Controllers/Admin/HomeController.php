<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Citizens;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    private $folder = 'admin.home';
    private $title = 'Dashboard';

    public function index(Citizens $user)
    {
		// return redirect()->action('HomezakatController@index');
    	$data['total'] = $user->count();
    	$data['male'] = $user->where('sex_id', 1)->count();
    	$data['female'] = $user->where('sex_id', 2)->count();
		$data['leader'] = $user->where('family_status_id', 1)->count();
		$data['work'] = $user->whereNotIn('job_id', [1])->count();
		$data['not_work'] = $user->where('job_id', 1)->count();
		$data['page_title'] = $this->title;
		$data['pendidikan'] = DB::table('education')
								->leftJoin('citizens', 'citizens.education_id', '=', 'education.id')
								->select('education.id', 'education.name', DB::raw('count(citizens.id) as total'))
								->groupBy('education.id', 'education.name')
								->get();
		$data['pendidikan'] = json_encode($data['pendidikan']);
		$data['perkawinan'] = DB::table('marital_status')
								->leftJoin('citizens', 'citizens.marital_status_id', '=', 'marital_status.id')
								->select('marital_status.id', 'marital_status.name', DB::raw('count(citizens.id) as total'))
								->groupBy('marital_status.id', 'marital_status.name')
								->get();
		$data['perkawinan'] = json_encode($data['perkawinan']);
		// return $data['pendidikan'];
    	return view($this->folder.'.index', $data);
    }

}
