@extends('layouts._app-landing')
@section('title','DINAS ESDM PROVINSI PAPUA')
@section('content')

        <!--==================== HOME ====================-->
        <section class="home" id="home">
            @include('layouts.componenents.section.home')
        </section>

        <!--==================== ABOUT ====================-->
        <section class="about section container" id="about">
            @include('layouts.componenents.section.about')
        </section>

        <!--==================== STEPS ====================-->
        <section class="steps section container">
            @include('layouts.componenents.section.steps')
        </section>

        <!--==================== PRODUCTS ====================-->
        {{-- <section class="product section container" id="products">
            @include('layouts.componenents.section.product')
        </section> --}}

        <!--==================== QUESTIONS ====================-->
        <section class="questions section" id="faqs">
            @include('layouts.componenents.section.questions')
        </section>

        <!--==================== CONTACT ====================-->
        <section class="contact section container" id="form">
            @include('layouts.componenents.section.form-contact')
        </section>



@stop
