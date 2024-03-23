<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login_register.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="{{ asset('images/loqo_tek.jpg') }}" type="image/x-icon">

    <title>Sign Up</title>
</head>

<body>
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
    </div>
    <div class="row">
        <img class="b_img_yan" src="{{ asset('images/login_img_yan.jpg') }}" alt="b_img" />
        <div>
            <img class="b_img" src="{{ asset('images/login_img_duz.jpg') }}" alt="b_img" />
        </div>
        <div class="col b_login_sag">
            <h1>
                Create an account
            </h1>
            <p>
                Plese create an account to continue using our service
            </p>

            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="row b_inputs">
                    <div class="col-1">
                        <svg width="576" height="72" viewBox="0 0 576 72" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect width="64" height="64" rx="16" fill="#503E9D" fill-opacity="0.1" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M38 26C38 22.6863 35.3137 20 32 20C28.6863 20 26 22.6863 26 26C26 29.3137 28.6863 32 32 32C35.3137 32 38 29.3137 38 26ZM29 26C29 24.3431 30.3431 23 32 23C33.6569 23 35 24.3431 35 26C35 27.6569 33.6569 29 32 29C30.3431 29 29 27.6569 29 26ZM32 33.5C36.005 33.5 44 35.495 44 39.5V44H20V39.5C20 35.495 27.995 33.5 32 33.5ZM22.85 39.5C22.85 38.54 27.545 36.35 32 36.35C36.455 36.35 41.15 38.54 41.15 39.5V41.15H22.85V39.5Z"
                                fill="#503E9D" />
                        </svg>
                    </div>
                    <div class="col">
                        <input value="{{ old('name') }}" class="b_input_text" type="text" name="name"
                            placeholder="Name">
                        @error('name')
                            <p style="position: absolute" class=" alert alert-danger text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                </div>

                <div class="row  b_inputs">
                    <div class="col-1">
                        <svg width="576" height="72" viewBox="0 0 576 72" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect width="64" height="64" rx="16" fill="#503E9D" fill-opacity="0.1" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M22.4 23H41.6C42.9255 23 44 24.0633 44 25.375V39.625C44 40.9367 42.9255 42 41.6 42H22.4C21.068 42 20 40.9312 20 39.625V25.375C20 24.0569 21.068 23 22.4 23ZM32 31.3125L41.6 25.375H22.4L32 31.3125ZM41.6 28.1894V39.625H22.4V28.1894L32 34.115L41.6 28.1894Z"
                                fill="#503E9D" />
                        </svg>
                    </div>
                    <div class="col">
                        <input value="{{ old('email') }}" class="b_input_text" type="text" name="email"
                            placeholder="Email" />
                        @error('email')
                            <p style="position: absolute" class=" alert alert-danger text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>

                <div class="row  b_inputs">
                    <div class="col-1">
                        <svg width="576" height="72" viewBox="0 0 576 72" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect width="64" height="64" rx="16" fill="#503E9D" fill-opacity="0.1" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M44 44V39.2L34.088 29.288C34.292 28.628 34.4 27.932 34.4 27.2C34.4 23.2235 31.1764 20 27.2 20C23.2235 20 20 23.2235 20 27.2C20 31.1764 23.2235 34.4 27.2 34.4C27.932 34.4 28.628 34.292 29.288 34.088L32 36.8H35.6V40.4H39.2V44H44ZM23.6 26C23.6 24.6745 24.6745 23.6 26 23.6C27.3255 23.6 28.4 24.6745 28.4 26C28.4 27.3255 27.3255 28.4 26 28.4C24.6745 28.4 23.6 27.3255 23.6 26Z"
                                fill="#503E9D" />
                        </svg>
                    </div>
                    <div class="col">
                        <input class="b_input_text" type="password" name="password" placeholder="Password" />
                        @error('password')
                            <p style="position: absolute" class=" alert alert-danger text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="b_button">Create an account</button>
            </form>
            <br>
            <span class="b_signin_link">Already have an accounts?
                <a href="login">Sign In</a></span>
        </div>
    </div>
</body>

</html>
