@extends('guest.layouts.apps')
@section('content')
@php
    $title="register";
@endphp
<div class="d-none d-lg-block">
        <section id="register">
            <div class="container pt-5">
                <div class="hero-content">
                    <div class="row">
                        <div class="col-6">
                            <div class="col-12">
                                <h3 class="text-center">
                                    <b>
                                        Daftar
                                    </b>
                                </h3>
                                <p class="text-center">
                                    <b>
                                        Daftar dan share ilmu kamu disini
                                    </b>
                                </p>
                            </div>
                            <div class="col-12">
                                <form action="">
                                    @csrf
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text rounded-0" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                                                <input type="text" class="form-control form-control-sm rounded-0" placeholder="Nama Lengkap" aria-label="Nama Lengkap" aria-describedby="basic-addon1" style="border-left:transparent">
                                            </div>                              
                                        </div>
                                        <div class="col-6">
                                            <div class="input-group mb-3 rounded-0">
                                                <span class="input-group-text rounded-0" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                                                <input type="text" class="form-control form-control-sm rounded-0" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" style="border-left:transparent">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="input-group mb-3 rounded-0">
                                                <span class="input-group-text rounded-0" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                                                <input type="text" class="form-control form-control-sm rounded-0" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" style="border-left:transparent">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="d-grid gap-2">
                                                <div class="btn-group">                                                    
                                                    <a href="#" class="btn btn-success btn-sm rounded-0" type="button"><i class="fa-regular fa-paper-plane text-white"></i> Daftar</a>
                                                  </div>
                                                
                                            </div>
                                        </div>
                                       
                                    </div>
                                </form>
                                <p class="text-center fs-12">
                                    Sudah punya akun Pro Worker? silahkan <a href="#" data-bs-toggle="modal" data-bs-target="#login">Masuk</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-6">
                            <h1 class="text-end code-icon"><i class="fa-solid fa-code"></i></h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
</div>
<div class="d-block d-lg-none">
</div>
@endsection

    