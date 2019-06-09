<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
use DB;
 
class ProductsDb extends Model
{

	public function getProducts(){
		$query_status = DB::table('product_details')->select('*')->paginate(9, ['*'], 'page');

		if(count($query_status) > 0){
			return $query_status;
		}else{
			$query_status = '';
			return $query_status;
		}
	}

	public function getProductCategory(){	
		$query_status = DB::table('product_details')->select('product_category')->distinct()->get();
		return $query_status;
	}



	public function getProductsByCategory($category){	
		$query_status = DB::table('product_details')->select('*')->where('product_category', $category)->paginate(9, ['*'], 'page');
		
		if(count($query_status) > 0){
			return $query_status;
		}else{
			$query_status = '';
			return $query_status;
		}
	}

	public function getProductSize($product_category = ''){	

		if($product_category !== ''){
			$query_status = DB::table('product_details')->select('product_size')->where('product_category', $product_category)->distinct()->get();
		}else{
			$query_status = DB::table('product_details')->select('product_size')->distinct()->get();
		}
		
		return $query_status;
	}

	public function getProductColor($product_category = ''){	
		if($product_category !== ''){
			$query_status = DB::table('product_details')->select('product_color')->where('product_category', $product_category)->distinct()->get();
		}else{
			$query_status = DB::table('product_details')->select('product_color')->distinct()->get();
		}
		
		return $query_status;
	}

	public function getProductBrand($product_category = ''){	
		if($product_category !== ''){
			$query_status = DB::table('product_details')->select('product_brand')->where('product_category', $product_category)->distinct()->get();
		}else{
			$query_status = DB::table('product_details')->select('product_brand')->distinct()->get();
		}
		
		return $query_status;
	}

	public function getProductMaxPrice($product_category = ''){	
		if($product_category !== ''){
			$query_status = DB::table('product_details')->select('product_price')->where('product_category', $product_category)->max('product_price');
		}else{
			$query_status = DB::table('product_details')->select('product_price')->max('product_price');
		}
		
		return $query_status;
	}

	public function getProductMinPrice($product_category = ''){	
		if($product_category !== ''){
			$query_status = DB::table('product_details')->select('product_price')->where('product_category', $product_category)->min('product_price');
		}else{
			$query_status = DB::table('product_details')->select('product_price')->min('product_price');
		}
		
		return $query_status;
	}	




	public function getFilteredProducts($request){
		
        $input = $request->all();

        $product_category = $request->input('product_category');
        $order_product_by = $request->input('order_product_by');
        $product_size = $request->input('product_size');           
        $product_color = $request->input('product_color');        
        $product_brand = $request->input('product_brand');      
        $product_max_price  = $request->input('product_max_price');   
		$product_min_price  = $request->input('product_min_price');   
		

		if($order_product_by == '1'){
			$query = DB::table('product_details')->select('*')->orderBy('product_price');
		}elseif($order_product_by == '2'){
			$query = DB::table('product_details')->select('*')->orderBy('product_price', 'desc');
		}else{
			$query = DB::table('product_details')->select('*');
		}

		if( isset($product_category)) {
		    $query->where('product_category', $product_category);
		}

		if (isset($product_size)) {
			$query->whereIn('product_size', $product_size);
		}

		if (isset($product_color)) {
			$query->whereIn('product_color', $product_color);
		}

		if (isset($product_brand)) {
			$query->whereIn('product_brand', $product_brand);
		}


		if (isset($product_max_price)) {
			$query->where('product_price', '<', $product_max_price);
		}

		if (isset($product_min_price)) {
			$query->where('product_price', '>', $product_min_price);
		}		

		$result = $query->paginate(9, ['*'], 'page');;

		// echo "<pre/>";
		// print_r($result);

		if(count($result) > 0){
			return $result;
		}else{
			$result = '';
			return $result;
		}
	}
	
}