@extends("layouts.app")


@section('content')

    <form action="" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label>Title:</label><br>
            <input type="text" name="title" class="form-control" placeholder="Project Title">
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
            <input type="url" name="url" class="form-control" placeholder="URL">
        </div>
        <div class="form-group">
            <label>Project Image:</label><br>
            <input type="file" name="file">
        </div>
        <div class="form-group">
            <input type="submit" value="ADD" class="btn btn-primary">
        </div>
    </form>

    @endsection