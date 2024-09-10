@extends('layouts.admin_temp')

  @section('admin_content')
    <div class="container my-5">
        <div class="mx-2">
            <div class="row justify-content-between mb-2 pb-2">
                <h2 class="fw-bold fs-2 col-auto">All Testimonials</h2>
                <a href="{{route('testimonial.create')}}" class="btn btn-link  link-dark fw-semibold col-auto me-3">➕Add new testimonial</a>
            </div>
            <div class="table-responsive">
                <table class="table table-hover display" id="_table">
                    <thead>
                        <tr>
                            <th scope="col">Created At</th>
                            <th scope="col">Name</th>
                            <th scope="col">Content</th>
                            <th scope="col">Published</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($testimonials as $testimonial)
                        <tr>
                            <th scope="row">{{ $testimonial->created_at ? $testimonial->created_at ->format('d M Y') : 'Not Published' }}</th>
                            <td><a class="text-decoration-none text-dark" href="{{ route('testimonial.show', $testimonial->id) }}">{{ $testimonial->name }}</a></td>
                            <td>{{ Str::limit($testimonial->content, 10) }}</td>
                            <td>{{ $testimonial->published ? 'Yes' : 'No' }}</td>
                            <td class="text-center"><a class="text-decoration-none text-dark" href="{{ route('testimonial.edit', $testimonial->id) }}">
                <img src="{{ asset('assests/images/edit-svgrepo-com.svg') }}">
            </a></td>
                            <td class="text-center"><form action="{{ route('testimonial.delete', $testimonial->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this topic?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-link p-0">
                    <img src="{{ asset('assests/images/trash-can-svgrepo-com.svg') }}">
                </button>
            </form></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection