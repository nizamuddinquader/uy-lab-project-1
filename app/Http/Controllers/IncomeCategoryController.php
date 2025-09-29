<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\IncomeCategory;
use Illuminate\Support\Facades\Auth;
use Devrabiul\ToastMagic\Facades\ToastMagic;

class IncomeCategoryController extends Controller
{
     public function __construct(){
        $this->middleware('auth');
    }

    public function create(){
        return view('income.category.create-category');
    }

    public function store(Request $request){
        $request->validate([
            'income_category_name' => 'required|max:50|unique:income_categories,incate_name',
            'remarks' => 'nullable|max:200',

        ]);

        $slug = Str::slug($request->income_category_name, '-');
        $incate_creator = Auth::user()->id;


        IncomeCategory::create([
            'incate_name' => $request->income_category_name,
            'incate_remarks' => $request->remarks,
            'incate_slug' => $slug,
            'incate_creator' => $incate_creator,
        ]);

   
       

        return redirect()->route('admin.IncomeCategory.create')->with('success','Income Category Added Successfully');
    }

    public function edit(){
        return view('income.category.edituser');
    }


    public function show(){
        return view('income.category.showuser');
    }

    public function update(){
        // return view('income.category.deleteuser');
    }
    public function softDelete(){
        // return view('income.category.deleteuser');
    }
    public function restore(){
        // return view('income.category.deleteuser');
    }
    public function delete(){
        // return view('income.category.deleteuser');
    }
}
