<?php 
namespace Malic\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Request;
use Malic\Customer;

class CustomerController extends BaseController {
	public function list() {
		$customers = Customer::all();
		return view('customer/list')->with('customers', $customers);
	}

	public function edit($id) {
		// $id = Request::route('_id');
		$customer = Customer::find($id);
		// 
		if (empty($customer)) {
			return "Esse cliente nao existe";
		} else {
			return view('customer/edit')->with('customer', $customer);
		}
	}

	public function new() {
		return view('customer/new');
	}

	public function add() {
		Customer::create(Request::all());
		return redirect('customer/list')->withInput();
	}	
	
	public function remove($id){
		// $id = Request::route('_id');
		$customer = Customer::find($id);
		$customer->delete();
		return redirect()->action('CustomerController@list');
	}
	
	public function json(){
		$customers = DB::select('select * from customer');
		return response()->json($customers);
	}
}
