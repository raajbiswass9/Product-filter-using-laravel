<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use View;
use DB;

use App\ProductsDb;

class ProductsController extends Controller
{

    public function get_products(){        
        
        $products_model = new ProductsDb();
        $data = $products_model->getProducts();

        $product_category = $products_model->getProductCategory();
        // $product_size = $products_model->getProductSize();
        // $product_color = $products_model->getProductColor();
        // $product_brand = $products_model->getProductBrand();
        // $product_price = $products_model->getProductPrice();
        
        if($data !== ''){
            return View::make('index')->with('data', $data)->with('product_category', $product_category);
        }else{
            echo "Empty";
        }
    }

    

    public function get_jeans(){

        $category = "Jeans";
        $products_model = new ProductsDb();
        $data = $products_model->getProductsByCategory($category);

        $product_size = $products_model->getProductSize($category);
        $product_color = $products_model->getProductColor($category);
        $product_brand = $products_model->getProductBrand($category);
        $product_max_price = $products_model->getProductMaxPrice($category);
        $product_min_price = $products_model->getProductMinPrice($category);

        
        if($data !== ''){
            return View::make('category')->with('data', $data)->with('product_size', $product_size)->with('product_color', $product_color)->with('product_brand', $product_brand)->with('product_max_price', $product_max_price)->with('product_min_price', $product_min_price)->with('product_category', $category);
        }else{
            echo "Empty";
        }
    }


    public function get_shirts(){

        $category = "Shirts";
        $products_model = new ProductsDb();
        $data = $products_model->getProductsByCategory($category);

        $product_size = $products_model->getProductSize($category);
        $product_color = $products_model->getProductColor($category);
        $product_brand = $products_model->getProductBrand($category);
        $product_max_price = $products_model->getProductMaxPrice($category);
        $product_min_price = $products_model->getProductMinPrice($category);
        
        if($data !== ''){
            return View::make('category')->with('data', $data)->with('product_size', $product_size)->with('product_color', $product_color)->with('product_brand', $product_brand)->with('product_max_price', $product_max_price)->with('product_min_price', $product_min_price)->with('product_category', $category);
        }else{
            echo "Empty";
        }
    }



    public function filter_products(Request $request){

        $input = $request->all();
        $category = $request->input('product_category');

        $selected_size = $request->input('product_size');
        $selected_color = $request->input('product_color');
        $selected_brand = $request->input('product_brand');
        $selected_max_price = $request->input('product_max_price');
        $selected_min_price = $request->input('product_min_price');
        $selected_order = $request->input('order_product_by');
        
        $products_model = new ProductsDb();
        $data = $products_model->getFilteredProducts($request); 

        $product_size = $products_model->getProductSize($category);
        $product_color = $products_model->getProductColor($category);
        $product_brand = $products_model->getProductBrand($category);
        $product_max_price = $products_model->getProductMaxPrice($category);
        $product_min_price = $products_model->getProductMinPrice($category);
       
        if($data !== ''){            
            // echo "<pre/>";
            // print_r($data);
            return View::make('category')->with('data', $data)->with('product_size', $product_size)->with('product_color', $product_color)->with('product_brand', $product_brand)->with('product_max_price', $product_max_price)->with('product_min_price', $product_min_price)->with('product_category', $category)->with('selected_size', $selected_size)->with('selected_color', $selected_color)->with('selected_brand', $selected_brand)->with('selected_max_price', $selected_max_price)->with('selected_min_price', $selected_min_price)->with('selected_order', $selected_order);
        }else{

            return View::make('category')->with('data', $data)->with('product_size', $product_size)->with('product_color', $product_color)->with('product_brand', $product_brand)->with('product_max_price', $product_max_price)->with('product_min_price', $product_min_price)->with('product_category', $category)->with('selected_size', $selected_size)->with('selected_color', $selected_color)->with('selected_brand', $selected_brand)->with('selected_max_price', $selected_max_price)->with('selected_min_price', $selected_min_price)->with('selected_order', $selected_order);
            
        }
    }


}