@extends('dashboard.appLayout')

@section('pageTitle')
Category Index
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
                        <i class="fab fa-gg-circle"></i>All Category Information
                    </div>  
                    <div class="col-md-4 card_button_part">
                        <a href="{{ route('admin.IncomeCategory.create') }}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i>Add Category</a>
                    </div>  
                </div>
                </div>
                <div class="card-body">
                <table class="table table-bordered table-striped table-hover custom_table">
                    <thead class="table-dark">
                    <tr>
                        <th>incate_id</th>
                        <th>Incate name</th>
                        <th>Incate remarks</th>
                        <th>Incate creator</th>
                        <th>Incate editor</th>
                        <th>Incate slug</th>
                        <th>Incate status</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($income_categories as $income_category)
                    <tr>
                        <td>{{ $income_category->incate_id }}</td>
                        <td>{{ $income_category->incate_name }}</td>
                        <td>{{ $income_category->incate_remarks }}</td>
                        <td>{{ $income_category->incate_creator }}</td>
                        <td>{{ $income_category->incate_editor }}</td>
                        <td>{{ $income_category->incate_slug }}</td>
                        <td>{{ $income_category->incate_status }}</td>
                        <td class="btn_group_manage text-center">
                            <a href="{{ route('admin.income.category.edit', $income_category->incate_id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="{{ route('admin.income.category.show', $income_category->incate_id) }}" class="btn btn-sm btn-success">Show</a>

                            <form action="{{ route('admin.income.category.destroy', $income_category->incate_id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                    <i class="fas fa-trash pe-2"></i>Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    
                    </tbody>
                </table>
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

    <div class=" mt-4">
        {{ $income_categories->links('pagination::bootstrap-5') }}
    </div>


</div>
@endsection