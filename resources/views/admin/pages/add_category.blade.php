@extends('admin.layouts.admin_temp')

  @section('admin_content')
  <div class="container my-5">
    <div class="mx-2">
      <h2 class="fw-bold fs-2 mb-5 pb-2">Add Category</h2>
      <form action="{{route('categories.store')}}" method="post" class="px-md-5">
        @csrf
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Category Name:</label>
          <div class="col-md-10">
            <input type="text" placeholder="e.g. Computer Science" class="form-control py-2" name="category_name" />
          </div>
        </div>
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end" >Published:</label>
          <div class="col-md-10">
            <input type="checkbox" class="form-check-input" style="padding: 0.7rem;"  @checked(old('published')) value="1"   name="published"  />
            @error('published')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
          </div>
        </div>
        <div class="text-md-end">
          <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
            Add Category
          </button>
        </div>
      </form>
    </div>
  </div>
  </main>
 @endsection
