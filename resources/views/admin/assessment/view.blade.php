@extends('layouts.dashboard')
@section('content')
    <!-- Add Class Area Start Here -->
    @foreach ($assessment->data as $data)
        <div class="card height-auto">
            <form method="post" action="{{ url('update_assessment') }}">
                @csrf
                <div class="card-body">
                    <div>
                        <h6 class="font-weight-bold">Name:</h6>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <input class="form-control" name="name" value="{{ $data->name }}" />
                        </div>
                    </div>
                    <div>
                        <h6 class="font-weight-bold">Age:</h6>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <input class="form-control" name="age" value="{{ $data->age }}" />
                        </div>
                    </div>

                    <!-- Tab Navigation -->
                    <ul class="nav nav-tabs mt-4" id="myTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active font-weight-bold" id="home-tab" data-toggle="tab"
                                href="#home{{ $data->uuid }}" role="tab" aria-controls="home"
                                aria-selected="true">General Info</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link font-weight-bold" id="profile-tab" data-toggle="tab"
                                href="#profile{{ $data->uuid }}" role="tab" aria-controls="profile"
                                aria-selected="false">Media</a>
                        </li>
                    </ul>

                    <!-- Tab Content -->
                    <div class="tab-content" id="myTabsContent">
                        <!-- General Info Tab -->
                        <div class="tab-pane fade show active pt-5" id="home{{ $data->uuid }}" role="tabpanel"
                            aria-labelledby="home-tab">
                            <div class="row mb-4">
                                @foreach ([
            'injury_history' => 'Injury History',
            'squat_relative_ratio' => 'Squat Relative Ratio',
            'bench_relative_ratio' => 'Bench Relative Ratio',
            'deadlift_relative_ratio' => 'Deadlift Relative Ratio',
            'reverse_lunge_relative_ratio' => 'Reverse Lunge Relative Ratio',
            '10_yard_dash_relative_ratio' => '10 Yard Dash Relative Ratio',
            '60_yard_dash_relative_ratio' => '60 Yard Dash Relative Ratio',
            'mile_time_relative_ratio' => 'Mile Time Relative Ratio',
            'pullup_relative_ratio' => 'Pullup Relative Ratio',
            'pushup_relative_ratio' => 'Pushup Relative Ratio',
            'vertical_jump_relative_ratio' => 'Vertical Jump Relative Ratio',
        ] as $field => $label)
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>{{ $label }}</label>
                                        <textarea class="textarea form-control" name="{{ $field }}" id="{{ $field }}" cols="3"
                                            rows="6">{{ $data->$field }}</textarea>
                                    </div>
                                @endforeach

                                <input type="hidden" name="uuid" value="{{ $data->uuid }}" />
                            </div>

                            <div class="col-12 form-group mg-t-8">
                                <button type="submit"
                                    class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                            </div>
                        </div>
            </form>

            <!-- Media Tab -->
            <div class="tab-pane fade pt-5" id="profile{{ $data->uuid }}" role="tabpanel" aria-labelledby="profile-tab">
                {{-- @if (count($data->media)) --}}
                    <h5>Uploaded files</h5>
                    @foreach ($data->media as $media)
                        <p>{{ $media->path }} | <a href="{{url($media->path)}}" style="cursor:pointer;color:blue">Download</a>
                            | <a href="{{url('delete_file/'.$media->uuid)}}" onclick="return confirm('Are you sure?')" style="cursor:pointer;color:red">Delete</a></p>
                        <hr>
                    @endforeach
                {{-- @endif --}}

                <form action="{{ url('uploadFiles') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h6>Upload Video or Photos (MP4, PDF, JPG, JPEG)</h6>
                    <!-- Single Input for Multiple Files -->
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <input class="form-control" type="file" name="files[]" accept=".mp4,.pdf,.jpg,.jpeg" multiple
                            required />
                    </div>
                    <br><br>
                    <input type="hidden" name="assesment_data_id" value="{{ $data->id }}" />
                    <div class="col-12 form-group mg-t-8">
                        <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Upload</button>
                    </div>
                </form>

            </div>
        </div>

        </div>

        </div>
    @endforeach
@endsection
