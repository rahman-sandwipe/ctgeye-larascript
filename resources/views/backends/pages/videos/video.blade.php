@extends('backends.master')
@section('title')
<title>{{ __('Video List :: Newscripts') }}</title>
@endsection
@section('main_contents')
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">                        
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>{{ __('Video') }}</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route(auth()->user()->type) }}"><i class="icon-home"></i></a></li>                            
                        <li class="breadcrumb-item active">{{ __('Video') }}</li>
                    </ul>
                </div>
                <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                    <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                        <a href="{{ route('create.video') }}" class="btn btn-primary">{{ __('Add New') }}</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                <thead>
                                    <tr>
                                        <th>SL##</th>
                                        <th>Headline</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>SL##</th>
                                        <th>Headline</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($videos as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <ul class="row">
                                                <div class="col-2">
                                                    <div class="avatar">
                                                        <a href="javascript:void(0);">
                                                            <img src="{{ asset($item->thumbnail) }}" alt="{{ $item->caption }}" width="120" class="rounded">
                                                        </a>
                                                    </div>                                
                                                </div>
                                                <div class="col-10">
                                                    <div class="">
                                                        <h6 class="c_name">{{ $item->headline }}</h6>
                                                        <p class="c_msg m-b-0">Auth: {{ $item->user->name }}</p>
                                                        <div>
                                                            @if ($item->status=='active')
                                                            <div class="badge badge-success"><i class="fa fa-refresh"></i> Active</div>
                                                            @else
                                                            <div class="badge badge-danger"><i class="fa fa-info-circle"></i> Inactive</div>
                                                            @endif
                                                            <small class="comment-date float-sm-right">
                                                                Created Time: {{ $item->created_at->format('d M Y, H:i:s')}}
                                                            </small>
                                                            
                                                            @if ($item->video_type=='facebook')
                                                            <div class="badge badge-success"><i class="fa fa-refresh"></i>FaceBook</div>
                                                            @else
                                                            <div class="badge badge-danger"><i class="fa fa-info-circle"></i>Youtube</div>
                                                            @endif
                                                            <small class="comment-date float-sm-right">
                                                                Updated Time: {{ $item->updated_at->format('d M Y, H:i:s')}}
                                                            </small>
                                                        </div>        
                                                    </div>                                
                                                </div>
                                            </u>
                                        </td>
                                        <td class="actions" style="width: 15%">
                                            <p class="demo-button">
                                                @if ($item->status=='active')
                                                <a href="{{ route('status.video',$item->id) }}" class="btn btn-danger" title="Active"><i class="fa fa-eye-slash"></i></a>
                                                @else
                                                <a href="{{ route('status.video',$item->id) }}" class="btn btn-success" title="Inactive"><i class="fa fa-eye"></i></a>
                                                @endif
                                                {{-- <a href="#largeModal" data-toggle="modal" data-target="#largeModal" class="btn btn-default" title="Copy"><span class="sr-only">Copy</span> <i class="fa fa-eye"></i></a> --}}
                                                <a href="{{ route('edit.video',$item->id) }}" class="btn btn-success" title="edit"><span class="sr-only">edit</span> <i class="fa fa-edit"></i></a>
                                                <a href="{{ route('delete.video',$item->id) }}" class="btn btn-danger" title="Delete"><span class="sr-only">Delete</span> <i class="fa fa-trash-o"></i></a>
                                            </p>
                                        </td>
                                    </tr>

                                    <!-- Large Size -->
                                    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
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