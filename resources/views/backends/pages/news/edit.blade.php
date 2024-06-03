@extends('backends.master')
@section('title')
<title>Modify News :: Newscripts</title>
@endsection
@section('main_contents')
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">                        
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>News</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route(auth()->user()->type) }}"><i class="icon-home"></i></a></li>                            
                        <li class="breadcrumb-item active">News</li>
                    </ul>
                </div>
                <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                    <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                        <a href="{{ route('news') }}" class="btn btn-warning">Back News</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card">
                    <div class="body">
                        <form id="basic-form" method="POST" action="{{ route('edit.news',$getData->id) }}" enctype="multipart/form-data">
                            @csrf
                            {{-- headline --}}
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="nameInput">{{ __('Headline') }}</label>
                                    <input type="text" name="headline" value="{{ $getData->headline }}" id="nameInput" class="form-control @error('headline') is-invalid @enderror" required>
                                    @error('headline') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                                </div>
                            </div>
                            

                            {{-- News Intro --}}
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="metaInput">{{ __('News Intro') }}</label>
                                    <textarea class="form-control" name="intro" rows="2">{!! $getData->intro !!}</textarea>
                                </div>
                            </div>
                            {{-- News Contents --}}
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="content">News Content</label>
                                    <textarea class="form-control summernote" name="content">{!! $getData->content !!}</textarea>
                                </div>
                            </div>
                            

                            {{-- Category, Sub category & Special Category --}}
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="metaInput">{{ __('Category') }}</label>
                                    <select class="form-control @error('cat_id') is-invalid @enderror" name="cat_id">
                                        <option value="">Chooce One</option>
                                        @foreach ($category as $item)
                                            <option value="{{ $item->id }}" {{ $getData->cat_id == $item->id ? 'selected':'' }}>{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('cat_id') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="metaInput">{{ __('Sub Category') }}</label>
                                    <select class="form-control @error('subcat_id') is-invalid @enderror" name="subcat_id">
                                        <option value="">Chooce One</option>
                                        @foreach ($subcategory as $item)
                                        <option value="{{ $item->id }}" {{ $getData->subcat_id == $item->id ? 'selected':'' }}>{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('subcat_id') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="s_categoryInput">{{ __('Special News') }}</label>
                                    <select class="form-control" name="s_category">
                                        <option value="">Chooce One</option>
                                        <option value="lead" {{ $getData->s_category == 'lead' ? 'selected':'' }}>Lead News</option>
                                        <option value="specials" {{ $getData->s_category == 'specials' ? 'selected':'' }}>Specials News</option>
                                        <option value="top" {{ $getData->s_category == 'top' ? 'selected':'' }}>Top News</option>
                                    </select>
                                </div>
                            </div>

                            
                            {{-- News Auth, Report & Status --}}
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="metaInput">{{ __('News Auth') }}</label>
                                    <select class="form-control @error('user_id') is-invalid @enderror" name="user_id">
                                        <option value="">Chooce One</option>
                                        @foreach ($user as $item)
                                        <option value="{{ $item->id }}" {{ $getData->user_id == $item->id ? 'selected':'' }}>{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('user_id') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="metaInput">{{ __('Report') }}</label>
                                    <input class="form-control @error('report') is-invalid @enderror" name="report" value="{{ $getData->report }}" required>
                                    @error('report') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                                </div>

                                <div class="col-md-4">
                                    <label>Status</label>
                                    <br />
                                    <label class="fancy-radio">
                                        <input type="radio" name="status" value="active" {{ $getData->status == 'active' ? 'checked':'' }}>
                                        <span><i></i>Active</span>
                                    </label>
                                    <label class="fancy-radio">
                                        <input type="radio" name="status" value="inactive" {{ $getData->status == 'inactive' ? 'checked':'' }}>
                                        <span><i></i>Inactive</span>
                                    </label>
                                </div>
                            </div>
                            

                            {{-- Thumbnail image --}}
                            <div class="form-group row">
                                <div class="col-md-8">
                                    <label for="exampleInputFile">Thumbnail</label>
                                    <input type="file" class="form-control" name="thumbnail" id="exampleInputFile" aria-describedby="fileHelp">
                                    <small id="fileHelp" class="form-text text-danger">supported image [jpeg,jpg,png,gif]</small>
                                </div>
                                <div class="col-md-2">
                                    <label for="captionInput">Caption</label>
                                    <input type="text" class="form-control" name="caption" value="{{ $getData->caption }}" id="captionInput">
                                </div>
                                <div class="col-md-2">
                                    <img src="{{ asset($getData->thumbnail) }}" alt="{{ $getData->caption }}" width="100">
                                </div>
                            </div>
                            
                            
                            {{-- Meta Tags & Meta Desc --}}
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="metaInput">Meta Tags</label>
                                    <textarea class="form-control" name="meta_tags" rows="2">{!! $getData->meta_tags !!}</textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="metaInput">Meta Desc</label>
                                    <textarea class="form-control" name="meta_desc" rows="2">{!! $getData->meta_desc !!}</textarea>
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="linkInput"><i class="fa fa-link border p-2 bg-warning"></i> Video Link</label>
                                    <input type="text" class="form-control" name="video_link" value="{{ $getData->video_link }}" id="linkInput">
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
@section('scripts')
<!-- summernote editor -->
<script src="{{ asset('backends/vendor/summernote/dist/summernote.js') }}"></script>
<!-- Javascript -->
    <script>
        jQuery(document).ready(function() {
    
            $('.summernote').summernote({
                height: 100, // set editor height
                minHeight: null, // set minimum height of editor
                maxHeight: 100, // set maximum height of editor
                focus: false, // set focus to editable area after initializing summernote
                popover: { image: [], link: [], air: [] }
            });
    
            $('.inline-editor').summernote({
                airMode: true
            });
    
        });
    
        window.edit = function() {
                $(".click2edit").summernote()
            },
            
        window.save = function() {
            $(".click2edit").summernote('destroy');
        }
    </script>
    <script>
        $(function() {
            // validation needs name of the element
            $('#food').multiselect();
        
            // initialize after multiselect
            $('#basic-form').parsley();
        });
    </script>
@endsection