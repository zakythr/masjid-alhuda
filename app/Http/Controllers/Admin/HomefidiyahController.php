<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Fidiyah;
use Illuminate\Support\Facades\DB;

class HomefidiyahController extends Controller
{
    private $folder = 'admin.homefidiyah';
    private $title = 'Dashboard Fidiyah';

    public function index(Fidiyah $user)
    {
    	$data['totalfidiyah'] = $user->count();
		// return $data['pendidikan'];
    	return view($this->folder.'.index', $data);
    }

}
