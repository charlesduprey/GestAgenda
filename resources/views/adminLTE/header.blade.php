<?php
/**
 * Created by PhpStorm.
 * User: guill_000
 * Date: 10/12/2015
 * Time: 22:18
 */
?>
        <!-- Main Header -->
<header class="main-header">

    <!-- Logo -->


    @if(auth()->guest())
        <a href="page1" class="logo"><b>Gest</b>agenda</a>
    @else
        <a href="auth/login" class="logo"><b>Gest</b>agenda</a>
    @endif


    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                @if(auth()->guest())
                    <li><a href="{{ url('/auth/login') }}">Se connecter</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ auth()->user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/auth/logout') }}">Déconnexion</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
</header>