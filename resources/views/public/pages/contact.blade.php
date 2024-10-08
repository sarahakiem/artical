@extends('public.layouts.home')
@push('pagetitle')
    Contact Us 
@endpush
@section('content')
                                    <li class="breadcrumb-item active" aria-current="page">Contact Form</li>
                                </ol>
                            </nav>

                            <h2 class="text-white">Contact Form</h2>
                        </div>

                    </div>
                </div>
            </header>

            <section class="section-padding section-bg">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <h3 class="mb-4 pb-2">We'd love to hear from you</h3>
                        </div>

                        <div class="col-lg-6 col-12">

                        @if(session('success'))
                        <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="successModalLabel">Message Sent</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        {{ session('success') }}
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    @endif

                            <form action="{{route('message.store')}}" method="post" class="custom-form contact-form" role="form">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-floating">
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Name" required="">

                                            <label for="floatingInput">Name</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-floating">
                                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required="">

                                            <label for="floatingInput">Email address</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-12">
                                        <div class="form-floating">
                                            <input type="text" name="subject" id="name" class="form-control" placeholder="Name" required="">

                                            <label for="floatingInput">Subject</label>
                                        </div>

                                        <div class="form-floating">
                                            <textarea class="form-control" id="message" name="message" placeholder="Tell me about the project"></textarea>

                                            <label for="floatingTextarea">Tell me about the project</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-12 ms-auto">
                                        <button type="submit" class="form-control">Submit</button>
                                    </div>

                                </div>
                            </form>
                        </div>

                        <div class="col-lg-5 col-12 mx-auto mt-5 mt-lg-0">
                            <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2595.065641062665!2d-122.4230416990949!3d37.80335401520422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858127459fabad%3A0x808ba520e5e9edb7!2sFrancisco%20Park!5e1!3m2!1sen!2sth!4v1684340239744!5m2!1sen!2sth" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                            <h5 class="mt-4 mb-2">Topic Listing Center</h5>

                            <p>Bay St &amp;, Larkin St, San Francisco, CA 94109, United States</p>
                        </div>

                    </div>
                </div>
            </section>
        </main>

        @endsection
