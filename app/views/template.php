<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Главная</title>
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="/lib/bootstrap/css/bootstrap.min.css" />
    <!-- jQuery -->
    <script src="/lib/js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <!-- Datatables css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>
    <!-- Main style -->
    <link rel="stylesheet" type="text/css" href="/lib/css/style.css" />
    <!-- Main js -->
    <script src="/lib/js/main.js" type="text/javascript"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand">Приложение-задачник</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/main">Задачи</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/addtask">Создать задачу</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo empty($_SESSION['user_name']) ? 'Аноним' : $_SESSION['user_name']; ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <?php echo empty($_SESSION['user_name']) ? '<a class="dropdown-item" data-toggle="modal" data-target="#loginModal">Вход</a>' : '<a class="dropdown-item end-session" href="/main">Выход</a>'; ?>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Форма входа</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/app/handlers/handler_login.php" method="post">
                        <div class="form-group">
                            <label for="formLogin">Логин</label>
                            <input type="text" class="form-control" id="formLogin" name="login" placeholder="Введите логин">
                        </div>
                        <div class="form-group">
                            <label for="formPassword">Пароль</label>
                            <input type="password" class="form-control" id="formPassword" name="password" placeholder="Введите пароль">
                        </div>
                        <button type="submit" class="btn btn-primary">Вход</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="toast position-fixed" role="alert" aria-live="assertive" aria-atomic="true" data-delay="2000" style="top: 70px; right: 20px">
        <div class="toast-header">
            <strong class="mr-auto">Информация</strong>
        </div>
        <div class="toast-body"></div>
    </div>
    <div class="content-body">
        <?php include 'app/views/'.$content_view; ?>
    </div>

    <!-- Bootstrap js -->
    <script src="/lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Datatables js -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>

</body>
</html>