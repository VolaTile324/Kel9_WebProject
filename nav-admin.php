<nav>
            <div class="logo-name">
                <div class="logo-image">
                    <img src="image/logo-admin.png" alt="">
                </div>
    
                <span class="logo_name">Seek Stack</span>
            </div>
            <div class="logo-name">
                <div class="logo-image">
                </div>
                <span class="logo_sub">Admin Panel</span>
            </div>
    
            <div class="menu-items">
                <ul class="nav-links">
                    <li><a href="admin.php">
                        <i class="uil uil-estate"></i>
                        <span class="link-name">Dahsboard</span>
                    </a></li>
                    <li><a href="data-perusahaan.php">
                        <i class="uil uil-files-landscapes"></i>
                        <span class="link-name">Data Perusahaan</span>
                    </a></li>
                    <li><a href="data-kategori.php">
                        <i class="uil uil-chart"></i>
                        <span class="link-name">Data Kategori</span>
                    </a></li>
                    <li><a href="data-transaksi.php">
                        <i class="uil uil-share"></i>
                        <span class="link-name">Data Transaksi</span>
                    </a></li>
                    <li><a href="data-subs.php">
                        <i class="uil uil-thumbs-up"></i>
                        <span class="link-name">Top Subscriber</span>
                    </a></li>
                </ul>
                
                <ul class="logout-mode">
                    <!-- The IF condition is probably unnecessary,
                    but Rhizka always have a backup plan :) -->
                    <!-- <?php if(!isset($_SESSION['session_user'])) : ?>
                        <li>
                            <a href="login.php">
                            <i class="uil uil-signin-alt"></i>
                            <span class="link-name">Login</span>
                            </a>
                        </li>
                    <?php else : ?> -->
                        <li>
                            <a href="index.php?logout='1'">
                            <i class="uil uil-signout"></i>
                            <span class="link-name">Logout</span>
                            </a>
                        </li>
                    <!-- <?php endif ?> -->
                    
                    <!-- dark mode disabled because of the css conflict with datatables css.
                    yes very sad -->
                   
                </ul>
            </div>
        </nav>