@extends('layouts.dashboard')
@section('content')
    <!-- Add Class Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table display data-table text-nowrap">
                    <thead>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Type</th>
                        <th>No of Athletes</th>
                        <th>Location</th>
                        <th>Date</th>
                        <th>status</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach ($assessments as $assessment)
                            <tr>

                                <td class="text-capitalize">{{ $assessment->fullname }}</td>
                                <td class="text-capitalize">{{ $assessment->email }}</td>
                                <td class="text-capitalize">{{ $assessment->phone }}</td>
                                <td class="text-capitalize">{{ $assessment->type }}</td>
                                <td class="text-capitalize">{{ $assessment->no_of_athletes }}</td>
                                <td class="text-capitalize">{{ $assessment->location }}</td>
                                <td class="text-capitalize">{{ $assessment->date }}</td>
                                <td class="text-capitalize">{{ $assessment->status }}</td>

                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <span class="flaticon-more-button-of-three-dots">Action</span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-toggle="modal"
                                                data-target="#statusModal{{ $assessment->id }}"><i class=""></i>Change
                                                status</a>
                                            <a class="dropdown-item" href="update_assessment/{{$assessment->uuid}}"><i class=""></i>View/Edit</a>

                                        </div>
                                    </div>
                                </td>

                                <div class="modal" id="statusModal{{ $assessment->id }}" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Change status</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="{{ url('update_status') }}">
                                                    @csrf
                                                    <div class="form-group">
                                                        <select name="status" class="form-control">
                                                            <option
                                                                {{ $assessment->status === 'inprogress' ? 'selected' : '' }}>
                                                                Inprogress</option>
                                                            <option
                                                                {{ $assessment->status === 'completed' ? 'selected' : '' }}>
                                                                Completed</option>
                                                            <option
                                                                {{ $assessment->status === 'received' ? 'selected' : '' }}>
                                                                Received</option>
                                                        </select>
                                                    </div>

                                                    <input type="hidden" name="id" value="{{ $assessment->id }}" />

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
