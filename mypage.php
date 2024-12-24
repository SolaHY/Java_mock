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

    <!-- マイページ-->
    <div class="container">
        <div class="row h2 mt-5">マイページ</div>
        <div class="row mt-5">
            <div class="col">
                <div class="row">
                    <div class="col-6">
                        名前:
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        メールアドレス:
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        電話番号:
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