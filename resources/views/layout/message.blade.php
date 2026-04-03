<style>
    #message {
        height: 85px;
        background: #f8fffa;
        top: 80%;
        right: 2%;
        border-radius: 12px;
        position: fixed;
        z-index: 2;
        margin-right: -500px;
    }
</style>
<div id="message" class="message">
    @if (session('success'))
        <div class="alert alert-success" style="box-shadow: 0px 0px 20px 5px  rgb(6, 179, 6)">
            <i style="font-size: 35px;position: relative;color: rgb(6, 179, 6);left: 40%;"
                class="fa-solid fa-check"></i></i><br>
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger" style="box-shadow: 0px 0px 20px 5px red">
            <i style="font-size: 35px;position: relative;color: red;left: 40%;" class="fa-solid fa-circle-xmark"></i><br>
            {{ session('error') }}
        </div>
    @endif
    @if (session('info'))
        <div class="alert alert-info" style="box-shadow: 0px 0px 20px 5px rgb(0, 153, 255)">
            <i style="font-size: 35px;position: relative;color: rgb(0, 153, 255);left: 40%;"
                class="fa-solid fa-info"></i><br>
            {{ session('info') }}
        </div>
    @endif
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const message = document.getElementById("message");

        setTimeout(() => {
            message.style.transition = 'margin-right 0.8s ease-out';
            message.style.marginRight = '0';

            setTimeout(() => {
                message.style.transition = 'margin-right 3s ease-out';
                message.style.marginRight = '-500px';

                setTimeout(() => {
                    message.style.display = 'none';
                }, 4000);
            }, 3000);
        });


    });
</script>
