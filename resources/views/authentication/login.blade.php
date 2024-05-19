@include('layouts.login.head')
<body class="bg-gray-200">
    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-100"
            style="background-image: url('https://innclod.com/wp-content/uploads/2019/04/blue_bg.png');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container my-auto">
                <div class="row">
                    <div class="col-lg-4 col-md-8 col-12 mx-auto">
                        <div class="card z-index-0 fadeIn3 fadeInBottom">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                    <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Iniciar sesión</h4>
                                </div>
                            </div>

                            <div class="card-body">
                                <form role="form" class="text-start" action="{{ route('login') }}" method="POST" autocomplete="off">
                                    @csrf
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Correo electrónico</label>
                                        <input type="email" class="form-control" id="email" name="email">
                                    </div>
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">Contraseña</label>
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div>
                                    @if ($errors->any())
                                    <div class="text-danger">
                                            @foreach ($errors->all() as $error)
                                                <span class="mb-5">{{ $error }}</span><br>
                                            @endforeach
                                    </div>
                                @endif
                                    <div class="text-center">
                                        <button type="submit"
                                            class="btn bg-gradient-primary w-100 my-4 mb-2">Ingresar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.login.footer')
