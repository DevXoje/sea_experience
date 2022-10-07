@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/sM3qGIyylDc"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe> --}}
                </div>
            </div>
        </div>
        <div class="row">
            <h1>Nuestros barcos en </h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. In exercitationem soluta incidunt repellendus odio!
                Natus voluptatem rem perspiciatis voluptas labore nobis odit sint animi, repudiandae porro beatae,
                praesentium inventore veritatis.
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur dicta obcaecati illum dolor quaerat
            </p>
        </div>
        @include('partials.boats_galery')

    </div>
@endsection
