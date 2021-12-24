
@extends('front.master')

@section('main')
    <!-- Start Main -->
<main>

    <div class="container">
        <div class="row">
            <div class="col-md-8 bg-dark text-white" style="border-radius: 20px; ">
                @foreach ($article as $artic )
                    
                <img src="{{$artic->image}}" alt="" srcset="" class="img-raised w-100  mb-4 mt-3" style="border-radius: 10px">
                <br>
                <h2>{{$artic->title}}</h2>
                <br>
                <label>{{$artic->content}}</label>
                <hr>
                <small style="color: grey">Yüklenme Tarihi: {{$artic->created_at->diffForHumans()}}</small>
                <a href="#" class="float float-right"><span class="badge badge-secondary">kategoriler</span></a> 
                @endforeach
            </div>
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
                        <div class="work-me">
                            ÇALIŞMALAR
                        </div>
                            <div class="card bg-dark text-white mb-2" style="width: 22rem; display:inline-block; margin-left:10px;">
                                <img class="card-img-top" src="{{asset('image/kod3.jpeg')}}" alt="Card image cap">
                                <div class="card-body">
                                <h5 class="card-title">Proje 1</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-outline-secondary">Gözat<i class="fa fa-eye fa-sm" ></i></a>
                                </div>
                            </div>
                            <div class="card bg-dark text-white" style="width: 22rem; display:inline-block; margin-left:10px;">
                                <img class="card-img-top" src="{{asset('image/kod3.jpeg')}}" alt="Card image cap">
                                <div class="card-body">
                                <h5 class="card-title">Proje 2</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-outline-secondary">Gözat<i class="fa fa-eye fa-sm" ></i></a>
                                </div>
                            </div>
                </div>
        <!--Right Menu Bar Finished-->
        </div>
    </div>
</main>
    <!-- Finished Main -->
@endsection
    



