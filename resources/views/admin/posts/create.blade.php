@extends('layouts.admin')
@section('title')
Add Post
@endsection
@section('content')
<div class="content-body">
    @include('admin.alerts.errors')
    @include('admin.alerts.success')
    @include('admin.alerts.warning')
    <!-- Basic form layout section start -->
    <section id="basic-form-layouts">
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="basic-layout-form">Add Post</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <form class="form" action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id">
                                <div class="form-body">
                                    <h4 class="form-section"><i class="ft-tag"></i> Post information</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1">title</label>
                                                <input type="text" id="title" name="title" class="form-control" placeholder="title">
                                                @error("name")
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1">image</label>
                                                <input type="file" id="image" name="image" class="form-control" placeholder="image">
                                                @error("body")
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="projectinput1">excerpt</label>
                                            <textarea id="excerpt" name="excerpt" placeholder="excerpt" class="form-control"> </textarea>
                                            @error("excerpt")
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="projectinput1">body</label>
                                            <textarea id="body" name="body" placeholder="body" class="form-control"> </textarea>
                                            @error("body")
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1">Published ?</label>
                                            <select class="select2 form-control" id="location2" name="published" required>
                                                <option value='1'>Publish</option>
                                                <option value='0'>Unpublish</option>
                                            </select>
                                            @error("published")
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1">published at</label>
                                            <input type="date" value="{{ now()->format('Y-m-d') }}" id="published_at" name="published_at" class="form-control" placeholder="published_at">
                                            @error("published_at")
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="projectinput1">categories</label>

                                            <select class="select2 form-control" id="location2" multiple="multiple" name="categories[]" required>
                                                @foreach ($categories as $Post)
                                                <option value="{{ $Post->id }}">{{ $Post->name }}</option>
                                                @endforeach
                                            </select>
                                            @error("categories")
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">
                                <i class="la la-check-square-o"></i> Save
                            </button>
                            <a href="{{  route('categories.index') }}"><button type="button" class="btn btn-warning mr-1">
                                    <i class="ft-x"></i> Cancel
                                </button></a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
<!-- // Basic form layout section end -->
</div>
</div>
</div>
</div>
@endsection
