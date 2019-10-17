@extends("layouts.app")


@section('content')

    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Add Services
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('about.store')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group">
                    <label>Profession</label><br>
                    <input type="text" name="profession" placeholder="Profession" class="form-control" value="{{old('profession')}}">
                </div>
                <div class="form-group">
                    <label>About You</label><br>
                    <textarea name="about" id="summernote" cols="30" rows="10">{{old('about')}}</textarea>
                </div>

                <div class="form-group">
                    <label>Developing Experience</label><br>
                    <input type="number" name="experience"  class="form-control" placeholder="Experience">
                </div>
                <div class="form-group">
                    <label>Profile Picture:</label><br>
                    <input type="file" name="image">
                </div>

                <div class="form-group">
                    <input type="submit" value="ADD" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>

    @if($about !=NULL)

        <div class="py-3">
            <div class="card">
                <table class="table table-hover">
                    <thead>
                    <tr>

                        <th>Title</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>{{$about->profession}}</td>
                            <td><img src="{{asset($about->profile)}}" alt="{{$about->profile}}" height="120px" width="120px"></td>
                            <td><a href="{{route('about.show',['id'=>$about->id])}}" class="btn btn-primary">Edit</a></td>
                            <td><a href="{{route('about.delete',['id'=>$about->id])}}" class="btn btn-danger">Delete</a></td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>


    @endif

@endsection