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


    <!-- カート詳細画面 -->

    <div class="container">
        <div class="row h2 mt-5">カート詳細画面</div>
        <div class="row mt-5">
            <div class="col">
                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
            </div>
            <div class="col">
                <div class="row">
                    商品名：
                </div>
                <div class="row mt-3">
                    数量：
                </div>
                <div class="col-6"><select class="form-select mb-3" aria-label="select example">
                        <option selected>１</option>
                        <option value="2">２</option>
                        <option value="3">３</option>
                        <option value="4">４</option>
                        <option value="5">５</option>
                    </select>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-danger">削除</button>
                </div>
                <div class="row mt-3">
                    価格：
                </div>
                <div class="row mt-3">
                    消費税込み金額：
                </div>
            </div>


            <!-- サイドバー -->
            <div class="col-3 border">
                <div class="row mt-2">
                    <div class="col">
                        <a class="" href="add_cart.php">
                            <button type="button" class="btn btn-primary">カートに入れる</button>
                        </a>
                    </div>

                </div>
                <div class="row mt-2">
                    <div class="col">
                        <div class="h5">個数：</div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <div class="h5">金額：</div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <div class="h5">消費税込み金額：</div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <a class="" href="purchase_top.php">
                            <button type="button" class="btn btn-primary">レジに進む</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer id="footer" class="p-3 text-bg-dark">
        <?php include_once('footer.html'); ?>
    </footer>

</body>

</html>