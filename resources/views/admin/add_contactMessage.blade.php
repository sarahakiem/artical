@extends('layouts.admin_temp')

  @section('admin_content')
  
    <div class="container my-5">
        <div class="mx-2">
            <h2 class="fw-bold fs-2 mb-5 pb-2">Add New Record</h2>
            <form action="{{route('message.store')}}" method="POST" class="px-md-5">
                @csrf

                <!-- Name Input -->
                <div class="form-group mb-3 row">
                    <label for="name" class="form-label col-md-2 fw-bold text-md-end">Name:</label>
                    <div class="col-md-10">
                        <input type="text" name="name" id="name" class="form-control py-2" required>
                    </div>
                </div>
                <div class="form-group mb-3 row">
                    <label for="name" class="form-label col-md-2 fw-bold text-md-end">Email:</label>
                    <div class="col-md-10">
                        <input type="text" name="email" id="name" class="form-control py-2" required>
                    </div>
                </div>
                <div class="form-group mb-3 row">
                    <label for="name" class="form-label col-md-2 fw-bold text-md-end">Subject:</label>
                    <div class="col-md-10">
                        <input type="text" name="subject" id="name" class="form-control py-2" required>
                    </div>
                </div>

                <!-- Message Input -->
                <div class="form-group mb-3 row">
                    <label for="message" class="form-label col-md-2 fw-bold text-md-end">Message:</label>
                    <div class="col-md-10">
                        <textarea name="message" id="message" rows="5" class="form-control" required></textarea>
                    </div>
                </div>

                <!-- Read Checkbox -->
                <div class="form-group mb-3 row">
                    <label for="read" class="form-label col-md-2 fw-bold text-md-end">Read:</label>
                    <div class="col-md-10">
                        <input type="checkbox" name="read" id="read" class="form-check-input" value="1">
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="text-md-end">
                    <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>

    @endsection
