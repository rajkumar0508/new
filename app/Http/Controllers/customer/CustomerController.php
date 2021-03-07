<?php

namespace App\Http\Controllers\customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SalesItems;
use Auth;
use App\customerTape;
use App\UserRto;
use App\customerForm;
use App\customerImage;
use App\ConfigDistributor;
use App\Product;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->isRto()) {
            $data = customerForm::where('rto_id', Auth::getUser()->id)->get();
        } else {
            $data = customerForm::where('user_id', Auth::getUser()->id)->get();
        }
        return view('customer.index')->with(compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rto =  UserRto::where('user_id', Auth::getUser()->id)->with('rto')->first();
        $data =  SalesItems::with('product.unit')->with('product.company')->where('user_id', Auth::getUser()->id)->groupBy('product_id')->get();
        foreach ($data as $va=>$key) {
            $sales = SalesItems::where('user_id', Auth::getUser()->id)->where('product_id', $key->product_id)->sum('qty');
            $key->avilable_qty =  $sales - customerTape::where('product_id', $key->product_id)->where('user_id', $key->user_id)->sum('qty');

        }
       //return $data;
        return view('customer.create')->with(compact('data', 'rto'));
    }
	 public function pdf(Request $request, $id) {
       $data =  customerForm::with('images', 'tapes.product.unit', 'rto')->with('tapes.product.company')->where('id', $id)->first();
        
        $string = "";
        $approved_no = '';
        $product = '';
        $twenty = [];
        $fifty = [];
        $eighty = [];
        $class = [];
		$class_exist = 0;
		//return $data->tapes[0]->product->company->id;
		$products =  Product::with('unit')->where('company_id', $data->tapes[0]->product->company->id)->get();
		$pro_count = count($products);
		$mm = [];
		foreach($products as $va1=>$key1){
			//return $key1;
			if($pro_count == $va1+1) {
			    	if (strpos(strtoupper(str_replace(' ', '',$key1->name)), '20MM') !== false && !in_array('20MM', $mm)) {
						$product .=  $key1->name.":"."Rs.".$key1->price."/".$key1->unit->name;
						$approved_no .= $key1->approved_no;
						$mm[] = '20MM';
					}
					else if (strpos(strtoupper(str_replace(' ', '',$key1->name)), '50MM') !== false && !in_array('50MM', $mm)) {
							$product .=  $key1->name.":"."Rs.".$key1->price."/".$key1->unit->name;
							$approved_no .= $key1->approved_no;
							$mm[] = '50MM';
					}
					else if (strpos(strtoupper(str_replace(' ', '',$key1->name)), '80MM') !== false && !in_array('80MM', $mm)) {
							$product .=  $key1->name.":"."Rs.".$key1->price."/".$key1->unit->name;
							$approved_no .= $key1->approved_no;
							$mm[] = '80MM';
					} else if (strpos(strtoupper(str_replace(' ', '',$key1->name)), 'CLASS') !== false) {
					    	$product .=  $key1->name.":"."Rs.".$key1->price."/".$key1->unit->name;
			        	    $approved_no .= $key1->approved_no;
					    
					}
			    
			} else {
			    //	$product .=  $key1->name.":"."Rs.".$key1->price."/".$key1->unit->name.", ";
			    //	$approved_no .= $key1->approved_no." & ";
			    	if (strpos(strtoupper(str_replace(' ', '',$key1->name)), '20MM') !== false && !in_array('20MM', $mm)) {
					 	$product .=  "20MM :"."Rs.".$key1->price."/".$key1->unit->name.", ";
			    	    $approved_no .= $key1->approved_no." & ";
						$mm[] = '20MM';
					}
					else if (strpos(strtoupper(str_replace(' ', '',$key1->name)), '50MM') !== false && !in_array('50MM', $mm)) {
								$product .=  "50MM :"."Rs.".$key1->price."/".$key1->unit->name.", ";
			    	    $approved_no .= $key1->approved_no." & ";
							$mm[] = '50MM';
					}
					else if (strpos(strtoupper(str_replace(' ', '',$key1->name)), '80MM') !== false && !in_array('80MM', $mm)) {
							$product .=  "80MM :"."Rs.".$key1->price."/".$key1->unit->name.", ";
			    	    $approved_no .= $key1->approved_no." & ";
							$mm[] = '80MM';
					} else if (strpos(strtoupper(str_replace(' ', '',$key1->name)), 'CLASS') !== false) {
					    	$product .=  $key1->name.":"."Rs.".$key1->price."/".$key1->unit->name.", ";
			    	    $approved_no .= $key1->approved_no." & ";
					    
					}
			}
			
			 $prod_status = 0;
			 foreach($data->tapes as $va=>$key) {
				if($key->product->id == $key1->id) {
					$prod_status = 1;
					$data->certificate_no =  str_pad($data->id, 7, '0', STR_PAD_LEFT);
					$company = array();
					$company['name'] = $key->product->company->name;
					$company['logo'] =  $key->product->company->logo;
					$company['address'] =  $key->product->company->address;
					$company['cop_number'] =  $key->product->company->cop_number;
					$company['test_report_no'] =  $key->product->company->test_report_no;
					$company['rear_mark'] =  $key->product->company->rear_mark;
					$company['certified_by'] =  $key->product->company->certified_by;
					//$company['address'] =  $key->product->company->address;
					$string .= $key->product->name.":".$key->qty." ".$key->product->unit->name.", ";
					

			
                    if($key->qty == null) {
                        $key->qty = 0;
                    }
					if (strpos(strtoupper(str_replace(' ', '',$key->product->name)), '20MM') !== false) {
						$twenty[] = $key->product->name." : ".$key->qty." ".$key->product->unit->name;
					}
					if (strpos(strtoupper(str_replace(' ', '',$key->product->name)), '50MM') !== false) {
						$fifty[] = $key->product->name." : ".$key->qty." ".$key->product->unit->name;
					}
					if (strpos(strtoupper(str_replace(' ', '',$key->product->name)), '80MM') !== false) {
						$eighty[] = $key->product->name." : ".$key->qty." ".$key->product->unit->name;
					}
					if (strpos(strtolower(str_replace(' ', '',$key->product->name)), 'class') !== false) {
						$class[] = $key->product->name." : ".$key->qty." ".$key->product->unit->name;
						if($key->qty != 0) {
							$class_exist = 1;
						}
					}
				} 
			}
				if($prod_status == 0) {
					$qty = 0;
					if (strpos(strtoupper(str_replace(' ', '',$key1->name)), '20MM') !== false) {
						$twenty[] = $key1->name." : ".$qty." ".$key1->unit->name;
					}
					if (strpos(strtoupper(str_replace(' ', '',$key1->name)), '50MM') !== false) {
						$fifty[] = $key1->name." : ".$qty." ".$key1->unit->name;
					}
					if (strpos(strtoupper(str_replace(' ', '',$key1->name)), '80MM') !== false) {
						$eighty[] = $key1->name." : ".$qty." ".$key1->unit->name;
					}
					if (strpos(strtolower(str_replace(' ', '',$key1->name)), 'class') !== false) {
						$class[] = $key1->name." : ".$qty." ".$key1->unit->name;
					}
			}
		}
       
		
        $distributor_details = ConfigDistributor::first();
        return view('pdf.pdf')->with(compact('data', 'distributor_details', 'string', 'approved_no', 'company','product', 'twenty', 'fifty', 'eighty', 'class', 'class_exist'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $validatedData = $request->validate([
                'date' => 'required',
                'vehicle_no' => 'required',
                'vehicle_year'  => 'required',
                'class_no' =>  'required',
                'engine_no' =>  'required',
                'vehicle_make' =>  'required',
                'vehicle_model' =>  'required',
                'owner_name' => 'required',
                'phone' => 'required',
                'address' => 'required',
                'rto_id' => 'required',
                'front_image' => 'required',
                'left_image' => 'required',
                'right_image' => 'required',
                'back_image' => 'required',
                'product.*' => 'required',
            ]
        ); 
       
       $data = $request->all();//return $data['quantity'];
       if(!isset($data['product'])){
            return redirect()->back()->withErrors(['msg', 'Products not available']);
       }
       $customer = array();
       $customer['date'] = $data['date'];
       $customer['vehicle_no'] = $data['vehicle_no'];
       $customer['vehicle_year'] = $data['vehicle_year'];
       $customer['class_no'] = $data['class_no'];
       $customer['engine_no'] = $data['engine_no'];
       $customer['vehicle_make'] = $data['vehicle_make'];
       $customer['vehicle_model'] = $data['vehicle_model'];
       $customer['owner_name'] = $data['owner_name'];
       $customer['phone'] = $data['phone'];
       $customer['address'] = $data['address'];
       $customer['rto_id'] = $data['rto_id'];
       $customer['class_3'] = 1;
       $customer['class_4'] = 1;
       $customer['user_id'] = Auth::getUser()->id;
       $customer['created_at'] = date('Y-m-d H:i:s');
       $customer['updated_at'] = date('Y-m-d H:i:s');
       //return $customer;
       $insert = customerForm::insertGetId($customer);

      foreach($data['product'] as $va=>$key) {
        $tape = array();
        $tape['customer_id'] = $insert;
        $tape['product_id'] = $key;
        $tape['user_id'] = Auth::getUser()->id;
        $tape['qty'] = $data['quantity'][$va];
        $tape['created_at'] = date('Y-m-d H:i:s');
        $tape['updated_at'] = date('Y-m-d H:i:s');
        customerTape::insert($tape);
      }

      $image = [];
      $fileName = "FR".time().'.'.$request->front_image->extension();  
      $request->front_image->move(public_path('uploads/customer'), $fileName);
      $image['front_image'] =  $fileName;

      $fileName = "LR".time().'.'.$request->left_image->extension();  
      $request->left_image->move(public_path('uploads/customer'), $fileName);
      $image['left_image'] =  $fileName;

      $fileName = "RR".time().'.'.$request->right_image->extension();  
      $request->right_image->move(public_path('uploads/customer'), $fileName);
      $image['right_image'] =  $fileName;

      $fileName = "BR".time().'.'.$request->back_image->extension();  
      $request->back_image->move(public_path('uploads/customer'), $fileName);

      $image['back_image'] =  $fileName;
      $image['customer_id'] = $insert;
      $image['created_at'] = date('Y-m-d H:i:s');
      $image['updated_at'] = date('Y-m-d H:i:s');
      customerImage::insert($image);
      return redirect('customer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $data =  customerForm::with('images', 'tapes.product.unit', 'rto')->where('id', $id)->first();
         return view('customer.view')->with(compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =  customerForm::with('images', 'tapes', 'rto')->where('id', $id)->first();
        $product =  SalesItems::with('product.unit')->with('product.company')->where('user_id', Auth::getUser()->id)->groupBy('product_id')->get();
        foreach ($product as $va=>$key) {
            $sales = SalesItems::where('user_id', Auth::getUser()->id)->where('product_id', $key->product_id)->sum('qty');
            $key->avilable_qty =  $sales - customerTape::where('product_id', $key->product_id)->where('user_id', $key->user_id)->sum('qty');

        }
        //return $product;
        return view('customer.edit')->with(compact('data','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $validatedData = $request->validate([
                    'date' => 'required',
                    'vehicle_no' => 'required',
                    'vehicle_year'  => 'required',
                    'class_no' =>  'required',
                    'engine_no' =>  'required',
                    'vehicle_make' =>  'required',
                    'vehicle_model' =>  'required',
                    'owner_name' => 'required',
                    'phone' => 'required',
                    'address' => 'required',
                    'rto_id' => 'required',
                    'product.*' => 'required',
                    // 'front_image' => 'required',
                    // 'left_image' => 'required',
                    // 'right_image' => 'required',
                    // 'back_image' => 'required',
                 ]
             ); 
            $data = $request->all();

                $image = [];
            if(!isset($request->frontUploadedName )) {
                $validatedData = $request->validate([
                    'front_image' => 'required',
                ]); 
               // return $request;
                $fileName = "FR".time().'.'.$request->front_image->extension();  
                $request->front_image->move(public_path('uploads/customer'), $fileName);
                $image['front_image'] =  $fileName;
            } 
            if(!isset($request->backUploadedName )) {
                $validatedData = $request->validate([
                    'back_image' => 'required',
                ]); 
               // return $request;
                $fileName = "BR".time().'.'.$request->back_image->extension();  
                $request->back_image->move(public_path('uploads/customer'), $fileName);
                $image['back_image'] =  $fileName;
            } 
            if(!isset($request->leftUploadedName )) {
                $validatedData = $request->validate([
                    'left_image' => 'required',
                ]); 
               // return $request;
                $fileName = "LR".time().'.'.$request->left_image->extension();  
                $request->left_image->move(public_path('uploads/customer'), $fileName);
                $image['left_image'] =  $fileName;
            } 
            if(!isset($request->rightUploadedName )) {
                $validatedData = $request->validate([
                    'right_image' => 'required',
                ]); 
               // return $request;
                $fileName = "RR".time().'.'.$request->right_image->extension();  
                $request->right_image->move(public_path('uploads/customer'), $fileName);
                $image['right_image'] =  $fileName;
            } 
            if(count($image) >0 ) {
                customerImage::where('customer_id', $id)->update($image);
            }
            $customer = array();
            $customer['date'] = $data['date'];
            $customer['vehicle_no'] = $data['vehicle_no'];
            $customer['vehicle_year'] = $data['vehicle_year'];
            $customer['class_no'] = $data['class_no'];
            $customer['engine_no'] = $data['engine_no'];
            $customer['vehicle_make'] = $data['vehicle_make'];
            $customer['vehicle_model'] = $data['vehicle_model'];
            $customer['owner_name'] = $data['owner_name'];
            $customer['phone'] = $data['phone'];
            $customer['address'] = $data['address'];
            $customer['rto_id'] = $data['rto_id'];
            $customer['class_3'] = 1;
            $customer['class_4'] = 1;
            $customer['user_id'] = Auth::getUser()->id;
            $customer['created_at'] = date('Y-m-d H:i:s');
            $customer['updated_at'] = date('Y-m-d H:i:s');
            //return $customer;
            customerForm::where('id', $id)->update($customer);


            customerTape::where('customer_id', $id)->delete();
            foreach($data['product'] as $va=>$key) {
                $tape = array();
                $tape['customer_id'] = $id;
                $tape['product_id'] = $key;
                $tape['user_id'] = Auth::getUser()->id;
                $tape['qty'] = $data['quantity'][$va];
                $tape['created_at'] = date('Y-m-d H:i:s');
                $tape['updated_at'] = date('Y-m-d H:i:s');
                customerTape::insert($tape);
            }
            return redirect('customer');
            // $image = [];
            // $fileName = "FR".time().'.'.$request->front_image->extension();  
            // $request->front_image->move(public_path('uploads/customer'), $fileName);
            // $image['front_image'] =  $fileName;

            // $fileName = "LR".time().'.'.$request->left_image->extension();  
            // $request->left_image->move(public_path('uploads/customer'), $fileName);
            // $image['left_image'] =  $fileName;

            // $fileName = "RR".time().'.'.$request->right_image->extension();  
            // $request->right_image->move(public_path('uploads/customer'), $fileName);
            // $image['right_image'] =  $fileName;

            // $fileName = "BR".time().'.'.$request->back_image->extension();  
            // $request->back_image->move(public_path('uploads/customer'), $fileName);

            // $image['back_image'] =  $fileName;
            // $image['customer_id'] = $insert;
            // $image['created_at'] = date('Y-m-d H:i:s');
            // $image['updated_at'] = date('Y-m-d H:i:s');
            // customerImage::insert($image);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        customerForm::where('id', $id)->delete();
        return redirect('customer');
    }
    public function statusUpdate(Request $request)
    {
        customerForm::where('id', $request->customer_id)->update(['status'=>$request->status ]);
        return redirect('customer');
    }
}
