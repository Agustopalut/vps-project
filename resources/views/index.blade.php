<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Ettore Gelato</title>
</head>
<body>
    <nav class="navbar navbar-light bg-danger">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <div class="d-flex align-items-center">
                <img src="/assets/Etore1.jpg" alt="" width="50" height="45" class="d-inline-block align-text-top">
                <p class="mt-2 ms-2 text-light">Ettore Gelato</p>
            </div>
            
          </a>
        </div>
      </nav>

      <!-- HOME SECTION -->
      <div class="container mt-5">
        <div class="row">

            <div class="col-md-6 align-items-center">
                <div style="margin-top: 50px;">
                    <h1>WELCOME TO THE <p class="text-danger">ETTORE GELATO</p></h1>
                    <p>We serve delicious Italian cuisine and are always looking for new and exciting dishes to try. Feel free to explore our menu and let us know if you have any questions or need assistance.</p>
                </div>
            </div>
            <div class="col-md-6 w-full d-flex justify-content-center">
                <img src="assets/Etore3.jpg" width="300" height="350" class="rounded" alt="">
            </div>
        </div>
      </div>


      <!-- ABOUT US SECTION -->
       <section id="about" class="w-full py-4 bg-danger" style="margin-top: 90px;">
        <div class="container">
            <div class="w-full d-flex justify-content-center">
                <h1 class="text-light">About Us</h1>
            </div>
            
            <div class="row mt-4">
                <div class="col-md-6 text-light mt-5" style="font-size: larger;">
                    Ettore Gelato adalah perusahaan gelato premium yang berasal dari Italia, membawa tradisi asli Italia ke setiap sajian. Dengan resep yang diwariskan secara turun-temurun dan inovasi modern, kami menghadirkan gelato berkualitas tinggi yang dibuat dengan bahan-bahan alami terbaik.

Didirikan dengan visi untuk menyebarkan kebahagiaan melalui cita rasa autentik, Ettore Gelato telah menjadi simbol kelezatan yang menggabungkan seni dan kecintaan pada makanan penutup.
                </div>

                <div class="col-md-6 text-light w-full d-flex justify-content-center">
                    <!-- <div class="w-full">

                    </div> -->
                    <img src="assets/Etore4.jpg" width="250" height="300" class="rounded" alt="">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-4">
                <div class="col-md-6 text-light w-full mt-5 d-flex justify-content-center mt-5" style="font-size: larger;">
                    <img src="assets/Etore5.jpg" width="250" height="300" class="rounded" alt="">
                </div>

                <div class="col-md-6 text-light" style="margin-top: 85px;">
                    Menghadirkan kebahagiaan melalui kelezatan gelato otentik Italia kepada setiap pelanggan di seluruh dunia, sambil menjaga kualitas, kreativitas, dan keberlanjutan.

Ettore Gelato adalah tempat di mana rasa bertemu dengan seni, menciptakan pengalaman yang tak terlupakan di setiap sendok. Baik dinikmati sendiri, bersama keluarga, atau dalam momen istimewa, Ettore Gelato selalu menjadi pilihan yang sempurna
                </div>
            </div>
        </div>
       </section>


       <section class="container mt-4" id="image">
        
        <div class="row">
            <div class="col-md-6 w-full d-flex justify-content-center">
                <img src="assets/Etore6.jpg" width="270" height="300" alt="">
            </div>
            <div class="col-md-6 w-full d-flex justify-content-center">
                <img src="assets/Etore7.jpg" width="270" height="300" alt="">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6 w-full d-flex justify-content-center">
                <img src="assets/Etore8.jpg" width="270" height="300" alt="">
            </div>
            <div class="col-md-6 w-full d-flex justify-content-center">
                <img src="assets/Etore9.jpg" width="270" height="300" alt="">
            </div>
        </div>
       </section>

       <footer class="contaier w-full py-5 bg-danger">

        <div class="row">
            <div class="col-md-12 w-full d-flex justify-content-center align-items-center">
                <button class="btn btn-primary">ORDER NOW</button>
                
            </div>
        </div>

        <div class="container">
            <form method="POST" action="/photo" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" name="nama" class="form-control" id="nama">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Alamat</label>
                    <textarea class="form-control" name="alamat" id="" cols="15" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" class="form-control" name="photo" id="foto">
                </div>
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>

       </footer>
    <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>