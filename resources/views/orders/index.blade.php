<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/orders.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="{{ asset('images/loqo_tek.jpg') }}" type="image/x-icon">
    <title>Orders</title>
    <style>
        .grid-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(2, 1fr);
            column-gap: 2px;
        }
    </style>
</head>

<body>
    <div class="row b_sag_sol">
        @component('layout.menu')
        @endcomponent
        <div class=" b_div_sag">
            @component('layout.navbar')
            @endcomponent
            <nav>
                <h5
                    style="color: white; position: relative; left: 106.7%; width: 25px; top: -126px; padding-left: 6px; border-radius: 20px; background: red;">
                    {{ $basgets->count() }}
                </h5>
            </nav>
            <div class="b_div_sag_products ">
                @if (isset($orders))
                    <div class="container">
                        <div class="container grid-container">
                            @foreach ($orders as $order)
                                @foreach ($products as $product)
                                    @if ($product->id === $order->product_id)
                                        <div class="divs2">
                                            <div class="s_container">
                                                <div class="cards">
                                                    <div class="card_2 pt-5">
                                                        <p>
                                                            <b class="title">{{ $product->name }}</b>
                                                            <button class="btn_2">Completed</button>
                                                        </p>
                                                        <div class="div">
                                                            <div class="time_2">
                                                                <span><i class="fa-regular fa-calendar"></i> {{ date('d-m-Y H:i') }}</span>
                                                                <span><i class="fa-regular fa-clock"></i>
                                                                    {{ $product->distance }} </span>
                                                                <h6><b>Category:</b> {{ $product->category }}</h6>
                                                                <div class="btn_group">
                                                                    <button class="details">Detallar</button>
                                                                    <button class="help">Ləğv et</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                @else
                    <h1
                        style="text-align: center; margin-top: 150px; color:rgba(255, 0, 0, 0.603); font-style: italic;">
                        Sifariş yoxdur..
                    </h1>
                @endif
            </div>

        </div>
    </div>
</body>

</html>
