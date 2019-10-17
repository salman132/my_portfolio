@extends("layouts.app")


@section('content')

    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Add Services
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('service.store')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Font Awesome HTML</label><br>
                    <input type="text" name="icon" placeholder="Fontawesome Icon" class="form-control" value="{{old('icon')}}">

                </div>
                <div class="form-group">
                    <label>Title</label><br>
                    <input type="text" name="title" placeholder="Title" class="form-control" value="{{old('title')}}">
                </div>

                <div class="form-group">
                    <label>Description</label><br>
                    <textarea name="description" id="summernote" cols="30" rows="10">{{old('description')}}</textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="ADD" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>

    @if($services->count()>0)

    <div class="py-3">
        <div class="card">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Icon</th>
                        <th>Title</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($services as $service)
                        <tr>
                            <td>{!! $service->icon !!}</td>
                            <td>{{$service->title}}</td>
                            <td><a href="{{route('service.show',['id'=>$service->id])}}" class="btn btn-primary">Edit</a></td>
                            <td><a href="{{route('service.delete',['id'=>$service->id])}}" class="btn btn-danger">Delete</a></td>
                        </tr>

                        @endforeach
                </tbody>
            </table>
        </div>
    </div>


    @endif

    @endsection