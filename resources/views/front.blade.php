@extends('layouts.app')

@section('content')

    <div class="container">
        <section>

        <div>
                <b-carousel
                    id="carousel-fade"
                    style="text-shadow: 0px 0px 2px #000"
                    fade
                    indicators
                    img-width="1024"
                    img-height="480"
                >
                    <b-carousel-slide
                        caption="Step-by-step audiovisual training.
"
                        img-src="https://picsum.photos/1024/480/?image=10"
                    ></b-carousel-slide>
                    <b-carousel-slide
                        caption="Approved by experts and recommended by doctors."
                        img-src="https://picsum.photos/1024/480/?image=12"
                    ></b-carousel-slide>
                    <b-carousel-slide
                        caption="Retain correct technique for better medical outcomes."
                        img-src="https://picsum.photos/1024/480/?image=22"
                    ></b-carousel-slide>
                </b-carousel>
            </div>





        </section>
        <section>
            <div>
                <b-jumbotron  lead="Watch and learn the correct technique">

                    <b-button variant="primary" href="{{route('series.index')}}">Browse Videos</b-button>
                </b-jumbotron>
            </div>
        </section>

        <section class="mb-5">
            <div>
                <h3 class="mb-3 text-center">Recently added videos</h3>

                <b-card-group deck>
                    @foreach($featuredSeries as $series)
                        <b-card class="text-center" title="{{$series->title}}" img-src="https://picsum.photos/300/300/?image=41" img-alt="Image" img-top>
                            <b-card-text>
                                @php $excerpt = \Str::words($series->description, 10) @endphp

                                {!! $excerpt !!}
                            </b-card-text>
                            <template v-slot:footer>
                                <b-button  href="{{route('series.show', $series)}}" variant="primary">Play</b-button>
                            </template>
                        </b-card>
                    @endforeach
                    </b-card-group>
            </div>
        </section>

        <section>
            <h3 class="mb-3 text-center">Choose Plan that fits your need</h3>

            <pricing></pricing>

        </section>




    </div>
    <div class="container">
    <section>


        <footer>
            <p class="footer-Inhaler-Buddy">Ranju Mathews © 2020</p>

        </footer
    </section>

    </div>
@endsection
