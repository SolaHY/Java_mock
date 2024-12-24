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


    <!-- 商品詳細画面 -->
    <div class="container">
        <div class="row h2 mt-5">商品詳細画面</div>
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                    </div>
                    <div class="col">
                        <div class="row">
                            商品名：
                        </div>
                        <div class="row">
                            メーカー名：
                        </div>
                        <div class="row">
                            価格：
                        </div>
                        <div class="row">
                            税込価格：
                        </div>
                        <div class="row">
                            在庫数：
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="h4">＜口コミ＞</div>
                </div>
                <div class="row mt-2">
                    <div class="h5 col">ユーザー名：</div>
                    <div class="h5 col">投稿日時：</div>
                </div>
                <div class="row mt-1">
                    <div class="h5">コメント：</div>
                </div>
                <div class="row mt-1">
                    <div class="h5">評価（５段階）：</div>
                </div>

                <div class="row mt-1">
                    <div class="col">
                        <a class="" href="purchase_top.php">
                            <button type="button" class="btn btn-primary">単品購入</button>
                        </a>
                    </div>
                    <div class="col">
                        <a class="" href="review.php">
                            <button type="button" class="btn btn-primary">口コミ投稿</button>
                        </a>
                    </div>
                </div>
            </div>
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
                        <div class="h5">数量：</div>
                        <div class="col-6"><select class="form-select mb-3" aria-label="select example">
                                <option selected>１</option>
                                <option value="2">２</option>
                                <option value="3">３</option>
                                <option value="4">４</option>
                                <option value="5">５</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <div class="h5">価格：</div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <div class="h5">税込価格：</div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <div class="h5">在庫表示：</div>
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