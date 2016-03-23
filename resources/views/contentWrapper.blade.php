<?php
/**
 * Created by PhpStorm.
 * User: guill_000
 * Date: 10/12/2015
 * Time: 22:30
 */
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        @if(auth()->guest())
            @if(Request::is('auth/register'))
                <h1>
                    Enregistrement
                    <small>Formulaire pour s'enregistrer</small>
                </h1>
            @endif
            @if(Request::is('auth/login'))
                    <h1>
                        Se connecter
                        <small>Connectez-vous</small>
                    </h1>
            @endif
            @if(Request::is('password/email'))
                <h1>
                    Mot de passe
                    <small>Réinitialisation</small>
                </h1>
            @endif
        @endif

        @if(Request::is('user'))
            <h1>
                Liste des utilisateurs
                <small>infos</small>
            </h1>
        @endif

        @if(Request::is('user/create'))
            <h1>
                Mot de passe
                <small>Réinitialisation</small>
            </h1>
        @endif

        <!-- Scripts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </section>

    <!-- Main content -->
    <section class="content">

        @yield('contenu')

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
