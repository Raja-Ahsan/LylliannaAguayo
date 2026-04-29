@extends('layouts.website.master')
@section('title', $page_title)
@section('meta_description',
    'Retail and commercial cleaning for big-box stores, gyms, schools, churches, hotels, and financial institutions
    across Phoenix and the Southwest.')

@section('content')
    <section class="page-hero">
        <div class="container-pns">
            <h1>Industries served</h1>
            <p>Clean spaces keep customers and staff comfortable — and your brand looking its best.</p>
        </div>
    </section>

    <section class="section-pns">
        <div class="container-pns">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <p>We currently serve several Dick's Sporting Goods, PetSmart, and Lowe's locations, providing cleans
                        multiple times throughout the week. A retail store is only as great as its cleanliness, which
                        makes customers want to come back and visit.</p>
                    <p>Our team also supports offices, schools, churches, hotels, financial institutions, and training
                        facilities — anywhere consistency and discretion matter.</p>
                    <p class="mb-0">Need coverage in <strong>Phoenix, Scottsdale, Gilbert, Tucson, Las Vegas, or New
                            Mexico</strong>? <a href="{{ url('/#contact-quote') }}">Request a walk-through</a> and we will
                        map a schedule to your traffic patterns.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
