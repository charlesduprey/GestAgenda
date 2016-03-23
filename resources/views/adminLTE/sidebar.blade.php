<?php
/**
 * Created by PhpStorm.
 * User: guill_000
 * Date: 10/12/2015
 * Time: 22:23
 */
?>

<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Rechercher..."/>
          <span class="input-group-btn">
            <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
          </span>
            </div>
        </form>
            <!-- /.search form -->
        <!-- Sidebar Menu -->
        @if(auth()->guest())
        @else
            <ul class="sidebar-menu">
                <li class="header">MENU</li>
                <!-- Optionally, you can add icons to the links -->
                <li class="active"><a href="#"><span>Gestion de l'agenda</span></a></li>
                <li><a href="#"><span>Gestion des devoirs</span></a></li>
                <li class="treeview">
                    <a href="#"><span>Utilisateurs</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="index">Liste des utilisateurs</a></li>
                        <li><a href="#">Link in level 2</a></li>
                    </ul>
                </li>
            </ul><!-- /.sidebar-menu -->
        @endif
    </section>
    <!-- /.sidebar -->
</aside>