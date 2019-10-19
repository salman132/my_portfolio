@extends("layouts.app")

@section('content')

    @if($mails->count()==0)

            <div class="text-danger text-center">
                <h4>You haven't Received any email yet. </h4>
            </div>
        @else
        @foreach($mails as $mail)
        <div class="py-4">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        From : {{$mail->email}} ,{{$mail->created_at->diffForHumans()}}
                        <div class="pull-right">
                            @if($mail->read)
                                <a href="{{route('mail.delete',['id'=>$mail->id])}}" class="btn btn-danger">Delete</a>
                                @else
                                <a href="{{route('mail.read',['id'=>$mail->id])}}" class="btn btn-primary">Mark As Read</a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h5>{{$mail->name}}</h5>

                    <div class="form-group">
                        <p>{{$mail->text}}</p>
                    </div>
                </div>
                <div class="card-footer">
                    <form action="{{route('mail.reply')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" readonly="readonly" value="{{$mail->email}}">
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" placeholder="Mail Subject" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea name="text" class="summernote" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Attachments: </label><br>
                            <input type="file" name="file" id="">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach

        {{$mails->links()}}





    @endif

    @endsection