@extends('layouts.admin')
@section('title')
All posts | {{ $settings['site_name'] }}
@endsection
@section('content')
<div class="content-body">
    @include('admin.alerts.errors')
    @include('admin.alerts.success')
    @include('admin.alerts.warning')
    <!-- Bordered striped start -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">All posts | {{ $settings['site_name'] }}</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <a href="{{ route('trash.index') }}">
                                <button type="button" class="btn grey btn-outline-warning" data-dismiss="modal">Trashed</button>
                            </a>
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>title</th>
                                    <th>published </th>


                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($i=1)
                                @foreach ($posts as $post)
                                <tr>
                                    <th>{{ $i++ }}</th>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->published ? 'publish' : 'unpublish' }}</td>
                                    <td>
                                        <a href="{{ route('posts.edit',['post'=>$post]) }}">
                                            <button type="button" class="btn btn-outline-info  btn-lg" data-toggle="modal" data-backdrop="false" data-target="#info">
                                                Edit
                                            </button>
                                        </a>
                                        </a>
                                        <a>
                                            <button type="button" class="btn btn-outline-danger  btn-lg" data-toggle="modal" data-target="#danger{{ $post->id }}" city-id={{ $post->id }}>
                                                delete
                                            </button>
                                        </a>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <!-- Modal -->
                                                <div class="modal fade text-left" id="danger{{ $post->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-danger white">
                                                                <h4 class="modal-title white" id="myModalLabel10">Delete post {{ $post->title }} </h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h5>Warning before deletion</h5>

                                                                <hr>
                                                                <h5>The entire article will be sent to the recycle bin.</h5>
                                                                <ul>
                                                                    <li>{{ $post->body }}</li>
                                                                </ul>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Cancel</button>
                                                                <form action="{{ route('posts.destroy',['post' => $post->slug]) }}" method="post">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <input type="submit" class="btn btn-outline-danger" value="Confirm deletion">
                                                                    {{-- <button type="submit" class="btn btn-outline-danger">Confirm deletion</button>  --}}
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>


                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bordered striped end -->
</div>
</div>
</div>
</div>
@endsection
