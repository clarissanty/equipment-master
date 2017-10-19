<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper light-blue darken-4">
            <div class="container">
                <div class="row">
                    <a href="<?php $baseUrl; ?>index.php" class="brand-logo">
                        PERALATAN
                    </a>
                    <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi mdi-menu"></i></a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="<?php $baseUrl; ?>index.php">Beranda</a></li>
                        <li><a href="<?php $baseUrl; ?>index.php?page=home&action=input">Input Data Baru</a></li>
                        <li><a href="<?php $baseUrl; ?>index.php?page=home&action=list">Data Peralatan</a></li>
                        <li><a href="<?php $baseUrl; ?>index.php?page=auth&action=logout" class="btn-delete">Keluar</a></li>
                      
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>

<ul id="slide-out" class="side-nav">
    <li><div class="userView">
            <div class="background">
                <img src="<?php $baseUrl; ?>public/img/book.jpg" class="responsive-img">
            </div>
            <a href="#!user"><img class="circle" src="<?php $baseUrl;?>public/img/logo.png"></a>
            <a href="#!name"><span class="white-text name">Peralatan</span></a>
        </div></li>
    <li><div class="divider"></div></li>
    <li><a class="waves-effect" href="<?php $baseUrl; ?>index.php">Beranda</a></li>
    <li><a class="waves-effect" href="<?php $baseUrl; ?>index.php?page=home&action=input">Input Data Baru</a></li>
    <li><a class="waves-effect" href="<?php $baseUrl; ?>index.php?page=home&action=list">Data Peralatan</a></li>
    <li class="divider"></li>
    <li><a href="<?php $baseUrl; ?>index.php?page=home&action=logout" class="btn-delete">Keluar</a></li>
</ul>
