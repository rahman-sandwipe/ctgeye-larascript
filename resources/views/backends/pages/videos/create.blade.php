@extends('backends.master')
@section('title')
<title>{{ __('Insert Video :: Newscripts') }}</title>
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
                        <a href="{{ route('videos') }}" class="btn btn-warning">{{ __('Back Video') }}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card">
                    <div class="body">
                        <form id="basic-form" method="POST" action="{{ route('create.video') }}" enctype="multipart/form-data">
                            @csrf
                            {{-- headline --}}
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="nameInput">Headline <sup class="text-danger">*</sup></label>
                                    <input type="text" name="headline" id="nameInput" class="form-control @error('headline') is-invalid @enderror" required>
                                    @error('headline') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                                </div>
                            </div>
                            {{-- News Contents --}}
                            <div class="form-group row">
                                <div class="col-md-8">
                                    <label for="content">Embed Code<sup class="text-danger">*</sup></label>
                                    <input type="text" name="embed_code" id="nameInput" class="form-control @error('embed_code') is-invalid @enderror" required>
                                    @error('embed_code') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                                </div>
                            
                                <div class="col-md-4">
                                    <label for="videoType">Video Type</label>
                                    <select class="form-control" id="videoType" name="video_type">
                                        <option value="facebook">Facebook</option>
                                        <option value="youtube">Youtube</option>
                                    </select>
                                </div>
                            </div>
                            
                            
                            {{-- News Intro --}}
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="metaInput">News Intro<sup class="text-danger">*</sup></label>
                                    <textarea class="form-control" name="intro" rows="2"></textarea>
                                </div>
                            </div>
                            
                            {{-- News Auth, Report & Status --}}
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="metaInput">News Auth<sup class="text-danger">*</sup></label>
                                    <select class="form-control @error('user_id') is-invalid @enderror" name="user_id">
                                        <option value="">Chooce One</option>
                                        @foreach ($user as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    @error('user_id') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="metaInput">Report</label>
                                    <input class="form-control @error('report') is-invalid @enderror" name="report">
                                    @error('report') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                                </div>

                                <div class="col-md-4">
                                    <label>Status<sup class="text-danger">*</sup></label>
                                    <br />
                                    <label class="fancy-radio">
                                        <input type="radio" name="status" value="active" checked>
                                        <span><i></i>Active</span>
                                    </label>
                                    <label class="fancy-radio">
                                        <input type="radio" name="status" value="inactive">
                                        <span><i></i>Inactive</span>
                                    </label>
                                </div>
                            </div>
                            

                            {{-- Thumbnail image --}}
                            <div class="form-group row">
                                <div class="col-md-8">
                                    <label for="exampleInputFile">Thumbnail<sup class="text-danger">*</sup></label>
                                    <input type="file" class="form-control" name="thumbnail" id="exampleInputFile" aria-describedby="fileHelp">
                                    <small id="fileHelp" class="form-text text-danger">supported image [jpeg,jpg,png,gif]</small>    
                                </div>
                                <div class="col-md-2">
                                    <label for="captionInput">Caption</label>
                                    <input type="text" class="form-control" name="caption" id="captionInput">
                                </div>
                                <div class="col-md-2">
                                    <img src="https://dummyimage.com/600x400/000/fff" alt="" width="100">
                                </div>
                            </div>
                            
                            
                            {{-- Meta Tags & Meta Desc --}}
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="metaInput">Meta Tags</label>
                                    <textarea class="form-control" name="meta_tags" rows="2"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="metaInput">Meta Desc</label>
                                    <textarea class="form-control" name="meta_desc" rows="2"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="video_linkInput"><i class="fa fa-link border p-2 bg-warning"></i> Video Link</label>
                                    <input type="text" class="form-control" name="video_link" id="video_linkInput">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-warning btn-block">Publish</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection