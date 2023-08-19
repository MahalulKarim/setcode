@extends('guest.layouts.apps')
@section('content')
@php
    $title="index";
@endphp
<div class="d-none d-lg-block">
        <section id="hero">
            <div class="container">
                <div class="hero-content">
                    <div class="row">
                        <div class="col-6">                           
                            <div class="col-12">
                                <h2 class="welcome-brand">SetCode </h2>
                                <h2 class="welcome">Tutorial Pemrograman</h2>
                                <p></p>
                            </div>
                            <div class="col-12">
                                <a href="" class="btn btn-1">Semua Tutorial</a>
                            </div>
                        </div>
                        <div class="col-6">
                            <h1 class="text-end code-icon"><i class="fa-solid fa-code"></i></h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="category">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h3>
                            <b>Kategori</b>
                        </h3>
                        {{-- <h5 class="title"><b>Kategori Tutorial</b></h5> --}}
                    </div>
                    <div class="col-6 d-flex justify-content-end my-auto">
                        <a href="" class="text-decoration-none text-dark"><b> Lihat Semua <i class="fas fa-angle-right"></i></b></a>
                    </div>
                </div>
                <div class="row py-3">
                    @foreach($category as $ct)
                    <div class="col-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row py-3">
                                    <div class="col-12">
                                        <img src="{{$ct->icon}}" alt="" style="width: 60px;height:60px">
                                    </div>
                                    <div class="col-12 pt-2 d-flex justify-content-between pt-2">
                                        <h6>
                                            <b>{{$ct->name}}</b>
                                        </h6>
                                        <a href=""><i class="fas fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row py-3">
                                    <div class="col-12">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/640px-PHP-logo.svg.png" alt="" style="width: 60px;height:60px">
                                    </div>
                                    <div class="col-12 pt-2 d-flex justify-content-between pt-2">
                                        <h6>
                                            <b>Latihan PHP Dasar</b>
                                        </h6>
                                        <a href=""><i class="fas fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    @endforeach
                </div>
            </div>
        </section>
        <section id="tutorial">
            <div class="container">
                <div class="row pt-5 mb-3">
                    <div class="col-6">
                        <h3>
                            <b>Tutorial</b>
                        </h3>
                        {{-- <h5 class="title"><b>Kategori Tutorial</b></h5> --}}
                    </div>
                    <div class="col-6 d-flex justify-content-end my-auto">
                        <a href="" class="text-decoration-none text-dark"><b> Lihat Semua <i class="fas fa-angle-right"></i></b></a>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    @foreach($tutorial as $t)
                    <div class="col-3 mb-4 d-flex justify-content-center">
                            {{-- <a href="" class="text-decoration-none text-dark"> --}}
                            <div class="card" style="width: 16rem;">
                                <div class="card-header bg-card py-5">
                                    <h3 class="text-center text-white">PHP</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-between">
                                            <h6 class="text-primary">
                                                <b>PHP</b>
                                            </h6>
                                            <small class="upload-by">
                                                Oleh: Admin
                                            </small>
                                        </div>
                                        <div class="col-12">
                                            <h5>
                                                {{$t->title}}
                                            </h5>
                                        </div>
                                        <div class="col-12 pt-2">
                                            <div class="d-grid gap-2">
                                                <a href="#" class="btn btn-2" >Belajar</a>
                                              </div>
                                        </div>
                                       
                                    </div>
                                </div>
                              </div>
                            {{-- </a>                    --}}
                        </div>
                        @endforeach
                    {{-- <div class="col-12 d-flex justify-content-center py-4">
                        <a href="" class="btn btn-1">Semua Tutorial</a>
                    </div> --}}
                </div>
                

            </div>
        </section>
        <section id="about">
            <div class="container">
                <div class="row pt-5 mb-3">
                    <div class="col-6">
                        <h3>
                            <b>Tentang Kami</b>
                        </h3>                        
                    </div>                   
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-12">
                        <h6>
                            <b>
                                
                            </b>
                        </h6>
                        <p>
                           SetCode adalah website yang kami kembangkan berisi tutorial tentang pemrograman dan design UI/UX, di dalam website ini siapapun bisa berpartisipasi untuk menulis tutorial.
                        </p>
                        <a href="" class="text-primary">Daftar Sebagai Author <i class="fas fa-angle-right text-primary"></i></a>
                        
                        
                      
                    </div>
                </div>
                

            </div>
        </section>
        <section id="contact">
            <div class="container">
                <div class="row pt-5 mb-3">
                    <div class="col-6">
                        <h3>
                            <b>Kontak Kami</b>
                        </h3>                       
                    </div>                   
                </div>
                <div class="row">                  
                    <div class="col-6">
                        <div class="row ms-4 pt-4">
                            <div class="col-12">
                                <ul class="no-bullets">
                                    <li><i class="fa-solid fa-envelope fa-xl"></i> emailkami@gmail.com</li>
                                    <li><i class="fa-solid fa-phone fa-xl"></i> +6212344343</li>
                                    <li><i class="fa-solid fa-location-dot fa-xl"></i> Jl. Mawar No.09 Wonosobo Barat, Wonosobo</li>
                                </ul>                                
                            </div>
                            <div class="col-12 pt-2">
                                <h4>
                                    <b>
                                        Sosial Media Kami
                                    </b>
                                </h4>
                            </div>
                            <div class="col-12 pt-3">
                                <a href="" class="btn"><i class="fa-brands fa-instagram fa-2xl"></i></a>
                                <a href="" class="btn"><i class="fa-brands fa-twitter fa-2xl"></i></a>
                                <a href="" class="btn"><i class="fa-brands fa-facebook fa-2xl"></i></a>
                            </div>
                        </div>                    
                   </div>
                   <div class="col-6">
                    <form action="">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text rounded-0" id="basic-addon1"><i class="fa-regular fa-user"></i></span>
                                    <input type="text" class="form-control form-control-sm rounded-0" placeholder="Nama" aria-label="Nama" aria-describedby="basic-addon1" style="border-left:transparent">
                                </div>                              
                            </div>
                            <div class="col-6">
                                <div class="input-group mb-3 rounded-0">
                                    <span class="input-group-text rounded-0" id="basic-addon1"><i class="fa-regular fa-envelope"></i></span>
                                    <input type="text" class="form-control form-control-sm rounded-0" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" style="border-left:transparent">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-2">
                                    {{-- <label for="">Pesan</label> --}}
                                    <textarea name="" id="" cols="30" rows="10" class="form-control form-control-sm rounded-0" placeholder="Pesan"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-grid gap-2">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-sm rounded-0 btn-secondary" aria-current="page">Batal</a>
                                        <a href="#" class="btn btn-success btn-sm rounded-0" type="button"><i class="fa-regular fa-paper-plane text-white"></i> Kirim</a>
                                      </div>
                                    {{-- <button class="btn btn-3 btn-sm rounded-0" type="button"><i class="fa-regular fa-paper-plane text-white"></i> Kirim</button> --}}
                                  </div>
                            </div>
                        </div>
                    </form>
                   </div>
                </div>               

            </div>
        </section>
</div>
<div class="d-block d-lg-none">
</div>
@endsection

    