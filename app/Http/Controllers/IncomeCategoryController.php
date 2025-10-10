<?php

namespace App\Http\Controllers;

use App\Models\User;
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

    public function index(){

        $income_categories =  IncomeCategory::latest()->paginate(5);

        return view('income.category.category-index',compact('income_categories'));
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

        flash()->success('Income Category created successfully!');
        return redirect()->route('admin.IncomeCategory.index');
    }
   
       

    public function edit(){
        return view('income.category.edituser');
    }


    public function show($id){
        $income_categories = IncomeCategory::where('incate_id','=',$id)->where('incate_status','=',1)->firstOrFail();
        
        $creator = User::find($income_categories->incate_creator);

        $editor = User::find($income_categories->incate_editor);

        return view('income.category.showuser',compact('income_categories', 'creator', 'editor'));
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
    public function destroy(){
        // return view('income.category.deleteuser');
    }
}
