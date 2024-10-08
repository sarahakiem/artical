@extends('public.layouts.home')
@push('pagetitle')
    Topic details
@endpush
@section('content')
                                    <li class="breadcrumb-item active" aria-current="page">{{$topic->category->category_name}}</li>
                                </ol>
                            </nav>

                            <h2 class="text-white">{{$topic->title}} <br> </h2>

                            <div class="d-flex align-items-center mt-5">
                                <a href="#topics-detail" class="btn custom-btn custom-border-btn smoothscroll me-4">Read More</a>

                                <form action="{{ route('index.bookmark', $topic->id) }}" method="POST" id="bookmark-form">
    @csrf
    <button type="submit" class="custom-icon" style="background: none; border: none;">
        <i class="bi-bookmark"></i>
    </button>
</form>

                            </div>
                        </div>

                        <div class="col-lg-5 col-12">
                            <div class="topics-detail-block bg-white shadow-lg">
                                <img src="{{ asset('assets/images/topics/' . $topic->image) }}" class="topics-detail-block-image img-fluid">
                            </div>
                        </div>

                    </div>
                </div>
            </header>


            <section class="topics-detail-section section-padding" id="topics-detail">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 m-auto">
                            <h3 class="mb-4">{{$topic->title}}</h3>

                            <p>{{$topic->content}}</p>

                            <p><strong>{{$topic->content}}</strong></p>


                            <p>{{$topic->content}}</p>

                            <p><strong></strong>{{$topic->content}}.</p>

                            <p></p>
                        </div>

                    </div>
                </div>
            </section>


            <section class="section-padding section-bg">
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-lg-5 col-12">
                            <img src="images/rear-view-young-college-student.jpg" class="newsletter-image img-fluid" alt="">
                        </div>

                        <div class="col-lg-5 col-12 subscribe-form-wrap d-flex justify-content-center align-items-center">
                            <form class="custom-form subscribe-form" action="#" method="post" role="form">
                                <h4 class="mb-4 pb-2">Get Newsletter</h4>

                                <input type="email" name="subscribe-email" id="subscribe-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email Address" required="">

                                <div class="col-lg-12 col-12">
                                    <button type="submit" class="form-control">Subscribe</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </section>
        </main>



        @endsection
