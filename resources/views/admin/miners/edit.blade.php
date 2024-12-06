@extends('layouts.admin')
@section('title')
Edit minser
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
                        <h4 class="card-title" id="basic-layout-form">Edit minser</h4>
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
                            <form class="form" action="{{ route('miners.update',['miner'=> $miner]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="id" value="{{ $miner->id }}">
                                <div class="form-body">
                                    <h4 class="form-section"><i class="ft-tag"></i>Minser information</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1">name</label>
                                                <input type="text" id="name" name="name" value="{{ $miner->name }}" class="form-control" placeholder="name">
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
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <img src="{{ asset('storage/'.$miner->image) }}" alt="miner Image" width="100%" height="100%">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1">video id</label>
                                                <input type="text" id="video" value="{{ $miner->video }}" name="video" class="form-control" placeholder="video">
                                                @error("video")
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1">Hash Rate (TH/s)</label>
                                                <input type="text" id="hash" value="{{ $miner->hash }}" name="hash" class="form-control" placeholder="hash">
                                                @error("hash")
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">

                                                <iframe width="100%" height="360" src="https://www.youtube.com/embed/{{ $miner->video }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                                </iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="projectinput1">Description</label>
                                                <textarea id="description" name="description" class="form-control">{{ $miner->description }}</textarea>
                                                @error("description")
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1">Power Consumption (kW)</label>
                                                <input type="text" id="power" value="{{ $miner->power }}" name="power" class="form-control" placeholder="power">
                                                @error("power")
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1">Hash Rate</label>
                                                <input type="text" id="hash" value="{{ $miner->hash }}" name="hash" class="form-control" placeholder="hash">
                                                @error("hash")
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1">Cooling</label>
                                                <input type="text" id="cooling" value="{{ $miner->cooling }}" name="cooling" class="form-control" placeholder="cooling">
                                                @error("cooling")
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1">Water Temp (°C)</label>
                                                <input type="number" id="temp" value="{{ $miner->temp }}" name="temp" class="form-control" placeholder="temp">
                                                @error("temp")
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1">Average Price ($)</label>
                                                <input type="number" id="price" value="{{ $miner->price }}" name="price" class="form-control" placeholder="price">
                                                @error("price")
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1">Revenue per 10 kWh (BTC)</label>
                                                <input type="text" id="revenue" value="{{ $miner->revenue }}" name="revenue" class="form-control" placeholder="revenue">
                                                @error("revenue")
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1">Weight (kg)</label>
                                                <input type="text" id="weight" value="{{ $miner->weight }}" name="weight" class="form-control" placeholder="weight">
                                                @error("weight")
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1">Buy URL</label>
                                                <input type="url" id="url" value="{{ $miner->url }}" name="url" class="form-control" placeholder="url">
                                                @error("url")
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
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
