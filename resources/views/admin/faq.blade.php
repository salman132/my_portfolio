@extends('layouts.app')

@section('content')
    
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Add FAQ
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('faq.store')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Question:</label><br>
                    <input type="text" name="question" placeholder="Question" class="form-control">
                </div>
                <div class="form-group">
                    <label>Answer</label><br>
                    <input type="text" name="answer" placeholder="Answer" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" value="ADD" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>

    @if($faqs != NULL)
        <div class="py-5">

        @foreach($faqs as $faq)
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <a href="{{route('faq.destroy',['id'=>$faq->id])}}" class="text-danger">Delete</a>
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                {{$faq->question}}
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            {{$faq->answer}}
                        </div>
                    </div>
                </div>

            </div>

            @endforeach

        </div>

    @endif
    
    @endsection



