<section class="section-padding" id="section_5">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h2 class="mb-4">What Our clients Says?</h2>
                    </div>
                </div>
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
    @foreach($testimonial as $testimoni => $testi)
        <div class="carousel-item {{ $testimoni == 0 ? 'active' : '' }}">
            <div class="row mx-md-5">
                <div class="col-md-4 testimonials">
                    <img class="d-block rounded-3" src="{{ asset('assets/images/testimonials/'.$testi->image) }}" alt="Slide {{$testimoni + 1}}">
                </div>
                <div class="col-md-8 px-md-5 d-flex flex-column justify-content-center">
                    <h3>{{ $testi->name }}<br><strong class="date">{{ $testi->created_at->format('d/m/Y') }}</strong></h3>
                    <p class="text-muted">{{ $testi->content }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                </div>
            </div>
        </section>
