<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
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
            <div class="left">
                <div>
                    <a href="{{ route('admin.user') }}"><i class="fa-solid fa-user"></i> <span>Users</span></a>
                </div>
                <div>
                    <a href="{{ route('restaurant') }}"><i class="fa-solid fa-utensils"></i>
                        <span>Restaurants</span></a>
                </div>
                <div>
                    <a href="{{ route('menu') }}"><i class="fa-solid fa-burger"></i> <span>Menu</span></a>
                </div>
            </div>
            <div class="right">
                <table border="">
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
                            <td><img src="/images/{{$prod->image }}"></td>
                            {{-- <td><img src="/images/loqo_tek.jpg"></td> --}}
                            <td>{{ $prod->name }}</td>
                            <td>{{ $prod->delivery }}</td>
                            <td>{{ $prod->star }}</td>
                            <td>{{ $prod->category }}</td>
                            <td>{{ $prod->distance }}</td>
                            {{-- <form action="{{ route('user.delete', ['user' => $user->id]) }}" method="POST">
                        @csrf
                        @method('DELETE') --}}
                            <td><button type="submit"><i class="fa-solid fa-trash"></i></button></td>
                            {{-- </form> --}}
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
        <div class="poupup" id="poupup">
            <button class="close" id="close">X</button>
            <div class="inputgroup">
                <form action="{{ route('product.creat') }}">
                    @csrf
                    <input type="file" name="image" placeholder="Add photo" />
                    <input type="text" name="name" placeholder="Add name" />
                    <input type="text" name="delivery" placeholder="Add delivery" />
                    <input type="number" name="star" placeholder="Add star" />
                    <input type="text" name="category" placeholder="Add category" />
                    <input type="number" name="distance" placeholder="Add distance" />
                    <button type="submit">Gonder</button>
                </form>
            </div>
        </div>
    </div>
    <button class="btn" id="add">+ Add to</button>
    <script src="{{ asset('js/admin.js') }}"></script>

</body>

</html>
