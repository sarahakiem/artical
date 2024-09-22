@extends('admin.layouts.admin_temp')

  @section('admin_content')

  <div class="container my-5">
    <div class="mx-2">
      <h2 class="fw-bold fs-2 mb-5 pb-2">Edit Category</h2>
      <form action="{{route('categories.update',$category->id)}}" method="POST" class="px-md-5">
        @csrf
        @method('PUT')
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Category Name:</label>
          <div class="col-md-10">
            <input type="text" placeholder="e.g. Computer Science" class="form-control py-2" name="category_name" value="{{ old('category_name', $category->category_name) }}"/>
            @error('category_name')
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
        <div class="text-md-end">
          <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
            Edit Category
          </button>
        </div>
      </form>
    </div>
  </div>
  </main>
  @endsection
