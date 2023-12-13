<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
    <div class="vw-100">
        <div class="container">
            <div class="row"> 
                <div class="col-8">
                    <nav class="navbar navbar-expand-lg bg-body-tertiary">
                        <ul class="nav">
                            <li class="nav-items"><a href="" class="nav-link">Home</a></li>
                            <li class="nav-items"><a href="" class="nav-link">About</a></li>
                            <li class="nav-items"><a href="" class="nav-link">Content</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-4 d-flex justify-content-end">
                    <a href="">FB</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row m-4">
        <div class="col-3 text-center">@yield('treeStart')</div>
        <div class="col-6 text-center">@yield('six')</div>
        <div class="col-3 text-center">@yield('treeEnd')</div>
    </div>
</body>
</html>