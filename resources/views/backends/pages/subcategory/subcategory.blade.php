@extends('backends.master')
@section('title')
<title>{{ __('Subcategory Lists :: Newscripts') }}</title>
@endsection
@section('main_contents')
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">                        
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>{{ __('Sub Category') }}</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route(auth()->user()->type) }}"><i class="icon-home"></i></a></li>                            
                        <li class="breadcrumb-item active">{{ __('Sub Category') }}</li>
                    </ul>
                </div>
                <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                    <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                        <a href="{{ route('create.subcategory') }}" class="btn btn-primary">{{ __('Add New') }}</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    {{-- <div class="header">
                        
                    </div> --}}
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                <thead>
                                    <tr>
                                        <th>SL##</th>
                                        <th>Name</th>
                                        <th>Category Name</th>
                                        <th>Slug</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>SL##</th>
                                        <th>Name</th>
                                        <th>Category Name</th>
                                        <th>Slug</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($subcategory as $item)
                                    <tr class="gradeA">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->category->name }}</td>
                                        <td>{{ $item->slug }}</td>
                                        <td style="width: 8%">
                                            @if ($item->status=='active')
                                                <button type="button" class="btn btn-success"><i class="fa fa-refresh"></i> <span>Active</span></button>
                                            @else
                                                <button type="button" class="btn btn-info"><i class="fa fa-info-circle"></i> <span>Inactive</span></button>
                                            @endif
                                        </td>
                                        <td class="actions" style="width: 15%">
                                            <p class="demo-button">
                                                <a href="{{ route('edit.subcategory',$item->id) }}" class="btn btn-default" title="view"><span class="sr-only">view</span> <i class="fa fa-files-o"></i></a>
                                                <a href="#largeModal" data-toggle="modal" data-target="#largeModal" class="btn btn-default" title="Copy"><span class="sr-only">Copy</span> <i class="fa fa-eye"></i></a>
                                                <a href="{{ route('edit.subcategory',$item->id) }}" class="btn btn-success" title="edit"><span class="sr-only">edit</span> <i class="fa fa-edit"></i></a>
                                                <a href="{{ route('delete.subcategory',$item->id) }}" class="btn btn-danger" title="Delete"><span class="sr-only">Delete</span> <i class="fa fa-trash-o"></i></a>
                                            </p>
                                        </td>
                                    </tr>

                                    <!-- Large Size -->
                                    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    {{-- @php
                                                        $details=App\Models\Category::where('id',$item->id)->first();
                                                    @endphp --}}
                                                    <h4 class="title" id="largeModalLabel">{{ $item->name }}</h4>
                                                </div>
                                                <div class="modal-body">
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary">SAVE CHANGES</button>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection