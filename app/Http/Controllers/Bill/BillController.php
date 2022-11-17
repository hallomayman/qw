<?php

namespace App\Http\Controllers\Bill;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use mysql_xdevapi\Statement;
use Illuminate\Support\Facades\DB;
use App\Models\Jewlery;
class BillController extends Controller
{
    public function create (){
        $itemes=["NAC"=>"Necklace",  "BRA"=>"Bracelets" ,"RIN"=>"Ring" ,"ANK"=>"Anklet" ,"INT"=>"Interlocking earrings"];


        return view('bill.create')->with('itemes',$itemes);
    }

    public function store (Request  $request){
        $price=$request['$price'];
        $weight=$request['$weight'];
        $number=$request['$number'];
        $item=$request['$item'];
       $query ="insert into jewleries(price,weight,number,item) values ($price,'$weight',$number,'$item') ";
        DB::statement($query);
        return redirect('bill/create');
//        $jewlery =new Jewlery();
//        $jewlery->price=$price;
//        $jewlery->weight=$weight;
//        $jewlery->number=$number;
//        $jewlery->item=$item;
//
//        $jewlery->save();




//        //db conction
//        $request="INSERT INTO jewleries(price,weight,number,jewlery_id) VALUES ($price,$weight,$number,$jewlery_id)";
//        //لتنفيذ ال query  _>   بنستخدم db
//        DB::statement($request);
//        return redirect('bill/create');

    }
    //بتجيب كل الداتا
    public  function index(){
        $request="SELECT ";

    }
}
