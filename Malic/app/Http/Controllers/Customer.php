<?php 
namespace Malic\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Request;
use Validator;
use Auth;
use Malic\Customer;
use Malic\Seller;
use Malic\Http\Requests\CustomerRequest;

class CustomerController extends BaseController {
	public function __construct()
	{
		$this->middleware('my.auth');
	}

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
		return view('customer/new')->with('sellers', Seller::all());
	}

	public function add( CustomerRequest $request ) {
		Customer::create($request->all());
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
