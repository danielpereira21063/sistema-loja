<nav class="navbar navbar-expand-lg fixed-top navbar-dark navbar-offcanvas"
    style="background-color: #22282e;">
    <div class="container-fluid">
        <button class="navbar-toggler d-block" type="button" id="navToggle">
            <span class="navbar-toggler-icon"></span><small>Menu</small>
        </button>
        <a class="navbar-brand" href="http://127.0.0.1/web-store">
            <img class="img-brand mb-1" src="">
            Web-Store
        </a>
        <div class="navbar-collapse offcanvas-collapse">
            <ul class="navbar-nav">
                <!-- ############################################################## -->
                <li class="nav-item">
                    <a class="nav-link" href="<?=BASE_URL?>"><i class="fa fa-home"></i> Inicio<a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=BASE_URL?>/index.php?a=sobre"><i
                            class="fa fa-info-circle ms-2"></i>Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=BASE_URL?>/index.php?a=login"><i
                            class="fa fa-sign-in ms-2"></i>Entrar</a>
                </li>
                <li class="nav-item mr-1">
                    <a class="nav-link" href="<?=BASE_URL?>/index.php?a=signup"><i
                            class="fa fa-user-plus ms-2"></i>Cadastrar-se</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    $(document).ready(function () {
        $('[data-toggle="offcanvas"], #navToggle').on('click', function () {
            $('.offcanvas-collapse').toggleClass('open');
        });
        $('[data-toggle="offcanvas"], .navbar-collapse').on('mouseleave', function () {
            $('#navToggle').click();
        });
    });
</script>