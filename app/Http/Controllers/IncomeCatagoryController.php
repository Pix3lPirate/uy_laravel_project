<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\IncomeCatagory;
use Carbon\Carbon;
use session;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class IncomeCatagoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $allData = IncomeCatagory::where('incate_status',0)->orderby('incate_id','DESC')->get();
        return view('admin.income.catagory.all',compact('allData'));
    }

    public function add(){
        return view('admin.income.catagory.add');
    }

    public function edit(){
        return view('admin.income.catagory.edit');
    }

    public function view(){
        return view('admin.income.catagory.view');
    }

    public function insert(Request $request){
        $this->validate($request,[

        ],[

        ]);

    // $slug = 'IC'. Uniqid(20);

    $slug = str::slug($request['name'], '-');
    $creator = Auth::user()->id;

        IncomeCatagory::insert([
            'incate_name'=>$request['name'],
            'incate_remarks'=>$request['remarks'],
            'incate_creator'=>$creator,
            'incate_slug'=>$slug,
            'created_at'=>carbon::now()->toDateTimeString(),
        ]);

        return view('admin.income.catagory.add');
    }

    public function update(){
        
    }

    public function softdelete(){
        
    }

    public function restore(){
        
    }

    public function delete(){
        
    }
}
