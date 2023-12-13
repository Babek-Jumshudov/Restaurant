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
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('email'))
                    <div class="alert alert-warning">
                        {{ session('email') }}
                    </div>
                @endif
                <table border="1">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Delivery</th>
                        <th>Category</th>
                        <th>Delet</th>
                    </tr>

                    @foreach ($products as $prod)
                        <tr>
                            <td>{{ $prod->id }}</td>
                            <td><img src="{{ asset($prod->image) }}"></td>
                            <td>{{ $prod->name }}</td>
                            <td>{{ $prod->delivery }}</td>
                            <td>{{ $prod->category }}</td>
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
                    <input type="file" name="image" /><br>
                    <input type="text" class="form-control" placeholder="Name" name="name" /><br>
                    <select class="form-select" name="delivery">
                        <option value="Free Delivery">Free Delivery</option>
                        <option value="9.99$ Delivery">9.99$ Delivery</option>
                    </select><br>
                    <select class="form-select" name="category">
                        <option value="Pizza">Pizza</option>
                        <option value="Burger">Burger</option>
                        <option value="Fish">Fish</option>
                        <option value="Chicken">Chicken</option>
                    </select>
                    <button type="submit" class="btn">Gonder</button>
                </form>
            </div>
        </div>
    </div>
    <button class="btn" id="add">+ Add to</button>
    <script src="{{ asset('js/admin.js') }}"></script>

</body>

</html>
