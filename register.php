<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>


<body class="vh-100">

    <!-- ユーザー新規登録画面 -->
    <div class="container">
        <div class="row h2 mt-5 justify-content-center">ユーザー新規登録画面</div>
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-5">
                <form class="">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">ユーザ名</label>
                        <input type="name" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">メールアドレス</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">パスワード</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">パスワード（確認用）</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="d-flex justify-content-between">
                        <a class="" href="login.php">
                            <button type="button" class="btn btn-primary">登録</button>
                        </a>
                        <a class="" href="login.php">
                            <button type="button" class="btn btn-danger">戻る</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>