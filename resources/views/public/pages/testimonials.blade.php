@extends('public.layouts.home')
@push('pagetitle')
    Testimonials 
@endpush
@section('content')

                                    <li class="breadcrumb-item active" aria-current="page">Testimonials</li>
                                </ol>
                            </nav>

                            <h2 class="text-white">Testimonials</h2>
                        </div>

                    </div>
                </div>
            </header>

              <!--what our clint say section-->
              @include('public.includes.testimonial')
                      <!--end testimonial -->


        </main>
        @endsection
