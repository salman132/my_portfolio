@extends("layouts.app")


@section('content')
    @if($project == NULL)
            <div class="text-danger">
                <h5>No Records Found</h5>
            </div>
        @else

    <form action="{{route('project.update',['id'=>$project->id])}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label>Title:</label><br>
            <input type="text" name="title" class="form-control" placeholder="Project Title" value="{{$project->title}}">
        </div>
        <div class="form-group">
            <label>Category:</label><br>
            <select name="category" class="form-control">

                @foreach($categories as $category)
                    <option value="{{$category->id}}"
                     @if($project->category_id == $category->id)
                         selected
                    @endif
                  >{{$category->name}}  </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>URL:</label><br>
            <input type="url" name="link" class="form-control" placeholder="URL" value="{{$project->link}}">
        </div>
        <div class="form-group">
            <label>Technologies</label><br>
            <input type="text" name="technology" placeholder="Ex: Laravel,PHP,JavaScript" class="form-control" value="{{$project->technology}}">
        </div>
        <div class="form-group">
            <label>About Project</label><br>
            <textarea name="description" class="form-control summernote" cols="30" rows="10" placeholder="About..">{!! $project->description !!}</textarea>
        </div>
        <div class="form-group">
            <label>Project Image:</label><br>
            <input type="file" name="file">
            <img src="{{asset($project->image)}}" alt="{{$project->title}}" height="120px" width="120px">
        </div>
        <div class="form-group">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>

    @endif




@endsection