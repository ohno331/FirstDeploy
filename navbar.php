<!-- Primary Navigation -->
<nav class="navbar navbar-default navbar-expand-lg navbar-light color-second-bg">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.php">PP<b>Shop</b></a>
        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
            <span class="navbar-toggler-icon"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <!-- Collection of nav links, forms, and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li><a href="">商品一覧</a></li>
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="">商品カテゴリー</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="List_of_narrowed_down_products.php?category=cpu">CPU</a>
                    <a class="dropdown-item" href="List_of_narrowed_down_products.php?category=memory">メモリー</a>
                    <a class="dropdown-item" href="List_of_narrowed_down_products.php?category=gpu">グラフィックボード</a>
                    <a class="dropdown-item" href="List_of_narrowed_down_products.php?category=matherboard">マザーボード</a>
                    <a class="dropdown-item" href="List_of_narrowed_down_products.php?category=hddssd">HDD/SSD</a>
                    <a class="dropdown-item" href="List_of_narrowed_down_products.php?category=5">電源</a>
                    <a class="dropdown-item" href="List_of_narrowed_down_products.php?category=6">CPUファン/PCファン</a>
                    <a class="dropdown-item" href="List_of_narrowed_down_products.php?category=pccase">PCケース</a>
                    <div class="dropdown-divider"></div>
                </div>
            </li>
        </ul>
        <form class="navbar-form form-inline">
            <div class="input-group search-box">
                <input type="text" id="search" class="form-control" placeholder="Search here...">
                <span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
            </div>
        </form>
        <ul class="nav navbar-nav navbar-right">
            <!-- ログイン前 -->
            <?php 
              if(!(isset($_SESSION['user']))){ 
            ?>
            <li>
                <a href="login_input.php">Login</a>
            </li>
            <?php 
              }
            ?>

            <?php 
              if(!(isset($_SESSION['user']))){ 
            ?>
            <li>
                <a href="signup.php" 
                    class="btn btn-primary mt-3 mb-1">Sign up</a>
            </li>
            <?php 
              }
            ?>

            <!-- ログイン後 -->
            <?php 
              if(isset($_SESSION['user'])){ 
            ?>
            <li>
              <a data-toggle="dropdown" href=".php">マイページ</a>
            </li>
            <?php 
              }
            ?>

            <?php 
              if(isset($_SESSION['user'])){  
            ?>
            <li>   
              <a href="mycart.php">
              <i class="fas fa-shopping-cart color-primary fa-spin py-0"></i>カート
              </a>
            </li>
            <?php  
              }
            ?>
           

        </ul>
    </div>
</nav>


<!-- Primary Navigation -->