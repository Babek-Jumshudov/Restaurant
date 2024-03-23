<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('images/loqo_tek.jpg') }}" type="image/x-icon">
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
                        <th>Name</th>
                        <th>Image</th>
                        <th>Delivery</th>
                        <th>Category</th>
                        <th>Star</th>
                        <th>Distance</th>
                        <th>Delet</th>
                    </tr>

                    @foreach ($products as $prod)
                        <tr>
                            <td>{{ $prod->id }}</td>
                            <td><img src="{{ asset($prod->image) }}"></td>
                            <td>{{ $prod->name }}</td>
                            <td>{{ $prod->delivery }}</td>
                            <td>{{ $prod->category }}</td>
                            <td>{{ $prod->star }}</td>
                            <td>{{ $prod->distance }}</td>
                            <form action="{{ route('seller.delete', ['seller' => $prod->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <td><button type="submit"><i class="fa-solid fa-trash"></i></button></td>
                            </form>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
        <div class="poupup" id="poupup">
            <button class="close" id="close">X</button>
            <div class="inputgroup">
                <form enctype="multipart/form-data" method='post' action="{{ route('seller.creat') }}">
                    @csrf
                    <label for="image">Image:</label>
                    <input type="file" name="image" /><br>
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" placeholder="Name" name="name" /><br>
                    <label for="delivery">Delivery:</label>
                    <select class="form-control" name="delivery">
                        <option value="Free Delivery">Free Delivery</option>
                        <option value="9.99$ Delivery">9.99$ Delivery</option>
                    </select><br>
                    <label for="category">Category:</label>
                    <select class="form-control" name="category">
                        <option value="Pizza">Pizza</option>
                        <option value="Burger">Burger</option>
                        <option value="Fish">Fish</option>
                        <option value="Chicken">Chicken</option>
                    </select><br>
                    <label for="star">Star:</label>
                    <select class="form-control" name="star">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select><br>
                    <label for="distance">Distance:</label>
                    <select class="form-control" name="distance">
                        <option value="0.3 km">0.3 km</option>
                        <option value="1.5 km">1.5 km</option>
                        <option value="4.2 km">4.2 km</option>
                        <option value="5.9 km">5.9 km</option>
                        <option value="7.6 km">7.6 km</option>
                        <option value="9.1 km">9.1 km</option>

                    </select><br><br><br>
                    <button type="submit" class="btn">Gonder</button>
                </form>
            </div>
        </div>
    </div>
    <button class="btn" id="add">+ Add to</button>
    <script src="{{ asset('js/admin.js') }}"></script>

</body>

</html>
