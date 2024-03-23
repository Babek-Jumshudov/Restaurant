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

    <title>Basget</title>
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

            <!--------------------------------- PRODUCTS ------------------------------------>
            <div class="b_div_sag_products ">
                <div class="container" style="overflow: auto; width: 100% ;height: 64vh;">

                    <div class="messege"
                        style="
                height: 85px;
                background: #f8fffa;
                top: 80%;
                right: 2%;
                border-radius: 12px;
                position: fixed;
                z-index: 2;
            ">
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
                    <table class="table table-hover ml-4" style="
                    width: 97%;
                ">
                        <thead >
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Ad</th>
                                <th scope="col">Şəkil</th>
                                <th scope="col">Sil</th>
                            </tr>
                        </thead>
                        <tbody>
                            @csrf
                            @foreach ($products as $product)
                                @foreach ($basgets as $basget)
                                    @if ($product->id === $basget->id)
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>
                                                <img style="width: 250px; border-radius: 18px;"
                                                    src="{{ asset($product->image) }}">
                                            </td>
                                            <td>
                                                <form action="{{ route('basget.delete', ['basget' => $basget->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Sil</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <hr>
                <div style="height: 10vh">
                    <h4>Ümumi sifariş sayı: <b style="color: red">{{ $basgets->count() }}</b></h4>
                    <button type="submit" class="btn btn-warning"
                        style="margin-left: 90%;position: relative;top: -40px;">Order
                    </button>
                </div>
            </div>
</body>

</html>
