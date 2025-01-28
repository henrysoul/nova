@extends('layouts.dashboard')
@section('content')
    <!-- Add Class Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="table-responsive">
                <form method="get" action="{{url('users')}}">
                    @csrf
                    <div class="row gutters-8 mg-b-20">
                        <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                            <input type="text" name="params" placeholder="Search" class="form-control">
                        </div>
                        <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                            <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                        </div>
                    </div>
                </form>
                
                <table class="table display data-table text-nowrap">
                    <thead>
                        <th>Name</th>
                        <th>Email</th>
                        
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>

                                <td class="text-capitalize">{{ $user->name }}</td>
                                <td class="">{{ $user->email }}</td>
                               

                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <span class="flaticon-more-button-of-three-dots">Action</span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-toggle="modal"
                                                data-target="#statusModal{{ $user->id }}"><i class=""></i>
                                                View/Edit</a>
                                                <a class="dropdown-item" href="{{url('delete_user/'.$user->uuid)}}"
                                                onclick="return confirm('Are you sure?')"><i class=""></i>
                                                Delete</a>
                                        

                                        </div>
                                    </div>
                                </td>

                                <div class="modal" id="statusModal{{ $user->id }}" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Update user</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="{{ url('update_user') }}">
                                                    @csrf
                                                    <div class="form-group">
                                                        <div>
                                                            <h6 class="font-weight-bold">Name:</h6>
                                                            <div class="col-xl-12 col-lg-12 col-12 form-group">
                                                                <input class="form-control" name="name" value="{{ $user->name }}" />
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <h6 class="font-weight-bold">Email:</h6>
                                                            <div class="col-xl-12 col-lg-12 col-12 form-group">
                                                                <input class="form-control" name="email" value="{{ $user->email }}" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <input type="hidden" name="id" value="{{ $user->id }}" />

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="footer-btn bg-dark-low"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="footer-btn bg-linkedin">Save
                                                    Changes</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
