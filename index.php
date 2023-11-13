<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- fa icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="templates/styles/btn_type_A.css">
    <link rel="stylesheet" href="templates/styles/btn_light.css">
    <link rel="stylesheet" href="templates/styles/base.css">
    <link rel="stylesheet" href="templates/styles/index.css">
    <title>Dashboard</title>
</head>

<body>
    <div class="div_top">
        <div class="navbar_d1">
            <img src="https://www.antioquia.gov.co/images/PDF2/Comunicaciones/imagen-de-marca/logo.svg" alt="GOV.CO" class="gov_logo">
        </div>
        <nav class="navbar navbar-expand-lg navbar_d2">
            <div class="container">
                <a href="https://antioquia.gov.co/" class="ans_logo">
                    <img src="https://www.mintransporte.gov.co/info/mintransporte/media/pubInt/thumbs/thpub_700x400_10745.jpg" alt="Logo Gobernacion Antioquia" class="ans_logo">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <?php
                        session_start();

                        // Comprueba si la sesión está iniciada
                        if (!isset($_SESSION['username'])) {
                        ?>
                            <li class="nav-item m-1">
                                <a href="templates/login.php">
                                    <button class="button-light">Iniciar Sesión   <i class="fa fa-sign-in" aria-hidden="true"></i></button>
                                </a>
                            </li>

                        <?php
                        } else {
                        ?>
                            <li class="nav-item m-1"><a href="templates/admin.php"><button class="button-light">Administración</button></a></li>
                            <li class="nav-item m-1">
                                <form action="processes/logout.php" method="post">
                                    <button class="button-light">Cerrar Sesión</button>
                                </form>
                            </li>

                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <main class="dashboard">

    </main>
</body>

</html>