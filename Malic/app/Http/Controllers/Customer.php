<?php 
namespace Malic\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Request;

class CustomerController extends BaseController {
	public function list() {
		$customers = DB::select('select * from customer');
		return view('customer/list')->with('customers', $customers);
	}

	public function edit() {
		$id = Request::route('_id');
		$customer = DB::select('select * from customer where _id = ?', [$id]);
		// dd($customer);

		if (empty($customer)) {
			return "Esse cliente nao existe";
		} else {
			return view('customer/edit')->with('customer', $customer[0]);
		}
	}

	public function new() {
		return view('customer/new');
	}

	public function add() {
		$name = Request::input('name');

		DB::insert('INSERT INTO customer (name) VALUES (?)', array($name));
		return redirect('customer/list')->withInput();
	}	
	
	public function json(){
		$customers = DB::select('select * from customer');
		return response()->json($customers);
	}
}
