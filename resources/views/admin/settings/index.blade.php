@extends('layouts.admin')
@section('title')
All Settings
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
                        <h4 class="card-title" id="basic-layout-form">All Settings</h4>
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
                            <form class="form" action="{{ route('settings.updateAll') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <h4 class="form-section"><i class="ft-tag"></i> Edit Settings</h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="projectinput1">site name</label>
                                                <input type="text" id="site_name" value="{{ $settings['site_name']}}" name="site_name" class="form-control" placeholder="title">
                                                @error("site_name")
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="projectinput1">site description</label>
                                                <input type="text" id="site_description" value="{{ $settings['site_description'] }}" name="site_description" class="form-control" placeholder="site_description">
                                                @error("site_description")
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="projectinput1">contact email</label>
                                            <input type="text" id="contact_email" value="{{ $settings['contact_email'] }}" name="contact_email" class="form-control" placeholder="contact_email">
                                            @error("excerpt")
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="projectinput1">phone number</label>
                                            <input type="text" id="phone_number" value="{{ $settings['phone_number'] }}" name="phone_number" class="form-control" placeholder="phone_number">
                                            @error("phone_number")
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="projectinput1">Type</label>
                                            <input type="text" id="type" value="{{ $settings['type'] }}" name="type" class="form-control" placeholder="type">
                                            @error("type")
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
