@extends('layouts.admin')
@section('title')
All miners
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
                    <h4 class="card-title">All miners </h4>
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
                                    <th>name</th>
                                    <th>hash</th>
                                    <th>price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($i=1)
                                @foreach ($miners as $miner)
                                <tr>
                                    <th>{{ $i++ }}</th>
                                    <td>{{ $miner->name }}</td>
                                    <td>{{ $miner->hash }}</td>
                                    <td>{{ $miner->price }}</td>
                                    <td>
                                        <a href="{{ route('miners.edit',['miner'=>$miner]) }}">
                                            <button type="button" class="btn btn-outline-info  btn-lg" data-toggle="modal" data-backdrop="false" data-target="#info">
                                                Edit
                                            </button>
                                        </a>
                                        <a>
                                            <button type="button" class="btn btn-outline-danger  btn-lg" data-toggle="modal" data-target="#danger{{ $miner->id }}" city-id={{ $miner->id }}>
                                                delete
                                            </button>
                                        </a>
                                    </td>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <!-- Modal -->
                                            <div class="modal fade text-left" id="danger{{ $miner->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-danger white">
                                                            <h4 class="modal-title white" id="myModalLabel10">Delete miner {{ $miner->name }} </h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Warning before deletion</h5>

                                                            <hr>
                                                            <h5>The entire Miner will be sent to the recycle bin.</h5>
                                                            <ul>
                                                                <li>{{ $miner->name }}nryr ht </li>
                                                            </ul>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Cancel</button>
                                                            <form action="{{ route('miners.destroy',['miner' => $miner]) }}" method="post">
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