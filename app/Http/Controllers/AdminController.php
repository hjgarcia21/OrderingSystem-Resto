<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function view_category(){

        $data = Category::all();
        return view('admin.food_category',compact('data'));
    }

    public function add_category(Request $request){

       $category = new Category;

       $category->category_name = $request->category;

       $category->save();
      
     

       return redirect()->back();

    }
    public function delete_category($id){
        $data = Category::find($id);

   

        $data->delete();
        return redirect()->back();
    }

    public function edit_category( $id){
        $data = Category::find($id);
        return view('admin.edit_category',compact('data'));
    }

    public function update_category(Request $request, $id){
        $data = Category::find($id);
        $data->category_name = $request->category;
        $data->save();

      
        return redirect('/view_category');

    }

    public function add_food(){
        $category = Category::all();
        return view('admin.add_food',compact('category'));
    }

    public function upload_food(Request $request){

            $data = new Product;
            $data->title = $request->title;
            $data->description = $request->description;
            $data->price = $request->price;
            $data->category = $request->category;

            $image = $request->image;

            if($image){
                $imagename =time().'.'.$image->getClientOriginalExtension();
                $request->image->move('foods', $imagename);

                $data->image =$imagename;
            }

            $data->save();
          
            return redirect()->back();


    }

    public function view_food(){
        $product = Product::all();
        return view('admin.view_food',compact('product'));
    }

    public function delete_food($id){

        $data =Product::find($id);

        $image_path = public_path('foods/'.$data->image);

        if(file_exists($image_path))
        {
            unlink($image_path);
        }

      

        $data->delete();

            return redirect()->back();

    }


    //update status food details

    public function update_food($id){

        $data = Product::find($id);

        $category = Category::all();
        return view('admin.update_food',compact('data','category'));
    }

        //EDIT food

    public function edit_food(Request $request, $id){

        $data = Product::find($id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->category = $request->category;
        $image = $request->image;

        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('foods',$imagename);

            $data->image = $imagename;


        }

        $data->save();

      

        return redirect('/view_food');

    }

    public function food_search(Request $request){

        $search = $request->search;
        $product = Product::where('title','LIKE','%'.$search.'%')->orWhere('category','LIKE','%'.$search.'%')->paginate(3);


        return view('admin.view_food',compact('product'));
    }


    public function view_order(){

        $data = Order::all();

        return view('admin.order',compact('data'));
    }

    public function on_the_way($id){

        $data = Order::find($id);

        $data->status = 'On the way';
        $data->save();
        return redirect('/view_order');
    }

    public function delivered($id){

        $data = Order::find($id);

        $data->status = 'Delivered';
        $data->save();
        return redirect('/view_order');
    }
}

