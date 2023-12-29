<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/home.css')); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="<?php echo e(asset('images/loqo_tek.jpg')); ?>" type="image/x-icon">

    <title>Order</title>
</head>

<body>

    <div class="row b_sag_sol">
        <!--------------------------------- menu ----------------------------->
        <?php $__env->startComponent('layout.menu'); ?>
        <?php echo $__env->renderComponent(); ?>

        <div class=" b_div_sag">
            <!--------------------------------- header NAVBAR ----------------------------->
            <?php $__env->startComponent('layout.navbar'); ?>
            <?php echo $__env->renderComponent(); ?>
            <nav>
                <h5
                    style="color: white;position: relative;left: 106.7%;width: 25px;top: -125px;padding-left: 6px;border-radius: 20px;background: red;">
                    <?php echo e($basgets->count()); ?>

                </h5>
            </nav>
            <?php $__env->startComponent('layout.message'); ?>
            <?php echo $__env->renderComponent(); ?>
            <!--------------------------------- PRODUCTS ------------------------------------>
            <div class="b_div_sag_products ">

                <div class="container"
                    style="
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
            ">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="asian_box" style="width: 30% ; margin: 10px">
                            <img style="width: 100%; border-radius:15px" src="<?php echo e(asset($prod->image)); ?>">
                            <span>
                                <p><?php echo e($prod->name); ?></p>
                                <span
                                    style=" font-size: 10px; color: #503e9d;  border-radius: 5px;  position: relative; padding: 4px;  background: #eeecf6;">
                                    <?php echo e($prod->delivery); ?>

                                </span>
                                <form action="<?php echo e(route('basget', ['id' => $prod->id])); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <button style="border:none; background:white; outline: none" type="submit">______
                                        <svg style="margin-top: -26px" viewBox="0 0 48 48" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="48" height="48" rx="10" fill="#FB6D3A" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M14 14V16H16L19.6 23.59L18.24 26.04C18.09 26.32 18 26.65 18 27C18 28.1046 18.8954 29 20 29H32V27H20.42C20.2819 27 20.17 26.8881 20.17 26.75C20.17 26.7 20.18 26.66 20.2 26.63L21.1 25H28.55C29.3 25 29.96 24.58 30.3 23.97L33.88 17.5C33.95 17.34 34 17.17 34 17C34 16.4477 33.5523 16 33 16H18.21L17.27 14H14ZM30 30C28.89 30 28 30.89 28 32C28 33.1046 28.8954 34 30 34C31.1046 34 32 33.1046 32 32C32 30.89 31.1 30 30 30ZM18 32C18 30.89 18.89 30 20 30C21.1 30 22 30.89 22 32C22 33.1046 21.1046 34 20 34C18.8954 34 18 33.1046 18 32Z"
                                                fill="white" />
                                        </svg>
                                    </button>
                                </form>
                            </span>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

</body>

</html>
<?php /**PATH D:\Web Proyektlerim\Final Project\resources\views/home/products.blade.php ENDPATH**/ ?>