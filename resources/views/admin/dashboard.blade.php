@extends('layouts.app')

@section('content')



    <div class="card">
        <div class="col-dm-12">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                Unread Mails
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="text-danger">
                                <h1>{{$mails->count()}}</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                Projects Uploaded
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="text-success">
                                <h1>{{$projects->count()}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection