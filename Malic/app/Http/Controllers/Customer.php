<?php 
namespace Malic\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Support\Facades\DB;

class CustomerController extends BaseController {
	public function list() {
		$html = '<h1>Listagem de produtos com Laravel</h1>';
		$html .= '<ul>';
		$produtos = DB::select('select * from customer');
		foreach ($produtos as $p) {
			$html .= '<li> Nome: '. $p->name;
		}
		$html .= '</ul>';
		return $html;
	}
}
