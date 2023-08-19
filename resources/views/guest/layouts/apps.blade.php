<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="{{asset('asset/css/mystyle.css')}}">
    <title>SetCode</title>
  </head>
  <body>
    <header>
      <div class="d-none d-lg-block">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top ">
            <div class="container">
              <a class="navbar-brand my-brand" href="#">{SC}</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                  <a class="nav-link me-2 my-link {{ ( $title == 'index') ? 'link-actives' : ''}}" aria-current="page" href="/">Home</a>

                  <div class="dropdown">
                    <a class="nav-link me-2 my-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                      Tutorial
                    </a>
                  
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      @foreach ($category as $c)
                      <li>
                        <a class="dropdown-item" href="{{route('guests.tutorial-select',$c->id)}}">{{$c->name}}</a>
                      </li>
                      @endforeach
                    </ul>
                  </div>

                  <a class="nav-link me-2 my-link" href="#">Tentang Kami</a>
                  <a class="nav-link me-3 my-link" href="#">Kontak</a>
                 
                    <button type="button" class="btn btn-3 ms-3" data-bs-toggle="modal" data-bs-target="#login">Masuk</button>
                 
                </div>
              </div>
            </div>
        </nav>
       {{-- Modal Login --}}
        <!-- Modal -->
        <div class="modal rounded-0 fade" id="login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="registerLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content rounded-0">
             
              <div class="modal-body">
                  <div class="row">
                      <div class="col-12 mb-3">
                          <div class="d-flex justify-content-between">
                              <h6 class=" py-auto"><b>LOGIN</b></h6>
                              <a href="#" class="py-auto" data-bs-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i></a>
                          </div>
                      </div>
                      <div class="col-12 pt-5">
                        <h6>
                          <b>Selamat datang kembali! Masuk dengan akun anda.</b>
                        </h6>
                      </div>
                      <div class="col-12 pt-4">
                        <form action="">
                          @csrf
                          <div class="row">
                              <div class="col-12">
                                  <div class="input-group mb-3 rounded-0">
                                      <span class="input-group-text rounded-0" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                                      <input type="email" class="form-control form-control-sm rounded-0" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" style="border-left:transparent">
                                  </div>
                                  <div class="input-group mb-3 rounded-0">
                                      <span class="input-group-text rounded-0" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                                      <input type="password" class="form-control form-control-sm rounded-0" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" style="border-left:transparent">
                                  </div>
                              </div>
                              <div class="col-12">
                                  <div class="d-grid gap-2">
                                      <div class="btn-group">                                       
                                          <a href="#" class="btn btn-success btn-sm rounded-0" type="button"><i class="fa-solid fa-right-to-bracket text-white"></i> MASUK</a>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-12 py-3">
                                <small>
                                  Belum punya akun? Klik <a href="{{route('guests.register-user')}}">di sini</a> untuk membuat akun dengan mudah.
                                </small>
                              </div>
                          </div>
                        </form>
                      </div>
                  </div>
              </div>
             
          </div>
          </div>
      </div>
       {{-- /Modal Login --}}
      </div>
      <div class="d-block d-lg-none">
      </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
      <div class="container">
          <div class="row px-2 pt-4">
            <div class="col-12">
              <hr>
          </div>
              <div class="col-12 d-flex justify-content-between">
                  <a class="navbar-brand my-brand" href="#"><i class="fa-solid fa-brackets-curly"></i>{SC}</a>
             
                      <div style="">
                          <a class="nav-link-bottom"  href="#" target="_blank"><i class="fa-brands fa-github fa-xl"></i></a>
                          <a class="nav-link-bottom"  href="#" target="_blank"><i class="fa-brands fa-linkedin fa-xl"></i></a>
                      </div>
                      
              </div>
             
              <div class="col-12 d-flex justify-content-end">
                  <p class="" style="font-size: 12px;">&copy; Copyright 2023 Mahalul Karim, Build With <span class="text-danger">Love<i class="fa-solid fa-heart"></i></span> & <span class="text-danger">Coffee<i class="fa-solid fa-mug-saucer"></i></span></p>
              </div>
          </div>
      </div>
  </footer>
        <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script>
        
        document.addEventListener("DOMContentLoaded", function() {
            var navbar = document.querySelector(".navbar");

            window.addEventListener("scroll", function() {
                if (window.pageYOffset > 50) { // Ubah angka 200 sesuai dengan posisi scroll yang diinginkan
                navbar.classList.add("navbar-scrolled");
                } else {
                navbar.classList.remove("navbar-scrolled");
                }
            });
        });

    </script>
  </body>
</html>