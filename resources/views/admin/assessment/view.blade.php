@extends('layouts.dashboard')
@section('content')
    <!-- Add Class Area Start Here -->
    @foreach ($assessment->data as $data)
        <div class="card height-auto">
            <form method="post" action="{{url('update_assessment')}}">
                @csrf
                <div class="card-body">

                    <div>
                        <h6 class="font-weight-bold">Name:</h6>
                        <div class="col-xl-3 col-lg-6 col-12 form-group"><input class="form-control" name="name"
                                value="{{ $data->name }}" /></div>
                    </div>
                    <div>
                        <h6 class="font-weight-bold">Age:</h6>
                        <div class="col-xl-3 col-lg-6 col-12 form-group"><input class="form-control" name="age"
                                value="{{ $data->age }}" /></div>
                    </div>
                    <ul class="nav nav-tabs mt-4" id="myTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active font-weight-bold" id="home-tab" data-toggle="tab"
                                href="#home{{ $data->uuid }}" role="tab" aria-controls="home"
                                aria-selected="true">Genral Info</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link font-weight-bold" id="profile-tab" data-toggle="tab"
                                href="#profile{{ $data->uuid }}" role="tab" aria-controls="profile"
                                aria-selected="false">Media</a>
                        </li>

                    </ul>

                    <div class="tab-pane fade show active pt-5" id="home{{ $data->uuid }}" role="tabpanel"
                        aria-labelledby="home-tab">

                        <div class="row mb-4">
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Injury History</label>
                                <textarea class="textarea form-control" name="injury_history" id="injury_history" cols="3" rows="6">{{ $data->injury_history }}</textarea>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Squat Relative Ratio</label>
                                <textarea class="textarea form-control" name="squat_relative_ratio" id="squat_relative_ratio" cols="3"
                                    rows="6">{{ $data->squat_relative_ratio }}</textarea>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Bench Relative Ratio</label>
                                <textarea class="textarea form-control" name="bench_relative_ratio" id="bench_relative_ratio" cols="3"
                                    rows="6">{{ $data->bench_relative_ratio }}</textarea>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Deadlift Relative Ratio</label>
                                <textarea class="textarea form-control" name="deadlift_relative_ratio" id="deadlift_relative_ratio" cols="3"
                                    rows="6">{{ $data->deadlift_relative_ratio }}</textarea>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Reverse Lunge Relative Ratio</label>
                                <textarea class="textarea form-control" name="reverse_lunge_relative_ratio" id="reverse_lunge_relative_ratio"
                                    cols="3" rows="6">{{ $data->reverse_lunge_relative_ratio }}</textarea>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>10 yard dash Relative Ratio</label>
                                <textarea class="textarea form-control" name="10_yard_dash_relative_ratio" id="10_yard_dash_relative_ratio"
                                    cols="3" rows="6">{{ $data['10_yard_dash_relative_ratio'] }}</textarea>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>60 yard dash Relative Ratio</label>
                                <textarea class="textarea form-control" name="60_yard_dash_relative_ratio" id="60_yard_dash_relative_ratio"
                                    cols="3" rows="6">{{ $data['60_yard_dash_relative_ratio'] }}</textarea>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Mile Time Relative Ratio</label>
                                <textarea class="textarea form-control" name="mile_time_relative_ratio" id="mile_time_relative_ratio" cols="3"
                                    rows="6">{{ $data->mile_time_relative_ratio }}</textarea>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Pullup Relative Ratio</label>
                                <textarea class="textarea form-control" name="pullup_relative_ratio" id="pullup_relative_ratio" cols="3"
                                    rows="6">{{ $data->pullup_relative_ratio }}</textarea>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Pushup Relative Ratio</label>
                                <textarea class="textarea form-control" name="pushup_relative_ratio" id="pushup_relative_ratio" cols="3"
                                    rows="6">{{ $data->pushup_relative_ratio }}</textarea>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Vertical Jump Relative Ratio</label>
                                <textarea class="textarea form-control" name="vertical_jump_relative_ratio" id="vertical_jump_relative_ratio"
                                    cols="3" rows="6">{{ $data->vertical_jump_relative_ratio }}</textarea>
                            </div>
                            <input type="hidden" name="uuid" value={{ $data->uuid }} />
                        </div>
                        <div class="col-12 form-group mg-t-8">
                            <button type="submit"
                                class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                        </div>

                    </div>
            </form>

            <div class="tab-pane fade pt-5" id="profile{{ $data->uuid }}" role="tabpanel" aria-labelledby="home-tab">
                @foreach ($data->media as $media )
                    {{$media->name}}
                    
                @endforeach
            </div>
        </div>
        </div>
    @endforeach
@endsection
