@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <div class="row mb-3">
        <div class="col">
            <h1 class="display-4">Messages</h1>
        </div>
        <div class="col-auto">
            <a href="{{ route('messages.create') }}" class="btn btn-primary">Create New Message</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $message)
                <tr>
                    <td>{{ $message->name }}</td>
                    <td>{{ $message->email }}</td>
                    <td>{{ Str::limit($message->message, 50) }}</td>
                    <td>
                        <a href="{{ route('messages.show', $message->id) }}" class="btn btn-sm btn-info">Show</a>
                        <a href="{{ route('messages.edit', $message->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('messages.destroy', $message->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('Are you sure you want to delete this message?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection