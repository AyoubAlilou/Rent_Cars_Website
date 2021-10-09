<style>
    i{
        color: #D2BF37;

    }
</style>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <a href="#" class="nav-link">
                        <div class="profile-image">
                            <!--                            <img class="img-xs rounded-circle" src="images/faces/face8.jpg" alt="profile image">-->
                            <div class="dot-indicator bg-success"></div>
                        </div>
                        <div class="text-wrapper">
                            <?php
                            echo    "<p class='profile-name'> ". $_SESSION['name']." </p> ";
                            if($_SESSION['role'] =="admin")
                                echo"<p class='designation'>Administrator</p>";
                            else{
                                echo"<p class='designation'>Mannager</p>";
                            }
                            ?>
                        </div>
                        <div class="icon-container">
                            <i class="icon-bubbles"></i>
                            <div class="dot-indicator bg-danger"></div>
                        </div>
                    </a>
                </li>
                <li class="nav-item nav-category">
                    <span style="color: #D2BF37;" class="nav-link">Dashboard</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo host; ?>/Stellar-master/HomeAdmin.php" >
                        <span class="menu-title">Dashboard</span>
                        <i class="icon-screen-desktop menu-icon"></i>
                    </a>
                </li>
                <!--                <li class="nav-item nav-category"><span class="nav-link">UI Elements</span></li>-->
                <!--                <li class="nav-item">-->
                <!--                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">-->
                <!--                        <span class="menu-title">Basic UI Elements</span>-->
                <!--                        <i class="icon-layers menu-icon"></i>-->
                <!--                    </a>-->
                <!--                    <div class="collapse" id="ui-basic">-->
                <!--                        <ul class="nav flex-column sub-menu">-->
                <!--                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>-->
                <!--                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>-->
                <!--                        </ul>-->
                <!--                    </div>-->
                <!--                </li>-->
                <!--                <li class="nav-item">-->
                <!--                    <a class="nav-link" href="pages/icons/simple-line-icons.html">-->
                <!--                        <span class="menu-title">Icons</span>-->
                <!--                        <i class="icon-globe menu-icon"></i>-->
                <!--                    </a>-->
                <!--                </li>-->
                <?php if ($_SESSION["role"]=="admin"){
                    echo" <li class='nav-item'>
                    <a class='nav-link' href=".host."/Stellar-master/php/add-gest.php>
                        <span class='menu-title'>Add Manager</span>
                        <i class='icon-user-follow menu-icon'></i>
                    </a>
                </li>

                <li class='nav-item'>
                    <a class='nav-link' href=".host."/Stellar-master/php/basic-table.php>
                        <span class='menu-title'>List Manager</span>
                        <i class='icon-grid menu-icon'></i>
                    </a>
                </li>";
                }?>
                <?php if ($_SESSION["role"]=="Manager"){
                    echo" <li class='nav-item'>
                    <a class='nav-link' href=".host."/Stellar-master/php/add-car.php>
                        <span class='menu-title'>Add Cars</span>
                        <i class='icon-plus menu-icon'></i>
                    </a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href=".host."/Stellar-master/php/list-car.php>
                        <span class='menu-title'>list cars</span>
                        <i class='icon-list menu-icon'></i>
                    </a>
                </li>  <li class='nav-item'>
                    <a class='nav-link' href=".host."/Stellar-master/php/facture.php>
                        <span class='menu-title'>facture</span>
                        <i class=' icon-calculator menu-icon'></i>
                    </a>
                </li>
                

               ";
                }?>
                <!--                <li class="nav-item nav-category"><span class="nav-link">Sample Pages</span></li>-->
                <!--                <li class="nav-item">-->
                <!--                    <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">-->
                <!--                        <span class="menu-title">General Pages</span>-->
                <!--                        <i class="icon-doc menu-icon"></i>-->
                <!--                    </a>-->
                <!--                    <div class="collapse" id="auth">-->
                <!--                        <ul class="nav flex-column sub-menu">-->
                <!--                            <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>-->
                <!--                            <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>-->
                <!--                            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>-->
                <!--                            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>-->
                <!--                            <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>-->
                <!--                        </ul>-->
                <!--                    </div>-->
                <!--                </li>-->
                <!--                <li class="nav-item pro-upgrade">-->
                <!--              <span class="nav-link">-->
                <!--                <a class="btn btn-block px-0 btn-rounded btn-upgrade" href="https://www.bootstrapdash.com/product/stellar-admin-template/" target="_blank"> <i class="icon-badge mx-2"></i> Upgrade to Pro</a>-->
                <!--              </span>-->
                <!--                </li>-->
            </ul>
        </nav>
