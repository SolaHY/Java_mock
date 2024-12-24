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

    <!-- 購入確認画面 -->
    <div class="container mt-5">
        <div class="row h2 mt-5">購入確認画面</div>
        <div class="row">
            名前：
        </div>
        <div class="row">
            住所：
        </div>
        <div class="row">
            アパート名：
        </div>
        <div class="row">
            商品名：
        </div>
        <div class="row">
            個数：
        </div>
        <div class="row">
            合計金額：
        </div>
        <div class="row mt-5">
            <div class="col-1">
                <a class="" href="purchase_top.php">
                    <button type="button" class="btn btn-danger">編集</button>
                </a>
            </div>
            <div class="col-1">
                <a class="" href="purchase_complete.php">
                    <button type="button" class="btn btn-primary">購入</button>
                </a>
            </div>
        </div>
    </div>

    <footer id="footer" class="p-3 text-bg-dark">
        <?php include_once('footer.html'); ?>
    </footer>

</body>

</html>