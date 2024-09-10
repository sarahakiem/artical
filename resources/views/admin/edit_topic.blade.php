@extends('layouts.admin_temp')

@section('admin_content')
<div class="container my-5">
    <div class="mx-2">
        <h2 class="fw-bold fs-2 mb-5 pb-2">Edit Topic</h2>
        <form action="{{ route('topic.update', $topic->id) }}" method="POST" class="px-md-5" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group mb-3 row">
                <label for="title" class="form-label col-md-2 fw-bold text-md-end">Topic Title:</label>
                <div class="col-md-10">
                    <input type="text" id="title" placeholder="e.g. Design Patterns" class="form-control py-2" name="title" value="{{ old('title', $topic->title) }}"/>
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group mb-3 row">
                <label for="category_id" class="form-label col-md-2 fw-bold text-md-end">Category:</label>
                <div class="col-md-10">
                    <select name="category_id" id="category_id" class="form-control py-1">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @selected(old('category_id', $topic->category_id) == $category->id)>
                                {{ $category->category_name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group mb-3 row">
                <label for="content" class="form-label col-md-2 fw-bold text-md-end">Content:</label>
                <div class="col-md-10">
                    <textarea name="content" id="content" rows="5" class="form-control">{{ old('content', $topic->content) }}</textarea>
                    @error('content')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group mb-3 row">
                <label for="trending" class="form-label col-md-2 fw-bold text-md-end">Trending:</label>
                <div class="col-md-10">
                    <input type="hidden" name="trending" value="0" />
                    <input type="checkbox" id="trending" class="form-check-input" name="trending" @checked(old('trending', $topic->trending)) value="1" />
                    @error('trending')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group mb-3 row">
                <label for="published" class="form-label col-md-2 fw-bold text-md-end">Published:</label>
                <div class="col-md-10">
                    <input type="hidden" name="published" value="0" />
                    <input type="checkbox" id="published" class="form-check-input" name="published" @checked(old('published', $topic->published)) value="1" />
                    @error('published')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <hr>

            <div class="form-group mb-3 row">
                <label for="image" class="form-label col-md-2 fw-bold text-md-end">Image:</label>
                <div class="col-md-10">
                    <input type="file" id="image" name="image" class="form-control" style="padding: 0.7rem; margin-bottom: 10px;" />
                    @error('image')
                        <div class="alert alert-warning">{{ $message }}</div>
                    @enderror

                    @if($topic->image)
                        <img src="{{ asset('assets/images/topics/' . $topic->image) }}" alt="Topic Image" style="width: 10rem;">
                    @endif
                </div>
            </div>

            <div class="text-md-end">
                <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
                    Edit Topic
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
