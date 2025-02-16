<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link type="image/png" sizes="96x96" rel="icon" href="{{ asset('img/raio.png') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"/>
    <style>
.toast-success {
    background-color: #28a745 !important; /* Verde para sucesso */
}

.toast-error {
    background-color: #dc3545 !important; /* Vermelho para erro */
}

.toast-info {
    background-color: #17a2b8 !important; /* Azul para informação */
}

.toast-warning {
    background-color: #ffc107 !important; /* Amarelo para aviso */
}

</style>

    <title>Horizonte P4 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image text-center p-5"><h1 class="h4 text-gray-900 mb-4">SISTEMA DE P4 </br>
                        <img src="{{ asset('img/logo_300.png') }}"> </br> RAIO HORIZONTE </h1></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">LOGIN</h1>
                                    </div>
                                    <form class="user" method="POST" action="{{ route('login') }}">
    @csrf <!-- Token CSRF necessário -->
    <div class="form-group">
        <input type="email" class="form-control form-control-user" id="exampleInputEmail" name="email" aria-describedby="emailHelp" placeholder="Digite o email..." required>
    </div>
    <div class="form-group">
        <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="password" placeholder="Senha" required>
    </div>
    <div class="form-group">
        <div class="custom-control custom-checkbox small">
            <input type="checkbox" class="custom-control-input" id="customCheck" name="remember">
            <label class="custom-control-label" for="customCheck">Lembrar-me</label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-user btn-block">
        Login
    </button>
    <hr>
</form>

                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="">Esqueceu sua senha? Recupere-a</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>


    <script>
    // Configurações globais do Toastr
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    // Exibir as mensagens dependendo do tipo de flash message da sessão
    @if(session('success'))
        toastr.success("{{ session('success') }}", "Sucesso");
    @elseif(session('error'))
        toastr.error("{{ session('error') }}", "Erro");
    @elseif(session('info'))
        toastr.info("{{ session('info') }}", "Informação");
    @elseif(session('warning'))
        toastr.warning("{{ session('warning') }}", "Aviso");
    @endif
</script>

    <!-- Incluindo TOASTR JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

     {!! Toastr::render() !!}

@include('layouts.footer')  
</body>

</html>