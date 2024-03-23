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
                        <th>Username</th>
                        <th>Email</th>
                        <th>Delete</th>
                    </tr>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <form action="{{ route('admin.delete', ['user' => $user->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>
</body>

</html>
