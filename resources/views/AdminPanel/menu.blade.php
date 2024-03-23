<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('images/loqo_tek.jpg') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="contain">
        <div class="contain">
            @component('layout.adminMenu')
            @endcomponent
            <div class="right">
                <div class="messege"
                style="
        height: 85px;
        background: #f8fffa;
        top: 80%;
        right: 2%;
        box-shadow: 17px 7px 20px 4px #2c2c2c;
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
                <table border="1">
                    <tr>
                        <th>Id</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Delivery</th>
                        <th>Star</th>
                        <th>Category</th>
                        <th>Distance</th>
                        <th>delet</th>
                    </tr>
                    @foreach ($products as $prod)
                        <tr>
                            <td>{{ $prod->id }}</td>
                            <td><img src="{{ asset($prod->image) }}"></td>
                            <td>{{ $prod->name }}</td>
                            <td>{{ $prod->delivery }}</td>
                            <td>{{ $prod->star }}</td>
                            <td>{{ $prod->category }}</td>
                            <td>{{ $prod->distance }}</td>
                            <form action="{{ route('product.delete', ['product' => $prod->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <td> <button type="submit"><i class="fa-solid fa-trash"></i></button></td>
                            </form>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
        <div class="poupup" id="poupup">
            <button class="close" id="close">X</button>
            <div class="inputgroup">
                <form enctype="multipart/form-data" method='POST' action="{{ route('product.creat') }}">
                    @csrf
                    <input type="file" name="image" placeholder="Add photo" /><br>
                    <input type="text" class="form-control" name="name" placeholder="Add name" /><br>
                    <select class="form-control" name="delivery">
                        <option value="Free Delivery">Free Delivery</option>
                        <option value="9.99$ Delivery">9.99$ Delivery</option>
                    </select><br> <input type="number" class="form-control" name="star"
                        placeholder="Add star" /><br>
                    <select class="form-control" name="category">
                        <option value="Chicken">Chicken</option>
                        <option value="Asian">Asian</option>
                        <option value="Rice">Rice</option>
                        <option value="Skewers">Skewers</option>
                        <option value="Vegetables">Vegetables</option>
                        <option value="Pie">Pie</option>
                        <option value="Desserts">Desserts</option>
                        <option value="Pizza">Pizza</option>
                        <option value="Burger">Burger</option>
                        <option value="Fish">Fish</option>
                    </select><br>
                    <select class="form-control" name="distance">
                        <option value="5-10 min">5-10 min</option>
                        <option value="15-20 min">15-20 min</option>
                        <option value="25-30 min">25-30 min</option>
                        <option value="35-40 min">35-40 min</option>
                        <option value="45-50 min">45-50 min</option>
                        <option value="55-60 min">55-60 min</option>

                    </select>
                    <button class="btn" type="submit">Gonder</button>
                </form>
            </div>
        </div>
    </div>
    <button class="btn" id="add">+ Add to</button>
    <script src="{{ asset('js/admin.js') }}"></script>

</body>

</html>
