@extends('admin.layouts.admin_temp')

@section('admin_content')

<div class="container my-5">
    <div class="mx-2">
        <div class="p-1">
            <div class="container-fluid g-0 pb-5 px-lg-5 px-md-3 px-1">
                <div class="mx-auto " style="max-width: 1225px">
                    <article class="mx-md-4 ">
                        <h2 class="fs-1 py-4">{{$message->subject}}</h2>
                        <p class="fw-bold"><small>From: {{$message->name}}, {{$message->email}}</small></p>
                        <p>{{$message->message}}</p>

                        @if($message->read == 0)
                            <form action="{{ route('message.markAsRead', $message->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-primary">Mark as Read</button>
                            </form>
                        @else
                            <p class="text-success">This message has been marked as read.</p>
                        @endif

                        <div class="text-md-end">
                            <a class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5" href="{{ route('message.index') }}">
                                Back to All Messages
                            </a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
