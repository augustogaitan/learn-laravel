<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="token" content="{!! csrf_token() !!}"/>
    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/metisMenu.min.css')!!}
    {!!Html::style('css/sb-admin-2.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}
    <!--{!!Html::style('css/bootstrap-modal.css')!!}-->
    {!!Html::style('less/modals.less')!!}
    {!!Html::style('less/type.less')!!}
    {!!Html::style('less/close.less')!!}
    {!!Html::style('less/scaffolding.less')!!}


</head>

<body>

    <div id="wrapper">

        
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Ferreteria Admin</a>
            </div>
           

            <ul class="nav navbar-top-links navbar-right">
                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        {!!Auth::User()->name;!!}<i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Usuario<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('usuario/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('usuario')!!}"><i class='fa fa-list-ol fa-fw'></i> Usuarios</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-product-hunt" aria-hidden="true"></i>Productos <span class="fa arrow"></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('productos/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                    
                                </li>
                                <li>
                                    <a href="{!!URL::to('productos')!!}"><i class='fa fa-list-ol fa-fw'></i> Productos   </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-product-hunt" aria-hidden="true"></i>Categorias <span class="fa arrow"></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('categorias/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                    
                                </li>
                                <li>
                                    <a href="{!!URL::to('categorias')!!}"><i class='fa fa-list-ol fa-fw'></i> Categorias   </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-product-hunt" aria-hidden="true"></i>Empleado<span class="fa arrow"></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('categorias/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                    
                                </li>
                                <li>
                                    <a href="{!!URL::to('categorias')!!}"><i class='fa fa-list-ol fa-fw'></i> Empleados   </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-product-hunt" aria-hidden="true"></i>Facturas <span class="fa arrow"></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('facturas/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                    
                                </li>
                                <li>
                                    <a href="{!!URL::to('facturas')!!}"><i class='fa fa-list-ol fa-fw'></i> Facturas   </a>
                                </li>
                            </ul>
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-product-hunt" aria-hidden="true"></i>Clientes <span class="fa arrow"></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('clientes/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                    
                                </li>
                                <li>
                                    <a href="{!!URL::to('clientes')!!}"><i class='fa fa-list-ol fa-fw'></i> Clientes   </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-film fa-fw"></i> Pelicula<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="#"><i class='fa fa-list-ol fa-fw'></i> Peliculas</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-child fa-fw"></i> Genero<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="#"><i class='fa fa-list-ol fa-fw'></i> Generos</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>

     </nav>

        <div id="page-wrapper">
            @yield('content')
        </div>

    </div>

   


    {!!Html::script('js/jquery.min.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/metisMenu.min.js')!!}
    {!!Html::script('js/sb-admin-2.js')!!}
    {!!Html::script('js/scripts.js')!!}


</body>

</html>
