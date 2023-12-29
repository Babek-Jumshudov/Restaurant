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
    <?php if(session('success')): ?>
        <div class="alert alert-success" style="box-shadow: 0px 0px 20px 5px  rgb(6, 179, 6)">
            <i style="font-size: 35px;position: relative;color: rgb(6, 179, 6);left: 40%;"
                class="fa-solid fa-check"></i></i><br>
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
    <?php if(session('error')): ?>
        <div class="alert alert-danger" style="box-shadow: 0px 0px 20px 5px red">
            <i style="font-size: 35px;position: relative;color: red;left: 40%;" class="fa-solid fa-circle-xmark"></i><br>
            <?php echo e(session('error')); ?>

        </div>
    <?php endif; ?>
    <?php if(session('info')): ?>
        <div class="alert alert-info" style="box-shadow: 0px 0px 20px 5px rgb(0, 153, 255)">
            <i style="font-size: 35px;position: relative;color: rgb(0, 153, 255);left: 40%;"
                class="fa-solid fa-info"></i><br>
            <?php echo e(session('info')); ?>

        </div>
    <?php endif; ?>
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
<?php /**PATH D:\Web Proyektlerim\Final Project\resources\views/layout/message.blade.php ENDPATH**/ ?>