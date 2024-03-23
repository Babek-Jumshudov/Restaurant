<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="{{ asset('images/loqo_tek.jpg') }}" type="image/x-icon">

    <title>Detals</title>
</head>

<body>

    <div class="row b_sag_sol" style="overflow: hidden">
        <!--------------------------------- menu ----------------------------->
        @component('layout.menu')
        @endcomponent
        <div class=" b_div_sag">
            <!--------------------------------- header NAVBAR ----------------------------->
            @component('layout.navbar')
            @endcomponent
            <nav>
                <h5
                    style="color: white;position: relative;left: 106.7%;width: 25px;top: -125px;padding-left: 6px;border-radius: 20px;background: red;">
                    {{ $basgets->count() }}
                </h5>
            </nav>
            <!--------------------------------- PRODUCTS ------------------------------------>
            <div class="b_div_sag_products ">
                <div class="container" style="overflow: auto; width: 100% ;height: 83vh;">
                    <img style="position: relative; z-index:-1; opacity: 0.6; width: 100%; height: 24vh;"
                        src="{{ asset('images/menu_bg.jpg') }}" alt="Background photo">
                    <div class="messege"
                        style="height: 85px; background: #f8fffa; top: 80%; right: 2%; border-radius: 12px; position: fixed; z-index: 2; ">
                        @if (session('success'))
                            <div class="alert alert-success">
                                <i style="font-size: 35px;position: relative;color: rgb(6, 179, 6);left: 40%;"
                                    class="fa-solid fa-check"></i></i><br>
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger">
                                <i style="font-size: 35px;position: relative;color: red;left: 40%;"
                                    class="fa-solid fa-circle-xmark"></i><br>
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>
                    <button
                        style="border: none; background: none; outline: none;position: relative;
                    top: -25%;
                    left: 95%;">
                        <i id="fav_icon" style="/* color: #f70d6e; */color: rgb(5, 91, 202);font-size: 35px;"
                            class="fa-solid fa-bookmark"></i>
                    </button>
                    <img style="background: #ffffff;padding: 5px;top: -86px;width: 100px;position: relative;left: 41%;border-radius: 10px;box-shadow: -1px -3px 20px 0px #4441416b;"
                        src="{{ asset($seller->image) }}">
                    <div style="margin-top: -8%">

                        <h3> {{ $seller->name }}</h3>
                        <p> Quod, delectus commodi suscipit esse
                            magnam iure eum ullam iste odio. Incidunt quia minima nisi ipsa?
                        </p>
                        {{-- ------------------- star ------------------- --}}
                        <svg style=" margin-right: -50px;" width="82" height="18" viewBox="0 0 82 18"
                            fill="none" xmlns="http://www.w3.org/2000/svg">

                            <path
                                d="M8 13.8589L12.944 17L11.632 11.08L16 7.09684L10.248 6.57474L8 1L5.752 6.57474L0 7.09684L4.36 11.08L3.056 17L8 13.8589Z"
                                fill="#FACD5D" />

                        </svg>
                        <span style="font-size: 11px;position: relative;color: #787878;left: -20px;">
                            {{ $seller->star }}
                        </span>
                        {{-- ------------------- category ------------------- --}}
                        <svg width="47" height="18" viewBox="0 0 47 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">

                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6 6.6H7.66667V1H9.33333V6.6C9.33333 8.296 7.95 9.672 6.20833 9.776V17H4.125V9.776C2.38333 9.672 1 8.296 1 6.6V1H2.66667V6.6H4.33333V1H6V6.6ZM11.8333 10.6V4.2C11.8333 2.792 13.7 1 16 1V17H13.9167V10.6H11.8333Z"
                                fill="#A3A3A4" />
                        </svg>
                        <span style="font-size: 14px;color: #888888;position: relative;left: -23px;">
                            {{ $seller->category }}
                        </span>
                        {{-- ------------------- usd ------------------- --}}
                        <svg width="45" height="18" viewBox="0 0 45 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M30.0703 11.3691C30.0703 11.9004 29.8711 12.3398 29.4727 12.6875C29.0742 13.0312 28.5176 13.248 27.8027 13.3379V14.6973H27.0469V13.3906C26.6094 13.3906 26.1855 13.3574 25.7754 13.291C25.3652 13.2207 25.0293 13.125 24.7676 13.0039V12.0898C25.0918 12.2344 25.4648 12.3535 25.8867 12.4473C26.3125 12.5371 26.6992 12.582 27.0469 12.582V10.0039C26.2461 9.75 25.6836 9.45508 25.3594 9.11914C25.0391 8.7832 24.8789 8.34961 24.8789 7.81836C24.8789 7.30664 25.0762 6.88672 25.4707 6.55859C25.8691 6.23047 26.3945 6.03125 27.0469 5.96094V4.89453H27.8027V5.94922C28.5215 5.96875 29.2148 6.11328 29.8828 6.38281L29.5781 7.15039C28.9961 6.91992 28.4043 6.7832 27.8027 6.74023V9.2832C28.416 9.47852 28.875 9.66992 29.1797 9.85742C29.4844 10.041 29.709 10.2539 29.8535 10.4961C29.998 10.7344 30.0703 11.0254 30.0703 11.3691ZM29.0742 11.4453C29.0742 11.1641 28.9863 10.9375 28.8105 10.7656C28.6387 10.5898 28.3027 10.416 27.8027 10.2441V12.5234C28.6504 12.4062 29.0742 12.0469 29.0742 11.4453ZM25.8691 7.80664C25.8691 8.10352 25.957 8.3418 26.1328 8.52148C26.3086 8.70117 26.6133 8.87109 27.0469 9.03125V6.76367C26.6602 6.82617 26.3672 6.94922 26.168 7.13281C25.9688 7.3125 25.8691 7.53711 25.8691 7.80664ZM36.9375 11.3691C36.9375 11.9004 36.7383 12.3398 36.3398 12.6875C35.9414 13.0312 35.3848 13.248 34.6699 13.3379V14.6973H33.9141V13.3906C33.4766 13.3906 33.0527 13.3574 32.6426 13.291C32.2324 13.2207 31.8965 13.125 31.6348 13.0039V12.0898C31.959 12.2344 32.332 12.3535 32.7539 12.4473C33.1797 12.5371 33.5664 12.582 33.9141 12.582V10.0039C33.1133 9.75 32.5508 9.45508 32.2266 9.11914C31.9062 8.7832 31.7461 8.34961 31.7461 7.81836C31.7461 7.30664 31.9434 6.88672 32.3379 6.55859C32.7363 6.23047 33.2617 6.03125 33.9141 5.96094V4.89453H34.6699V5.94922C35.3887 5.96875 36.082 6.11328 36.75 6.38281L36.4453 7.15039C35.8633 6.91992 35.2715 6.7832 34.6699 6.74023V9.2832C35.2832 9.47852 35.7422 9.66992 36.0469 9.85742C36.3516 10.041 36.5762 10.2539 36.7207 10.4961C36.8652 10.7344 36.9375 11.0254 36.9375 11.3691ZM35.9414 11.4453C35.9414 11.1641 35.8535 10.9375 35.6777 10.7656C35.5059 10.5898 35.1699 10.416 34.6699 10.2441V12.5234C35.5176 12.4062 35.9414 12.0469 35.9414 11.4453ZM32.7363 7.80664C32.7363 8.10352 32.8242 8.3418 33 8.52148C33.1758 8.70117 33.4805 8.87109 33.9141 9.03125V6.76367C33.5273 6.82617 33.2344 6.94922 33.0352 7.13281C32.8359 7.3125 32.7363 7.53711 32.7363 7.80664ZM43.8047 11.3691C43.8047 11.9004 43.6055 12.3398 43.207 12.6875C42.8086 13.0312 42.252 13.248 41.5371 13.3379V14.6973H40.7812V13.3906C40.3438 13.3906 39.9199 13.3574 39.5098 13.291C39.0996 13.2207 38.7637 13.125 38.502 13.0039V12.0898C38.8262 12.2344 39.1992 12.3535 39.6211 12.4473C40.0469 12.5371 40.4336 12.582 40.7812 12.582V10.0039C39.9805 9.75 39.418 9.45508 39.0938 9.11914C38.7734 8.7832 38.6133 8.34961 38.6133 7.81836C38.6133 7.30664 38.8105 6.88672 39.2051 6.55859C39.6035 6.23047 40.1289 6.03125 40.7812 5.96094V4.89453H41.5371V5.94922C42.2559 5.96875 42.9492 6.11328 43.6172 6.38281L43.3125 7.15039C42.7305 6.91992 42.1387 6.7832 41.5371 6.74023V9.2832C42.1504 9.47852 42.6094 9.66992 42.9141 9.85742C43.2188 10.041 43.4434 10.2539 43.5879 10.4961C43.7324 10.7344 43.8047 11.0254 43.8047 11.3691ZM42.8086 11.4453C42.8086 11.1641 42.7207 10.9375 42.5449 10.7656C42.373 10.5898 42.0371 10.416 41.5371 10.2441V12.5234C42.3848 12.4062 42.8086 12.0469 42.8086 11.4453ZM39.6035 7.80664C39.6035 8.10352 39.6914 8.3418 39.8672 8.52148C40.043 8.70117 40.3477 8.87109 40.7812 9.03125V6.76367C40.3945 6.82617 40.1016 6.94922 39.9023 7.13281C39.7031 7.3125 39.6035 7.53711 39.6035 7.80664Z"
                                fill="#626264" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M14.4 3H1.6C0.712 3 0 3.6675 0 4.5V13.5C0 14.3284 0.716344 15 1.6 15H14.4C15.2837 15 16 14.3284 16 13.5V4.5C16 3.6675 15.28 3 14.4 3ZM14.4 13.5H1.6V4.5H14.4V13.5ZM8.8 12.75H7.2V12H5.6V10.5H8.8V9.75H6.4C5.95817 9.75 5.6 9.41421 5.6 9V6.75C5.6 6.33579 5.95817 6 6.4 6H7.2V5.25H8.8V6H10.4V7.5H7.2V8.25H9.6C10.0418 8.25 10.4 8.58579 10.4 9V11.25C10.4 11.6642 10.0418 12 9.6 12H8.8V12.75Z"
                                fill="#A3A3A4" />
                        </svg>
                        <span
                            style=" font-size: 10px; color: #503e9d;  border-radius: 5px;  position: relative; padding: 4px;  background: #eeecf6;">
                            {{ $seller->delivery }}
                        </span>
                        {{-- ------------------- location ------------------- --}}
                        <svg style="position: relative; left: 15px;" width="62" height="18" viewBox="0 0 62 18"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M7.2 1.84394C3.86271 2.21286 1.21286 4.86271 0.843943 8.2H0V9.8H0.843943C1.21286 13.1373 3.86271 15.7871 7.2 16.1561V17H8.8V16.1561C12.1373 15.7871 14.7871 13.1373 15.1561 9.8H16V8.2H15.1561C14.7871 4.86271 12.1373 2.21286 8.8 1.84394V1H7.2V1.84394ZM3.2 8.2H2.45671C2.80752 5.74745 4.74745 3.80752 7.2 3.45671V4.2H8.8V3.45671C11.2526 3.80752 13.1925 5.74745 13.5433 8.2H12.8V9.8H13.5433C13.1925 12.2526 11.2526 14.1925 8.8 14.5433V13.8H7.2V14.5433C4.74745 14.1925 2.80752 12.2526 2.45671 9.8H3.2V8.2ZM8 10.6C8.88366 10.6 9.6 9.88366 9.6 9C9.6 8.11634 8.88366 7.4 8 7.4C7.11634 7.4 6.4 8.11634 6.4 9C6.4 9.88366 7.11634 10.6 8 10.6ZM4.8 9C4.8 10.7673 6.23269 12.2 8 12.2C9.76731 12.2 11.2 10.7673 11.2 9C11.2 7.23269 9.76731 5.8 8 5.8C6.23269 5.8 4.8 7.23269 4.8 9Z"
                                fill="#A3A3A4" />
                        </svg>
                        <span style="font-size: 11px;position: relative;color: #787878;left: -30px;">
                            {{ $seller->distance }}
                        </span>
                    </div>
                    <br>
                    <div class="catalogs">
                        <input class="btn btn-success" type="button" value="Popular">
                        <input class="btn btn-success" type="button" value="Popular">
                        <input class="btn btn-success" type="button" value="Popular">
                        <input class="btn btn-success" type="button" value="Popular">
                        <input class="btn btn-success" type="button" value="Popular">
                        <input class="btn btn-success" type="button" value="Popular">
                    </div>


                    <div class="images" style="display: flex; justify-content: space-between">
                        @foreach ($products as $product)
                            @if ($product->star >= 5)
                                <div
                                    style="display: flex;flex-wrap: wrap;padding: 5px;justify-content: space-between;">
                                    <img class="mt-3" src="{{ asset($product->image) }}"
                                        style="width: 230px; height: 110px; border-radius: 15px;">
                                    <div
                                        style="
                                    display: flex;
                                    justify-content: space-between;
                                    width: 95%;
                                    align-items: baseline;
                                ">
                                        <b>{{ $product->name }}</b>
                                        <h6
                                            style=" font-size: 10px; color: #503e9d;  border-radius: 5px;  position: relative; padding: 4px;  background: #eeecf6;">
                                            {{ $seller->delivery }}</h6>
                                    </div>

                                    <div class="container">
                                        <span style="font-size: 11px;position: relative;color: #787878;left: -20px;">
                                            <svg style=" margin-right: -50px;" width="82" height="18"
                                                viewBox="0 0 82 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">

                                                <path
                                                    d="M8 13.8589L12.944 17L11.632 11.08L16 7.09684L10.248 6.57474L8 1L5.752 6.57474L0 7.09684L4.36 11.08L3.056 17L8 13.8589Z"
                                                    fill="#FACD5D" />

                                            </svg>
                                            <span style="position: relative; left: -17px">{{ $product->star }}</span>
                                        </span>

                                        <span style="font-size: 11px;position: relative;color: #787878;left: -20px;">
                                            <svg width="47" height="18" viewBox="0 0 47 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">

                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M6 6.6H7.66667V1H9.33333V6.6C9.33333 8.296 7.95 9.672 6.20833 9.776V17H4.125V9.776C2.38333 9.672 1 8.296 1 6.6V1H2.66667V6.6H4.33333V1H6V6.6ZM11.8333 10.6V4.2C11.8333 2.792 13.7 1 16 1V17H13.9167V10.6H11.8333Z"
                                                    fill="#A3A3A4" />
                                            </svg>
                                            <span
                                                style="position: relative; left: -27px">{{ $product->category }}</span>
                                        </span>

                                        <span style="font-size: 11px;position: relative;color: #787878;left: -20px;">
                                            <svg style="position: relative; left: -15px;" width="62"
                                                height="18" viewBox="0 0 62 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M7.2 1.84394C3.86271 2.21286 1.21286 4.86271 0.843943 8.2H0V9.8H0.843943C1.21286 13.1373 3.86271 15.7871 7.2 16.1561V17H8.8V16.1561C12.1373 15.7871 14.7871 13.1373 15.1561 9.8H16V8.2H15.1561C14.7871 4.86271 12.1373 2.21286 8.8 1.84394V1H7.2V1.84394ZM3.2 8.2H2.45671C2.80752 5.74745 4.74745 3.80752 7.2 3.45671V4.2H8.8V3.45671C11.2526 3.80752 13.1925 5.74745 13.5433 8.2H12.8V9.8H13.5433C13.1925 12.2526 11.2526 14.1925 8.8 14.5433V13.8H7.2V14.5433C4.74745 14.1925 2.80752 12.2526 2.45671 9.8H3.2V8.2ZM8 10.6C8.88366 10.6 9.6 9.88366 9.6 9C9.6 8.11634 8.88366 7.4 8 7.4C7.11634 7.4 6.4 8.11634 6.4 9C6.4 9.88366 7.11634 10.6 8 10.6ZM4.8 9C4.8 10.7673 6.23269 12.2 8 12.2C9.76731 12.2 11.2 10.7673 11.2 9C11.2 7.23269 9.76731 5.8 8 5.8C6.23269 5.8 4.8 7.23269 4.8 9Z"
                                                    fill="#A3A3A4" />
                                            </svg>
                                            <span>{{ $product->distance }}</span>
                                        </span>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>

                </div>
            </div>
</body>

</html>
