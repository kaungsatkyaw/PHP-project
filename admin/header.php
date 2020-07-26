<link rel="stylesheet" type="text/css" href="../css/bootstrap4/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
	<link rel="stylesheet" href="../css/style2.css">   
    <link rel="stylesheet" href="../css/fontawe/css/all.css">
    <link rel="stylesheet" type="text/css" href="../css/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="../css/show_user.css">
    <link rel="stylesheet" type="text/css" href="../css/user-log.css">

    
    <script src="../js/js.js"></script>
    <script src="../css/bootstrap4/dist/js/bootstrap.min.js"></script>
	
</head>
<body style="background:#fff !important;">
	<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" class="bg-dark">
            <div class="sidebar-header">
                <p class="a-header"><img src="../img/icon.png" width="50px">
                BLUE OWL</p>
            </div>
            <p align="center" style="text-transform: uppercase;">
                <?php echo '<i class="fa fa-user"> </i> ';
                 echo $_SESSION['name']; ?>
                <hr>
            </p>

            <ul class="list-unstyled components">
            	<li>
                    <a href="login.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                </li>
                <li>
                    <a href="order_list.php"><i class="fas fa-shopping-basket"></i> Orders Lists</a>
                </li>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-pen-square"></i> Manage Products</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="add_new.php">Add New</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="show_user.php"><i class="fas fa-users"></i> Customers</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-table"></i> All Products</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="show_product.php">Phones</a>
                        </li>
                        <li>
                            <a href="#">Others</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fas fa-comment"></i> Feed Back</a>
                </li>
                <li>
                    <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-user"></i> Admin</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu1">
                        <li>
                            <a href="admin_list.php">Admin Lists</a>
                        </li>
                        <li>
                            <a href="admin_register.php">Registration</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="edit.php" class="article"><i class="fa fa-edit" style="padding: 0 5px;font-size: 1.5em;"></i><b>Edit Profile</b></a>
                </li>
            </ul>
        </nav>