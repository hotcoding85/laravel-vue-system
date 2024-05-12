@extends('layout.app')


@section('content')

    <section class="tm-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                    <div class="tm-blog-post">
                        <h3 class="tm-gold-text">{{ $blog->post_title }}</h3>
                        <img src="{{ asset('img/tm-img-1010x336-1.jpg') }}" alt="Image" class="img-fluid tm-img-post">

                        <p>{{ $blog->description }}</p>
                        <div class="row">
                            <div class="col">
                                <like-component :blog="{{ $blog->id }}"></like-component>
                            </div>
                            <div class="col">
                                <dislike-component :blog="{{ $blog->id }}"></dislike-component>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection

