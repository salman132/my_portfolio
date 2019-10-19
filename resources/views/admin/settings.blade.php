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

    <div class="py-5">
       <div class="card">
           <div class="card-header">
               <div class="card-title">
                   Add Category
               </div>
           </div>
           <div class="card-body">
               <form action="{{route('category.store')}}" method="post">
                   {{csrf_field()}}
                   <div class="form-group">
                       <label>Category Name</label>
                       <input type="text" name="category"  class="form-control" placeholder="Category Name">
                   </div>
                   <div class="form-group">
                       <input type="submit" value="Add" class="btn btn-primary">
                   </div>
               </form>
           </div>
       </div>
    </div>

    <div class="py-3">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    Categories List
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <tr>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    @if($categories->count()==0)

                        <tr class="text-danger text-center">
                            <td>No Categories Found Yet</td>
                        </tr>
                        @else

                        @foreach($categories as $category)

                            <tr>
                                <td>{{$category->name}}</td>
                                <td><a href="{{route('category.delete',['id'=>$category->id])}}" class="btn btn-danger">Delete</a></td>
                            </tr>
                            @endforeach

                        @endif
                </table>
            </div>
        </div>
    </div>

    @endsection