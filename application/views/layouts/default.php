<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ХПКК</title>
    <link href="/public/styles/main.css" rel="stylesheet">
    <script src="/public/scripts/jquery.js"></script>
    <script src="/public/scripts/form.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/public/styles/index.css">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        .stroke {
            font: 2em Arial, sans-serif;
            text-shadow: #000000 1px 1px 0, #000000 -1px -1px 0,
            #000000 -1px 1px 0, #000000 1px -1px 0;
        }
    </style>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;"    >
        <div class="container-fluid">
            <a class="navbar-brand" href="/">ХПКК</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/entrant">АБІТУРІЄНТАМ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/advertisement">ОГОЛОШЕННЯ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/study">ДИСТАНЦІЙНЕ НАВЧАННЯ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/eduactiv">ОСВІТНЯ ДІЯЛЬНІСТЬ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/achiev">ДОСЯГНЕННЯ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/reference">ДОВІДКОВА</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex" href="https://www.instagram.com/khpcc_kh/">
                            <img src="/public/images/instagram.png" alt="" width="30" height="30">
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="https://www.facebook.com/compcollege">
                            <img src="/public/images/facebook.png" alt="" width="30" height="30">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<?php echo $content; ?>
<hr class="featurette-divider">
<footer class="container">
    <div class="row">
        <div class="footer_widgets">
            <div class="col-md-3 col-sm-6">
                <h4>Контакти:</h4>
                <ul>
                    <li>61002 вул. Ярослава Мудрого 18</li>
                    <li>Станція метро Пушкінська або Універстет</li>
                    <li>Телефон: (057)700-48-17 або (057)700-48-15</li>

                </ul>
            </div>
        </div>
    </div>
    <p class="float-end"><a href="#">Back to top</a></p>
</footer>
</body>

</html>