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

    <!-- カート追加画面 -->
    <div class="container">
        <div class="row h2 mt-5">カート追加画面</div>
        <div class="row mt-5">
            <div class="col">
                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
            </div>
            <div class="col">
                <div class="row">
                    商品名：
                </div>
                <div class="row mt-3">
                    個数：
                </div>
                <div class="row mt-3">
                    カート内の合計：
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <a class="" href="purchase_top.php">
                    <button type="button" class="btn btn-primary">レジに進む</button>
                </a>
            </div>
            <div class="col">
                <a class="" href="cart_detail.php">
                    <button type="button" class="btn btn-primary">カートに移動</button>
                </a>
            </div>
            <div class="col">
                <a class="" href="top.php">
                    <button type="button" class="btn btn-primary">TOP画面に戻る</button>
                </a>
            </div>
        </div>
    </div>

    <footer id="footer" class="p-3 text-bg-dark">
        <?php include_once('footer.html'); ?>
    </footer>
</body>

</html>