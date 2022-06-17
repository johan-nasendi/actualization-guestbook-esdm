@extends('layouts._app-dashboard')

@section('title')
 Detail Profil Buku Tamu
@endsection
@section('content')



            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dasbor</a></li>
                                            <li class="breadcrumb-item"><a href="{{route('guest.index')}}">Buku Tamu</a></li>
                                            <li class="breadcrumb-item active">@yield('title')</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Detail Data Respon Buku Tamu </h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->



                        <div class="row">
                            <div class="col-lg-4 col-xl-4">
                                <div class="card-box text-center">
                                    <img src="{{asset('/admin/assets/images/users/user-1.jpg')}}" class="rounded-circle avatar-lg img-thumbnail"
                                        alt="profile-image">

                                    <h4 class="mb-0"> {{$guestbook->name}} </h4>
                                    <p class="text-muted">{{$guestbook->position}}</p>


                                </div> <!-- end card-box -->

                            </div> <!-- end col-->

                            <div class="col-lg-8 col-xl-8">
                                <div class="card-box">
                                    <ul class="nav nav-pills navtab-bg  nav-justified">
                                        <li class="nav-item">
                                            <a href="#aboutme" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                                <i class="fa-solid fa-user"></i> Profil Info
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="aboutme">

                                            {{-- <h5 class="mb-4 text-uppercase"><i class="fa-solid fa-graduation-cap"></i>
                                                PENGALAMAN PBM</h5> --}}

                                            <ul class="list-unstyled timeline-sm">
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">A1</span>
                                                    <h5 class="mt-0 mb-1">Name Lengkap</h5>
                                                    <p>  {{$guestbook->name}}</p>
                                                </li>

                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">A2</span>
                                                    <h5 class="mt-0 mb-1">No. Handphone</h5>
                                                    <p>{{$guestbook->mobile_phone_number}}</p>
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">A3</span>
                                                    <h5 class="mt-0 mb-1">Asal Instansi/Perusahaan</h5>
                                                    <p>{{$guestbook->institution}}</p>
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">A4</span>
                                                    <h5 class="mt-0 mb-1">Jabatan</h5>
                                                    <p>{{$guestbook->position}}</p>
                                                </li>

                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">A4</span>
                                                    <h5 class="mt-0 mb-1">Keperluan</h5>
                                                    <p>{{$guestbook->necessities}}</p>
                                                </li>
                                            </ul>


                                        </div> <!-- end tab-pane -->
                                        <!-- end about me section content -->
                                        <!-- end settings content-->

                                    </div> <!-- end tab-content -->
                                </div> <!-- end card-box-->

                            </div> <!-- end col -->
                        </div>
                        <!-- end row-->

                    </div> <!-- container -->

                </div> <!-- content -->


            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

@endsection


