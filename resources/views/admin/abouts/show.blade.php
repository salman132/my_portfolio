@extends("layouts.app")


@section('content')

    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Add Services
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('about.update',['id'=>$about->id])}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group">
                    <label>Profession</label><br>
                    <input type="text" name="profession" placeholder="Profession" class="form-control" value="{{$about->profession}}">
                </div>
                <div class="form-group">
                    <label>About You</label><br>
                    <textarea name="about" id="summernote" cols="30" rows="10">{!! $about->about_me !!}</textarea>
                </div>

                <div class="form-group">
                    <label>Developing Experience</label><br>
                    <input type="number" name="experience"  class="form-control" placeholder="Experience" value="{{$about->experience}}">
                </div>
                <div class="form-group">
                    <label>Profile Picture:</label><br>
                    <input type="file" name="image">
                    <img src="{{asset($about->profile)}}" alt="{{$about->profile}}" height="120px" width="120px">
                </div>
                <div class="form-group">
                    <input type="submit" value="Update" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>


    @stop