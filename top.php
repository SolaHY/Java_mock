<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>


<body class="vh-100">

    <header id="header" class="p-3 text-bg-dark">
        <?php include_once('header.html'); ?>
    </header>

    <!-- top画面 -->
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row h2 mt-5">TOP画面</div>
        <div class="row h3 justify-content-center my-5 bg-warning">セール品</div>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <div class="col mb-5">
                <a class="" href="product_detail.php">
                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                </a>
            </div>
            <div class="col mb-5">
                <a class="" href="product_detail.php">
                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                </a>
            </div>
            <div class="col mb-5">
                <a class="" href="product_detail.php">
                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                </a>
            </div>
            <div class="col mb-5">
                <a class="" href="product_detail.php">
                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                </a>
            </div>
            <div class="col mb-5">
                <a class="" href="product_detail.php">
                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                </a>
            </div>
        </div>
    </div>

    <footer id="footer" class="p-3 text-bg-dark">
        <?php include_once('footer.html'); ?>
    </footer>

</body>

</html>