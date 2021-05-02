<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Zakatmal;
use Illuminate\Support\Facades\DB;

class HomezakatmalController extends Controller
{
    private $folder = 'admin.homezakatmal';
    private $title = 'Dashboard Zakat Mal';

    public function index(Zakatmal $user)
    {
    	$data['totalzakatmal'] = $user->count();
		// return $data['pendidikan'];
    	return view($this->folder.'.index', $data);
    }

}
