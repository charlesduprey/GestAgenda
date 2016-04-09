<?php
/**
 * Created by PhpStorm.
 * User: guill_000
 * Date: 10/12/2015
 * Time: 22:18
 */
?>

<header class="main-header">
    <!-- Logo -->
    @if(auth()->guest())
    <!-- Navbar Right Menu -->
    <a href="{{ url('/') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Gest</b>Agenda</span>
    </a>
    @else
    <!-- Navbar Right Menu -->
    <a href="{{ url('/page1') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Gest</b>Agenda</span>
    </a>
    @endif
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                @if(auth()->guest())
                    <li><a href="{{ url('/auth/login') }}">Se connecter</a></li>
                @else
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="bower_components/admin-lte/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs">{{ auth()->user()->prenom }} {{ auth()->user()->nom }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="bower_components/admin-lte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                <p>
                                    {{ auth()->user()->prenom }} {{ auth()->user()->nom }} - Web Developer
                                    <small>Membre depuis {!! auth()->user()->created_at !!}</small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-right">
                                    <a href="{{ url('/auth/logout') }}" class="btn btn-default btn-flat">Déconnexion</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
</header>