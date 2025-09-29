@extends('dashboard.appLayout')

@section('pageTitle')
User Registration
@endsection

@section('content')
<div class="col-md-10 content">
  <div class="row">
      <div class="col-md-12 breadcumb_part">
          <div class="bread">
              <ul>
                  <li><a href=""><i class="fas fa-home"></i>Home</a></li>
                  <li><a href=""><i class="fas fa-angle-double-right"></i>Dashboard</a></li>                             
              </ul>
          </div>
      </div>
  </div>
  <div class="row">
      <div class="col-md-12 ">
          <form method="" action="">
              <div class="card mb-3">
                <div class="card-header">
                  <div class="row">
                       
                      <div class="col-md-4 card_button_part">
                          <a href="all-user.html" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All User</a>
                      </div>  
                  </div>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                      <label for="income_category_name" class="col-sm-3 col-form-label col_form_label">Income Category Name<span class="req_star">*</span>:</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form_control" id="income_category_name" name="income_category_name">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="remarks" class="col-sm-3 col-form-label col_form_label">Remarks</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control form_control" id="remarks" name="remarks">
                      </div>
                    </div>
                    
                    
                    
                    
                </div>
                
          </form>
      </div>
  </div>
</div>
@endsection