@extends('layouts.app')


@section('content')


    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Add Skills
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('skills.store')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Skills: </label><br>
                    <input type="text" name="skills" class="form-control" placeholder="Skill">
                </div>
                <div class="form-group">
                    <label>Skill %</label>
                    <input type="number" name="percent" placeholder="92" class="form-control">
                </div>

                <div class="form-group">
                    <input type="submit" value="ADD" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>

    @if($skills !=NULL)

        <div class="py-4">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Your SKills
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Skills</th>
                                <th>Percent</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($skills as $skill)
                                <tr>
                                    <td>{{$skill->skills}}</td>
                                    <td>{{$skill->percent}}  %</td>
                                    <td><a href="{{route('skill.delete',['id'=>$skill->id])}}" class="btn btn-danger">Delete</a></td>
                                </tr>

                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    @endif



@endsection