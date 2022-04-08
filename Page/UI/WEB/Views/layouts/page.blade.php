
<html lang="uk">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>App Name - @yield('title')</title>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        @section('sidebar')
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarScroll">
                        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Про нас</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"> Отримання й оплата</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"> Повернення та обмін</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"> Корисна інформація</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Контакти</a>
                            </li>
                        </ul>
                        <div class="phone me-auto">
                            <span><a href="">(067) 593-00-02</a> </span>
                            <span><a href="">(050) 536-54-34</a> </span>
                            <span><a href="">(093) 445-78-44</a> </span>
                        </div>
                        <ul class="navbar-nav navbar-nav-scroll d-flex" style="--bs-scroll-height: 100px;">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Власний кабінет</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Реєстрація</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container">
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <div class="d-grid gap-2 d-md-flex justify-content-between">
                            <div class="logo d-flex align-items-center"><img src="logo.svg" width="250"/> </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <button type="button" class="btn btn-outline-secondary">
                            <i class="bi-alarm"></i>
                            Каталог</button>
                    </div>
                    <form class="d-flex  align-items-center mb-0" style="width: 500px;">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit"><i class="bi bi-search" style="font-size: 20px; font-weight: bold"></i></button>
                    </form>
                    <div class="d-grid gap-2 d-md-flex align-items-center justify-content-md-end">
                        <button class="btn btn-primary me-md-2" type="button">Button</button>
                        <button class="btn btn-primary" type="button"><i class="bi bi-basket2"></i> Корзина</button>
                    </div>
                </div>
            </div>
            <hr>
           <div class="container">
               <div class="d-flex align-items-start">
                   <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                       <button class="nav-link text-align-left active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">

                           <div class="d-flex align-items-center">
                               <i class="bi bi-lamp" style="font-size: 34px; font-weight: bold"></i>
                                <span class="mx-3"> Побутова техніка, інструменти та товари для дому</span>
                           </div>
                       </button>
                       <button class="nav-link text-align-left" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                           <div class="d-flex align-items-center">
                               <i class="bi bi-pc-display" style="font-size: 34px; font-weight: bold"></i>
                               <span class="mx-3"> Споживчі товари і електроніка</span>
                           </div>
                       </button>
                       <button class="nav-link text-align-left" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                           <div class="d-flex align-items-center">
                               <i class="bi bi-pci-card" style="font-size: 34px; font-weight: bold"></i>
                               <span class="mx-3">
                                   Продукція та рішення для підприємств</span>
                           </div>
                       </button>
                       <button class="nav-link text-align-left" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                           <div class="d-flex align-items-center">
                               <i class="bi bi-playstation" style="font-size: 34px; font-weight: bold"></i>
                               <span class="mx-3">
                                   Іграшки та товари для дітей</span>
                           </div>
                       </button>
                   </div>
                   <div class="tab-content" id="v-pills-tabContent">
                       <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                           <div class="conteiner row m-2">
                               <ul class="col-xl-3">
                                   <li><strong>Кліматична техніка</strong></li>
                                   <li><a href="#">Вентилятори</a></li>
                                   <li><a href="#">Водонагрівачі</a></li>
                                   <li><a href="#">Робота з повітрям</a></li>
                                   <li><a href="#">Кондиціонери</a></li>
                                   <li><a href="#">Обігрівачі</a></li>
                                   <li><a href="#">Котли</a></li>
                                   <li><a href="#">Теплові насоси</a></li>
                                   <li><a href="#">Метео прилади</a></li>
                                   <li><a href="#">Аксесуари до кліматичної техніки</a></li>
                               </ul>
                               <ul class="col-xl-3">
                                   <li><strong>Кліматична техніка</strong></li>
                                   <li><a href="#">Вентилятори</a></li>
                                   <li><a href="#">Водонагрівачі</a></li>
                                   <li><a href="#">Робота з повітрям</a></li>
                                   <li><a href="#">Кондиціонери</a></li>
                                   <li><a href="#">Обігрівачі</a></li>
                                   <li><a href="#">Котли</a></li>
                                   <li><a href="#">Теплові насоси</a></li>
                                   <li><a href="#">Метео прилади</a></li>
                                   <li><a href="#">Аксесуари до кліматичної техніки</a></li>
                               </ul>
                               <ul class="col-xl-3">
                                   <li><strong>Кліматична техніка</strong></li>
                                   <li><a href="#">Вентилятори</a></li>
                                   <li><a href="#">Водонагрівачі</a></li>
                                   <li><a href="#">Робота з повітрям</a></li>
                                   <li><a href="#">Кондиціонери</a></li>
                                   <li><a href="#">Обігрівачі</a></li>
                                   <li><a href="#">Котли</a></li>
                                   <li><a href="#">Теплові насоси</a></li>
                                   <li><a href="#">Метео прилади</a></li>
                                   <li><a href="#">Аксесуари до кліматичної техніки</a></li>
                               </ul>
                               <ul class="col-xl-3">
                                   <li><strong>Кліматична техніка</strong></li>
                                   <li><a href="#">Вентилятори</a></li>
                                   <li><a href="#">Водонагрівачі</a></li>
                                   <li><a href="#">Робота з повітрям</a></li>
                                   <li><a href="#">Кондиціонери</a></li>
                                   <li><a href="#">Обігрівачі</a></li>
                                   <li><a href="#">Котли</a></li>
                                   <li><a href="#">Теплові насоси</a></li>
                                   <li><a href="#">Метео прилади</a></li>
                                   <li><a href="#">Аксесуари до кліматичної техніки</a></li>
                               </ul>
                               <ul class="col-xl-3">
                                   <li><strong>Кліматична техніка</strong></li>
                                   <li><a href="#">Вентилятори</a></li>
                                   <li><a href="#">Водонагрівачі</a></li>
                                   <li><a href="#">Робота з повітрям</a></li>
                                   <li><a href="#">Кондиціонери</a></li>
                                   <li><a href="#">Обігрівачі</a></li>
                                   <li><a href="#">Котли</a></li>
                                   <li><a href="#">Теплові насоси</a></li>
                                   <li><a href="#">Метео прилади</a></li>
                                   <li><a href="#">Аксесуари до кліматичної техніки</a></li>
                               </ul>
                           </div>
                       </div>
                       <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                           <div class="conteiner row m-2">
                               <ul class="col-xl-3">
                                   <li><strong>Кліматична техніка</strong></li>
                                   <li><a href="#">Вентилятори</a></li>
                                   <li><a href="#">Водонагрівачі</a></li>
                                   <li><a href="#">Робота з повітрям</a></li>
                                   <li><a href="#">Кондиціонери</a></li>
                                   <li><a href="#">Обігрівачі</a></li>
                                   <li><a href="#">Котли</a></li>
                                   <li><a href="#">Теплові насоси</a></li>
                                   <li><a href="#">Метео прилади</a></li>
                                   <li><a href="#">Аксесуари до кліматичної техніки</a></li>
                               </ul>
                               <ul class="col-xl-3">
                                   <li><strong>Кліматична техніка</strong></li>
                                   <li><a href="#">Вентилятори</a></li>
                                   <li><a href="#">Водонагрівачі</a></li>
                                   <li><a href="#">Робота з повітрям</a></li>
                                   <li><a href="#">Кондиціонери</a></li>
                                   <li><a href="#">Обігрівачі</a></li>
                                   <li><a href="#">Котли</a></li>
                                   <li><a href="#">Теплові насоси</a></li>
                                   <li><a href="#">Метео прилади</a></li>
                                   <li><a href="#">Аксесуари до кліматичної техніки</a></li>
                               </ul>
                               <ul class="col-xl-3">
                                   <li><strong>Кліматична техніка</strong></li>
                                   <li><a href="#">Вентилятори</a></li>
                                   <li><a href="#">Водонагрівачі</a></li>
                                   <li><a href="#">Робота з повітрям</a></li>
                                   <li><a href="#">Кондиціонери</a></li>
                                   <li><a href="#">Обігрівачі</a></li>
                                   <li><a href="#">Котли</a></li>
                                   <li><a href="#">Теплові насоси</a></li>
                                   <li><a href="#">Метео прилади</a></li>
                                   <li><a href="#">Аксесуари до кліматичної техніки</a></li>
                               </ul>
                               <ul class="col-xl-3">
                                   <li><strong>Кліматична техніка</strong></li>
                                   <li><a href="#">Вентилятори</a></li>
                                   <li><a href="#">Водонагрівачі</a></li>
                                   <li><a href="#">Робота з повітрям</a></li>
                                   <li><a href="#">Кондиціонери</a></li>
                                   <li><a href="#">Обігрівачі</a></li>
                                   <li><a href="#">Котли</a></li>
                                   <li><a href="#">Теплові насоси</a></li>
                                   <li><a href="#">Метео прилади</a></li>
                                   <li><a href="#">Аксесуари до кліматичної техніки</a></li>
                               </ul>
                               <ul class="col-xl-3">
                                   <li><strong>Кліматична техніка</strong></li>
                                   <li><a href="#">Вентилятори</a></li>
                                   <li><a href="#">Водонагрівачі</a></li>
                                   <li><a href="#">Робота з повітрям</a></li>
                                   <li><a href="#">Кондиціонери</a></li>
                                   <li><a href="#">Обігрівачі</a></li>
                                   <li><a href="#">Котли</a></li>
                                   <li><a href="#">Теплові насоси</a></li>
                                   <li><a href="#">Метео прилади</a></li>
                                   <li><a href="#">Аксесуари до кліматичної техніки</a></li>
                               </ul>
                           </div>
                       </div>
                       <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                           <div class="conteiner row m-2">
                               <ul class="col-xl-3">
                                   <li><strong>Кліматична техніка</strong></li>
                                   <li><a href="#">Вентилятори</a></li>
                                   <li><a href="#">Водонагрівачі</a></li>
                                   <li><a href="#">Робота з повітрям</a></li>
                                   <li><a href="#">Кондиціонери</a></li>
                                   <li><a href="#">Обігрівачі</a></li>
                                   <li><a href="#">Котли</a></li>
                                   <li><a href="#">Теплові насоси</a></li>
                                   <li><a href="#">Метео прилади</a></li>
                                   <li><a href="#">Аксесуари до кліматичної техніки</a></li>
                               </ul>
                               <ul class="col-xl-3">
                                   <li><strong>Кліматична техніка</strong></li>
                                   <li><a href="#">Вентилятори</a></li>
                                   <li><a href="#">Водонагрівачі</a></li>
                                   <li><a href="#">Робота з повітрям</a></li>
                                   <li><a href="#">Кондиціонери</a></li>
                                   <li><a href="#">Обігрівачі</a></li>
                                   <li><a href="#">Котли</a></li>
                                   <li><a href="#">Теплові насоси</a></li>
                                   <li><a href="#">Метео прилади</a></li>
                                   <li><a href="#">Аксесуари до кліматичної техніки</a></li>
                               </ul>
                               <ul class="col-xl-3">
                                   <li><strong>Кліматична техніка</strong></li>
                                   <li><a href="#">Вентилятори</a></li>
                                   <li><a href="#">Водонагрівачі</a></li>
                                   <li><a href="#">Робота з повітрям</a></li>
                                   <li><a href="#">Кондиціонери</a></li>
                                   <li><a href="#">Обігрівачі</a></li>
                                   <li><a href="#">Котли</a></li>
                                   <li><a href="#">Теплові насоси</a></li>
                                   <li><a href="#">Метео прилади</a></li>
                                   <li><a href="#">Аксесуари до кліматичної техніки</a></li>
                               </ul>
                               <ul class="col-xl-3">
                                   <li><strong>Кліматична техніка</strong></li>
                                   <li><a href="#">Вентилятори</a></li>
                                   <li><a href="#">Водонагрівачі</a></li>
                                   <li><a href="#">Робота з повітрям</a></li>
                                   <li><a href="#">Кондиціонери</a></li>
                                   <li><a href="#">Обігрівачі</a></li>
                                   <li><a href="#">Котли</a></li>
                                   <li><a href="#">Теплові насоси</a></li>
                                   <li><a href="#">Метео прилади</a></li>
                                   <li><a href="#">Аксесуари до кліматичної техніки</a></li>
                               </ul>
                               <ul class="col-xl-3">
                                   <li><strong>Кліматична техніка</strong></li>
                                   <li><a href="#">Вентилятори</a></li>
                                   <li><a href="#">Водонагрівачі</a></li>
                                   <li><a href="#">Робота з повітрям</a></li>
                                   <li><a href="#">Кондиціонери</a></li>
                                   <li><a href="#">Обігрівачі</a></li>
                                   <li><a href="#">Котли</a></li>
                                   <li><a href="#">Теплові насоси</a></li>
                                   <li><a href="#">Метео прилади</a></li>
                                   <li><a href="#">Аксесуари до кліматичної техніки</a></li>
                               </ul>
                           </div>
                       </div>
                       <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                           <div class="conteiner row m-2">
                               <ul class="col-xl-3">
                                   <li><strong>Кліматична техніка</strong></li>
                                   <li><a href="#">Вентилятори</a></li>
                                   <li><a href="#">Водонагрівачі</a></li>
                                   <li><a href="#">Робота з повітрям</a></li>
                                   <li><a href="#">Кондиціонери</a></li>
                                   <li><a href="#">Обігрівачі</a></li>
                                   <li><a href="#">Котли</a></li>
                                   <li><a href="#">Теплові насоси</a></li>
                                   <li><a href="#">Метео прилади</a></li>
                                   <li><a href="#">Аксесуари до кліматичної техніки</a></li>
                               </ul>
                               <ul class="col-xl-3">
                                   <li><strong>Кліматична техніка</strong></li>
                                   <li><a href="#">Вентилятори</a></li>
                                   <li><a href="#">Водонагрівачі</a></li>
                                   <li><a href="#">Робота з повітрям</a></li>
                                   <li><a href="#">Кондиціонери</a></li>
                                   <li><a href="#">Обігрівачі</a></li>
                                   <li><a href="#">Котли</a></li>
                                   <li><a href="#">Теплові насоси</a></li>
                                   <li><a href="#">Метео прилади</a></li>
                                   <li><a href="#">Аксесуари до кліматичної техніки</a></li>
                               </ul>
                               <ul class="col-xl-3">
                                   <li><strong>Кліматична техніка</strong></li>
                                   <li><a href="#">Вентилятори</a></li>
                                   <li><a href="#">Водонагрівачі</a></li>
                                   <li><a href="#">Робота з повітрям</a></li>
                                   <li><a href="#">Кондиціонери</a></li>
                                   <li><a href="#">Обігрівачі</a></li>
                                   <li><a href="#">Котли</a></li>
                                   <li><a href="#">Теплові насоси</a></li>
                                   <li><a href="#">Метео прилади</a></li>
                                   <li><a href="#">Аксесуари до кліматичної техніки</a></li>
                               </ul>
                               <ul class="col-xl-3">
                                   <li><strong>Кліматична техніка</strong></li>
                                   <li><a href="#">Вентилятори</a></li>
                                   <li><a href="#">Водонагрівачі</a></li>
                                   <li><a href="#">Робота з повітрям</a></li>
                                   <li><a href="#">Кондиціонери</a></li>
                                   <li><a href="#">Обігрівачі</a></li>
                                   <li><a href="#">Котли</a></li>
                                   <li><a href="#">Теплові насоси</a></li>
                                   <li><a href="#">Метео прилади</a></li>
                                   <li><a href="#">Аксесуари до кліматичної техніки</a></li>
                               </ul>
                               <ul class="col-xl-3">
                                   <li><strong>Кліматична техніка</strong></li>
                                   <li><a href="#">Вентилятори</a></li>
                                   <li><a href="#">Водонагрівачі</a></li>
                                   <li><a href="#">Робота з повітрям</a></li>
                                   <li><a href="#">Кондиціонери</a></li>
                                   <li><a href="#">Обігрівачі</a></li>
                                   <li><a href="#">Котли</a></li>
                                   <li><a href="#">Теплові насоси</a></li>
                                   <li><a href="#">Метео прилади</a></li>
                                   <li><a href="#">Аксесуари до кліматичної техніки</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
        @show
        @yield('content')

        <script src="{{ asset('js/app.js') }}" defer></script>

    </body>
</html>
