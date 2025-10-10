@extends('dashboard.appLayout')

@section('pageTitle')
Show User
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
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-header">
                <div class="row">
                    <div class="col-md-8 card_title_part">
                        <i class="fab fa-gg-circle"></i>View User Information
                    </div>  
                    <div class="col-md-4 card_button_part">
                        <a href="{{ route('admin.alluser') }}" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All User</a>
                    </div>  
                </div>
                </div>
                <div class="card-body">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <table class="table table-bordered table-striped table-hover custom_view_table">
                            <tr>
                            <td>Income Category Name</td>  
                            <td>:</td>  
                            <td>{{ $income_categories->incate_name }}</td>  
                            </tr>
                            <tr>
                            <td>Remarks</td>  
                            <td>:</td>  
                            <td>{{ $income_categories->incate_remarks }}</td>  
                            </tr>
                            <tr>
                            <td>Income Category Creator</td>  
                            <td>:</td>  
                            <td>{{ $creator ? $creator->name : 'unknown' }}</td>  
                            </tr>
                            <tr>
                            <td>Income Category Editor</td>  
                            <td>:</td>  
                            <td>raseldevs</td>  
                            </tr>
                            
                            
                        </table>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                </div>
                <div class="card-footer">
                <div class="btn-group" role="group" aria-label="Button group">
                    <button type="button" class="btn btn-sm btn-dark">Print</button>
                    <button type="button" class="btn btn-sm btn-secondary">PDF</button>
                    <button type="button" class="btn btn-sm btn-dark">Excel</button>
                </div>
                </div>  
            </div>
        </div>
    </div>
@endsection