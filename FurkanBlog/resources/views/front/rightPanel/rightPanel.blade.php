@extends('front.master')

<!--Right Menu Bar Start-->
<div class="col-md-4 float-left">
    <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
        <div id="card-header" class="card-header">Kategoriler</div>
            <div class="card-body text-white">
                <ol>
                    <a href="#" id="kategori-link" class="badge bg-secondary"><li>C#</li></a>
                    <a href="#" id="kategori-link" class="badge bg-secondary"><li>HTML5</li></a>
                    <a href="#" id="kategori-link" class="badge bg-secondary"><li>JavaScript</li></a>
                    <a href="#" id="kategori-link" class="badge bg-secondary"><li>JavaScript</li></a>
                    <a href="#" id="kategori-link" class="badge bg-secondary"><li>JavaScript</li></a>

                </ol>
            </div>
    </div>
    <p id="image-text">Profil</p>
    <hr>
<!-- Profil Start -->
    <figure class="profil">
        <img src="/image/cod1.jpg" alt="sample87" />
        <figcaption>
            <img src="/image/Furkan_Erpay.jpg" alt="profile-sample4" class="profile" />
            <h2>Furkan Erpay<span>Bilgisayr Programcısı</span></h2>
            <p>Merhaba blog sayfama hoşgeldin umarım işine yarar bilgiler bulabilirsin veya merak ettiğin şeyleri mail yol ile bana iletebilirsin. Hoşçakal!  </p>
            <a href="#" class="follow">Follow</a>
            <a href="#" class="info">More Info</a>
            </figcaption>
    </figure>
    <!-- Profil Finished -->
    <!-- İmage View  -->
        <p id="image-text">Bazı Görseller</p>
        <hr>
    <div class="image-right">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 h-100" src="{{asset('image/kod1.jpg')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 h-100" src="{{asset('image/cod1.jpg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 h-100" src="{{asset('image/kod1.jpg')}}" alt="Third slide">
                </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
    </div>

    <!-- İmage View  -->
</div>
<!--Right Menu Bar Finished-->
</div>
<div class="row">
<div class="col-md-12">
<div class="work-me">
    ÇALIŞMALAR
</div>
    <div class="card bg-dark text-white" style="width: 22rem; display:inline-block; margin-left:10px;">
        <img class="card-img-top" src="{{asset('image/kod3.jpeg')}}" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title">Proje 1</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-outline-secondary">Go somewhere</a>
        </div>
    </div>
    <div class="card bg-dark text-white" style="width: 22rem; display:inline-block; margin-left:10px;">
        <img class="card-img-top" src="{{asset('image/kod3.jpeg')}}" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title">Proje 2</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-outline-secondary">Go somewhere</a>
        </div>
    </div>
    <div class="card bg-dark text-white" style="width: 22rem; display:inline-block; margin-left:10px;">
        <img class="card-img-top" src="{{asset('image/kod3.jpeg')}}" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title">Proje 3</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-outline-secondary">Go somewhere</a>
        </div>
    </div>
</div>
</div>
</div>
</main>
<!-- Finished Main -->
