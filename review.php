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


    <!-- 口コミ投稿画面 -->
    <div class="container mt-5">
        <div class="row h2 mt-5">口コミ投稿画面</div>
        <div class="row">
            ユーザー名（任意）<input type="text" class="form-control" placeholder="ユーザー名" aria-label="ユーザー名">
        </div>
        <div class="row mt-3">
            評価
            <div class="col-2">
                <select class="form-select" aria-label="select example">
                    <option selected>１</option>
                    <option value="2">２</option>
                    <option value="3">３</option>
                    <option value="4">４</option>
                    <option value="5">５</option>
                </select>
            </div>
        </div>
        <div class="row mt-3">
            メールアドレス<input type="text" class="form-control" placeholder="メールアドレス" aria-label="メールアドレス">
        </div>
        <div class="row mt-3">
            コメント
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" maxlength="300"></textarea>
        </div>
        <div class="row mt-3">
            <input class="form-control" type="file" id="formFile">
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-4 text-center">
                <a class="" href="product_index.php">
                    <button type="button" class="btn btn-primary">投稿</button>
                </a>
            </div>
        </div>
    </div>

    <footer id="footer" class="p-3 text-bg-dark">
        <?php include_once('footer.html'); ?>
    </footer>

</body>

</html>