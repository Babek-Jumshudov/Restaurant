<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login_register.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="shortcut icon" href="{{ asset('images/loqo_tek.jpg') }}" type="image/x-icon">

    <title>Forgot</title>
</head>

<body>
    <div class="contain">
        <img class="b_img_yan" src="{{ asset('images/login_img_yan.jpg') }}" alt="b_img" />
        <div>
            <img class="b_img" src="{{ asset('images/login_img_duz.jpg') }}" alt="b_img" />
        </div>
        <div class="col b_login_sag" style="width: 600px; position: relative; top: 25vh;">
            <h1>Forgot password? </h1>
            <p>Please enter your email address to continue</p>
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
            <div class="row b_inputs">
                <div class="col-1">
                    <svg width="576" height="72" viewBox="0 0 576 72" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect width="64" height="64" rx="16" fill="#503E9D" fill-opacity="0.1" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M22.4 23H41.6C42.9255 23 44 24.0633 44 25.375V39.625C44 40.9367 42.9255 42 41.6 42H22.4C21.068 42 20 40.9312 20 39.625V25.375C20 24.0569 21.068 23 22.4 23ZM32 31.3125L41.6 25.375H22.4L32 31.3125ZM41.6 28.1894V39.625H22.4V28.1894L32 34.115L41.6 28.1894Z"
                            fill="#503E9D" />
                    </svg>
                </div>
                <form action="{{ route('send.email') }}">
                    @csrf
                    <div class="col">
                        <input class="b_input_text" type="text" name="email" placeholder="Email" />
                    </div>
                    <input type="button" class="b_button_continue" value="Continue">

            </div>

        </div>
        <div class="reset_password_bg">
            <div class="reset_password">
                <div class="reset_svg">
                    <i id="reset_exit" class="fa-solid fa-plus" style="font-size: 30px; transform: rotate(45deg)"></i>
                    <svg width="576" height="72" viewBox="0 0 576 72" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect width="64" height="64" rx="16" fill="#503E9D" fill-opacity="0.1" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M22.4 23H41.6C42.9255 23 44 24.0633 44 25.375V39.625C44 40.9367 42.9255 42 41.6 42H22.4C21.068 42 20 40.9312 20 39.625V25.375C20 24.0569 21.068 23 22.4 23ZM32 31.3125L41.6 25.375H22.4L32 31.3125ZM41.6 28.1894V39.625H22.4V28.1894L32 34.115L41.6 28.1894Z"
                            fill="#503E9D" />
                    </svg>
                </div>
                <h2>
                    Reset email sent
                </h2>
                <p>
                    We have just sent an email with a password reset link to
                    <span style="font-weight: bold" id="b_input_span"></span>
                </p>
                <div class="row">
                    <button type="submit" class="b_reset_button_gotit">Got it</button>
                    <button class="b_reset_button_send">Send again</button>
                </div>
            </div>
        </div>
        </form>

    </div>
    <script>
        const reset_exit = document.getElementById("reset_exit");
        const reset_password_bg = document.querySelector(".reset_password_bg");
        const reset_password = document.querySelector(".reset_password");
        const b_reset_button_send = document.querySelector(".b_reset_button_send");
        const b_button_continue = document.querySelector(".b_button_continue");
        const b_input_text = document.querySelector(".b_input_text");
        const b_input_span = document.getElementById("b_input_span");

        b_reset_button_send.addEventListener("click", () => {
            reset_password_bg.style.display = "none";
            reset_password.style.display = "none";
        });

        b_button_continue.addEventListener("click", () => {
            reset_password_bg.style.display = "block";
            reset_password.style.display = "block";
            const email = b_input_text.value;
            b_input_span.textContent = email;
        });

        reset_exit.addEventListener("click", () => {
            reset_password_bg.style.display = "none";
            reset_password.style.display = "none";
        });
        b_input_span.value = b_input_text.value;
    </script>


</body>

</html>
