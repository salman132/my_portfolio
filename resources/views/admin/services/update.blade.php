@extends("layouts.app")

@section('content')

    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Add Services
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('service.update',['id'=>$service->id])}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Font Awesome HTML</label><br>
                    <input type="text" name="icon" placeholder="Fontawesome Icon" class="form-control" value="{{$service->icon}}">

                </div>
                <div class="form-group">
                    <label>Title</label><br>
                    <input type="text" name="title" placeholder="Title" class="form-control" value="{{$service->title}}">
                </div>
                <div class="form-group">
                    <label>Description</label><br>
                    <textarea name="description" id="summernote" cols="30" rows="10">{!! $service->description !!}</textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="UPDATE" class="btn btn-info">
                </div>
            </form>
        </div>
    </div>

    @endsection