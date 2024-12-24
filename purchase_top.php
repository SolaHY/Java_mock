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

    <!-- 購入詳細画面 カード情報、送付先情報-->
    <div class="container">
        <div class="row h2 mt-5">購入詳細画面</div>
        <div class="row mt-5">
            <div class="col-2">
                ＜受け取り場所＞
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-1">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                </div>
            </div>
            <div class="col border p-3">
                <div class="row">
                    <div class="col-6">
                        名前:
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        住所<input type="text" class="form-control" placeholder="住所" aria-label="住所">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        アパート名等<input type="text" class="form-control" placeholder="アパート名等" aria-label="アパート名等">
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-1">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                </div>
            </div>
            <div class="col border p-3">
                <div class="row">
                    <div class="col-6">
                        名前:
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        住所<input type="text" class="form-control" placeholder="住所" aria-label="住所">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        アパート名等<input type="text" class="form-control" placeholder="アパート名等" aria-label="アパート名等">
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-2">
                ＜お支払い情報＞
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-1">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                </div>
            </div>
            <div class="col border p-3">
                <div class="row">
                    <div class="col-6">
                        <input type="text" class="form-control" placeholder="カード番号" aria-label="カード番号">
                    </div>
                </div>
                <div class="col-3 mt-3"><input type="text" class="form-control" placeholder="有効期限 DD/YY" aria-label="有効期限 DD/YY">
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-1">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                </div>
            </div>
            <div class="col border p-3">
                <div class="row">
                    <div class="col-6">
                        <input type="text" class="form-control" placeholder="カード番号" aria-label="カード番号">
                    </div>
                </div>
                <div class="col-3 mt-3"><input type="text" class="form-control" placeholder="有効期限 DD/YY" aria-label="有効期限 DD/YY">
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <a class="" href="purchase_confirmation.php">
                    <button type="button" class="btn btn-primary">確認</button>
                </a>
            </div>
        </div>
    </div>

    <footer id="footer" class="p-3 text-bg-dark">
        <?php include_once('footer.html'); ?>
    </footer>

</body>

</html>