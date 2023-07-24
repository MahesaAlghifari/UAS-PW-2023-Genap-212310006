<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakmie Joko</title>
    <!-- Include your CSS and JavaScript files -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <!-- Add your navigation, header, or other common elements -->
    <?php if(
        !in_array(request()->route()->getName(),
            ['article.index', 'menu.index','ulasan.index'])): ?>
        <header>
            <?php echo $__env->make('templates.header.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </header>
    <?php else: ?>
        <header>
            <?php echo $__env->make('templates.header.navbarAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </header>
    <?php endif; ?>

    <div>
        <?php echo $__env->yieldContent('content'); ?>
    </div>


    <?php if(
        !in_array(request()->route()->getName(),
            ['article.index', 'menu.index','ulasan.index'])): ?>
        <header>
            <?php echo $__env->make('templates.footer.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </header>
    <?php else: ?>
        <header>
            <?php echo $__env->make('templates.footer.footerAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </header>
    <?php endif; ?>


    <!-- Include your JavaScript files -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <script src="js/script.js"></script>
</body>

</html>
<?php /**PATH E:\Xampp\htdocs\crudtest\resources\views/layouts/app.blade.php ENDPATH**/ ?>