@extends("layouts.app")


@section('content')

    <form action="{{route('project.store')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label>Title:</label><br>
            <input type="text" name="title" class="form-control" placeholder="Project Title" value="{{old('title')}}">
        </div>
        <div class="form-group">
            <label>Category:</label><br>
            <select name="category" class="form-control">
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>

                    @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>URL:</label><br>
            <input type="url" name="link" class="form-control" placeholder="URL" value="{{old('link')}}">
        </div>
        <div class="form-group">
            <label>Technologies</label><br>
            <input type="text" name="technology" placeholder="Ex: Laravel,PHP,JavaScript" class="form-control" value="{{old('technology')}}">
        </div>
        <div class="form-group">
            <label>About Project</label><br>
            <textarea name="description" class="form-control summernote" cols="30" rows="10" placeholder="About..">{{old('description')}}</textarea>
        </div>
        <div class="form-group">
            <label>Project Image:</label><br>
            <input type="file" name="file">
        </div>
        <div class="form-group">
            <input type="submit" value="ADD" class="btn btn-primary">
        </div>
    </form>


    <div class="py-3">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    Your Projects
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <tr>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    @if($projects->count() ==0)
                        <tr>
                            <td class="text-danger text-center">No Projects Found</td>
                        </tr>

                        @else
                        @foreach($projects as $project)

                            <tr>
                                <td>{{$project->title}}</td>
                                <td><img src="{{asset($project->image)}}" alt="{{$project->title}}" height="120px" width="120px"></td>
                                <td><a href="{{route('project.edit',['id'=>$project->id])}}" class="btn btn-primary">Edit</a></td>
                                <td><a href="{{route('project.delete',['id'=>$project->id])}}" class="btn btn-danger">Delete</a></td>
                            </tr>
                            @endforeach

                        @endif
                </table>

                {{$projects->links()}}
            </div>
        </div>
    </div>

    @endsection