<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/orders.css') }}" />
    <link rel="stylesheet" href="orders.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="{{ asset('images/loqo_tek.jpg') }}" type="image/x-icon">
    <title>Orders</title>
</head>

<body>
    <div class="row b_sag_sol">
        @component('layout.menu')
        @endcomponent
        <div class=" b_div_sag">
            <!--------------------------------- header NAVBAR ----------------------------->
            @component('layout.navbar')
            @endcomponent
            <nav >
                <h5 style="color: white;position: relative;left: 106.7%;width: 25px;top: -126px;padding-left: 6px;border-radius: 20px;background: red;">
                    {{ $basgets->count() }}
                </h5>
            </nav>
            <!--------------------------------- PRODUCTS ------------------------------------>
            <div class="b_div_sag_products ">
                <div class="container " style="
                padding: 50px;
            ">
                    <div class="divs1"style="overflow: auto">
                        <div class="mr-2">
                            <h5>Upcoming orders</h5>
                            <div class="cards">
                                <div class="card0">
                                    <p>
                                        <b class="title">Burger King</b> <span class="id">#1Df90E</span>
                                    </p>
                                    <div class="div">
                                        <div class="time">
                                            <i class="fa-regular fa-clock"></i>
                                            <span>Estimated arrival <br />
                                                <b>35 min</b>
                                            </span>
                                        </div>
                                        <button class="btn1">Track</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h5>Upcoming orders</h5>
                            <div class="cards">
                                <div class="card0">
                                    <p>
                                        <b class="title">Burger King</b> <span class="id">#1Df90E</span>
                                    </p>
                                    <div class="div">
                                        <div class="time">
                                            <i class="fa-regular fa-clock"></i>
                                            <span>Estimated arrival <br />
                                                <b>35 min</b>
                                            </span>
                                        </div>
                                        <button class="btn1">Track</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="divs2"style="overflow: auto">
                        <div class="s_container">
                            <h5>Previous orders</h5>
                            <div class="cards">
                                <div class="card_2">
                                    <p>
                                        <b class="title">Pizza Hut</b>
                                        <button class="btn_2">Completed</button>
                                    </p>
                                    <div class="div">
                                        <div class="time_2">
                                            <span><i class="fa-regular fa-calendar"></i> September 16, 2020</span>
                                            <span> <i class="fa-regular fa-clock"></i> 11:54 PM </span>
                                            <h6><b>1</b> <span> Delicious Cheese Pie</span></h6>
                                            <h6><b>1</b> <span> Peperoni Pie</span></h6>
                                            <div class="btn_group">
                                                <button class="details">Details</button>
                                                <button class="help">Get help</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="s_container">
                            <h5>Previous orders</h5>
                            <div class="cards">
                                <div class="card_2">
                                    <p>
                                        <b class="title">Pizza Hut</b>
                                        <button class="btn_2">Completed</button>
                                    </p>
                                    <div class="div">
                                        <div class="time_2">
                                            <span><i class="fa-regular fa-calendar"></i> September 16, 2020</span>
                                            <span> <i class="fa-regular fa-clock"></i> 11:54 PM </span>
                                            <h6><b>1</b> <span> Delicious Cheese Pie</span></h6>
                                            <h6><b>1</b> <span> Peperoni Pie</span></h6>
                                            <div class="btn_group">
                                                <button class="details">Details</button>
                                                <button class="help">Get help</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="s_container">
                            <h5>Previous orders</h5>
                            <div class="cards">
                                <div class="card_2">
                                    <p>
                                        <b class="title">Pizza Hut</b>
                                        <button class="btn_2">Completed</button>
                                    </p>
                                    <div class="div">
                                        <div class="time_2">
                                            <span><i class="fa-regular fa-calendar"></i> September 16, 2020</span>
                                            <span> <i class="fa-regular fa-clock"></i> 11:54 PM </span>
                                            <h6><b>1</b> <span> Delicious Cheese Pie</span></h6>
                                            <h6><b>1</b> <span> Peperoni Pie</span></h6>
                                            <div class="btn_group">
                                                <button class="details">Details</button>
                                                <button class="help">Get help</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="divs2"style="overflow: auto">

                        <div class="s_container">
                            <h5>Previous orders</h5>
                            <div class="cards">
                                <div class="card_2">
                                    <p>
                                        <b class="title">Pizza Hut</b>
                                        <button class="btn_2">Completed</button>
                                    </p>
                                    <div class="div">
                                        <div class="time_2">
                                            <span><i class="fa-regular fa-calendar"></i> September 16, 2020</span>
                                            <span> <i class="fa-regular fa-clock"></i> 11:54 PM </span>
                                            <h6><b>1</b> <span> Delicious Cheese Pie</span></h6>
                                            <h6><b>1</b> <span> Peperoni Pie</span></h6>
                                            <div class="btn_group">
                                                <button class="details">Details</button>
                                                <button class="help">Get help</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="s_container">
                            <h5>Previous orders</h5>
                            <div class="cards">
                                <div class="card_2">
                                    <p>
                                        <b class="title">Pizza Hut</b>
                                        <button class="btn_2">Completed</button>
                                    </p>
                                    <div class="div">
                                        <div class="time_2">
                                            <span><i class="fa-regular fa-calendar"></i> September 16, 2020</span>
                                            <span> <i class="fa-regular fa-clock"></i> 11:54 PM </span>
                                            <h6><b>1</b> <span> Delicious Cheese Pie</span></h6>
                                            <h6><b>1</b> <span> Peperoni Pie</span></h6>
                                            <div class="btn_group">
                                                <button class="details">Details</button>
                                                <button class="help">Get help</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>

</body>

</html>
