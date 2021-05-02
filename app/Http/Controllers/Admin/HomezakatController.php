<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Zakatfitrah;
use Illuminate\Support\Facades\DB;

class HomezakatController extends Controller
{
    private $folder = 'admin.homezakat';
    private $title = 'Dashboard Zakat Fitrah';

    public function index(Zakatfitrah $user)
    {
    	$data['totalzakatfitrah'] = $user->count();
    	$data['uangtunai'] = $user->where('jeniszakat_id', 1)->count();
    	$data['beras'] = $user->where('jeniszakat_id', 2)->count();
		// return $data['pendidikan'];
    	return view($this->folder.'.index', $data);
    }

}
