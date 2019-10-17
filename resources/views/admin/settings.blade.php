@extends('layouts.app')

@section('content')

    @if($settings->count()==0)

    <div class="card">
        <div class="card-header">
            <div class="card-title">
                User Settings
            </div>
            <div class="card-body">
                <form action="{{route('settings.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Logo Upload</label><br>
                        <input type="file" name="logo">
                    </div>
                    <div class="form-group">
                        <label>Phone :</label>
                        <input type="text" name="phone" id="" class="form-control" placeholder="Phone" value="{{old('phone')}}">
                    </div>

                    <div class="form-group">
                        <label>Address :</label>
                        <input type="text" name="address" id="" class="form-control" placeholder="Address" value="{{old('address')}}">
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Save" class="btn btn-primary">
                    </div>


                </form>
            </div>
        </div>
    </div>
        @else

        @foreach($settings as $setting)
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        User Settings
                    </div>
                    <div class="card-body">
                        <form action="{{route('settings.update',['id'=>$setting->id])}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>Logo Upload</label><br>
                                <input type="file" name="logo">
                                <img src="{{asset($setting->logo)}}" alt="{{$setting->logo}}" width="120px" height="120px">
                            </div>
                            <div class="form-group">
                                <label>Phone :</label>
                                <input type="text" name="phone" id="" class="form-control" placeholder="Phone" value="{{$setting->phone}}">
                            </div>

                            <div class="form-group">
                                <label>Address :</label>
                                <input type="text" name="address" id="" class="form-control" placeholder="Address" value="{{$setting->address}}">
                            </div>

                            <div class="form-group">
                                <input type="submit" value="UPDATE" class="btn btn-primary">
                            </div>


                        </form>
                    </div>
                </div>
            </div>

            @endforeach

    @endif

    @endsection