@extends('layouts.admin_temp')

@section('admin_content')
<div class="container my-5">
    <div class="mx-2">
        <div class="row justify-content-between mb-2 pb-2">
            <h2 class="fw-bold fs-2 col-auto">Unread Messages</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-hover table-borderless display" id="_table">
                <thead>
                    <tr>
                        <th scope="col">Created At</th>
                        <th scope="col">Message</th>
                        <th scope="col">Sender</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($unreadMessages as $message)
                    <tr>
                        <th scope="row">{{ $message->created_at->format('d M Y') }}</th>
                        <td><a href="{{ route('message.show', $message->id) }}" class="text-decoration-none text-dark">{{ Str::limit($message->message, 10) }}</a></td>
                        <td>{{ $message->name }}</td>
                        <td class="text-center">
            <form action="{{ route('message.delete', $message->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this topic?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-link p-0">
                    <img src="{{ asset('assests/images/trash-can-svgrepo-com.svg') }}">
                </button>
            </form>
        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <hr>
    <div class="mx-2">
        <div class="row justify-content-between mb-2 pb-2">
            <h2 class="fw-bold fs-2 col-auto">Read Messages</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-hover table-borderless display" id="_table2">
                <thead>
                    <tr>
                        <th scope="col">Created At</th>
                        <th scope="col">Message</th>
                        <th scope="col">Sender</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($readMessages as $message)
                    <tr>
                        <th scope="row">{{ $message->created_at->format('d M Y') }}</th>
                        <td><a href="{{ route('message.show', $message->id) }}" class="text-decoration-none text-dark">{{ Str::limit($message->message, 10) }}</a></td>
                        <td>{{ $message->name }}</td>
                        <td class="text-center">
            <form action="{{ route('message.delete', $message->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this topic?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-link p-0">
                    <img src="{{ asset('assests/images/trash-can-svgrepo-com.svg') }}">
                </button>
            </form>
        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
