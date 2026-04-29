@extends('layouts.website.master')
@section('title', $page_title)
@section('meta_description', 'Request a free quote or walk-through. Call Phoenix Neat Space Cleaning — commercial and residential cleaning across the Valley.')

@section('content')
    <section class="page-hero">
        <div class="container-pns">
            <h1>Get a quote</h1>
            <p>Tell us about your space — we will follow up quickly with pricing and scheduling options.</p>
        </div>
    </section>

    <section class="section-pns">
        <div class="container-pns">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <p class="mb-4">Prefer to start on the phone? Call us anytime.</p>
                    <a class="btn-pns-gold btn-lg mb-3 d-inline-flex" href="tel:+16025688243"><i
                            class="fas fa-phone me-2"></i>602-568-8243</a>
                    <p class="mb-0"><a href="{{ url('/#contact-quote') }}">Or use the booking form on our home page</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
