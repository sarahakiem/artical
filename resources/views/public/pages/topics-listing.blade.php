@extends('public.layouts.home')
@push('pagetitle')
    Topic-listing 
@endpush
@section('content')


                                    <li class="breadcrumb-item active" aria-current="page">Topics Listing</li>
                                </ol>
                            </nav>

                            <h2 class="text-white">Topics Listing</h2>
                        </div>

                    </div>
                </div>
            </header>
            <section class="section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center">
                            <h3 class="mb-4">Popular Topics</h3>
                        </div>
                        @foreach($topics as $topic)
                        <div class="col-lg-8 col-12 mt-3 mx-auto">
                            <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">

                                <div class="d-flex">
                                    <img src="{{ asset('assets/images/topics/' . $topic->image) }}" class="custom-block-image img-fluid" alt="">

                                    <div class="custom-block-topics-listing-info d-flex">
                                        <div>
                                            <h5 class="mb-2">{{$topic->title}}</h5>

                                            <p class="mb-0">{{Str::limit($topic->content,80)}}</p>

                                            <a href="{{route('index.topic_details',$topic->id)}}" class="btn custom-btn mt-3 mt-lg-4">Learn More</a>
                                        </div>

                                        <span class="badge bg-design rounded-pill ms-auto">{{$topic->views}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <div class="col-lg-12 col-12 center-pagination">
                           {{$topics->links('pagination::bootstrap-4')}}
                        </div>

                    </div>
                </div>
            </section>


            <section class="section-padding section-bg">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <h3 class="mb-4">Trending Topics</h3>
                        </div>

                        @foreach($trendingTopics as $topic)
                        <div class="col-lg-6 col-md-6 col-12 mt-3 mb-4 mb-lg-0">
                            <div class="custom-block bg-white shadow-lg">
                                <a href="{{route('index.topic_details',$topic->id)}}">
                                    <div class="d-flex">
                                        <div>
                                            <h5 class="mb-2">{{$topic->title}}</h5>

                                            <p class="mb-0">{{Str::limit($topic->content,100)}}</p>
                                        </div>

                                        <span class="badge bg-finance rounded-pill ms-auto">{{$topic->views}}</span>
                                    </div>

                                    <img src="{{ asset('assets/images/topics/' . $topic->image) }}" class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </main>

        @endsection
