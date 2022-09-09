<html>
    <head>
        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="admin.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">

    </head>
    <body>
        <ul>
                
            <li><a href="#About" target="_blank">About</a></li>
            <li><a href="#Help" target="_blank">Help</a></li>
            <a href="#" class="icons icons-cart"><ion-icon name="cart-outline"></ion-icon></a> 
            <div class="profile-photo">
                <img src="https://i.pinimg.com/236x/56/b0/9c/56b09cad54282870a9c8fe87e90a64bc.jpg" alt="https://i.pinimg.com/236x/56/b0/9c/56b09cad54282870a9c8fe87e90a64bc.jpg" width="50" height="50">
            </div>

        </ul>
        <div class="sidetop">
            <aside>  
            <div class="top"> 
                <div class="logo">
                    <h1 ><i>Beu- th- ful </i><br><span class="index"><dd >thrift- shop</dd></span></h1>
          
                </div>        
          
          <div class="close" id="close-btn">
            <span class="material-icons-sharp">close</span>
          </div>
            </div>
        <div class="sidebar">
            <a href="#" class="active">
                <span class="material-icons-sharp"> dashboard</span>     
                <h3>Dashboard</h3>
            </a>
            <a href="addcategory.php">
                <span class="material-icons-sharp">
                    add_circle_outline
                    </span>
                        <h3>Add new category</h3>
            </a>
            <a href="subcategory.php">
                <span class="material-icons-sharp">
                    add_circle
                    </span>
                                    <h3>Add new subcategory</h3>
            </a>
            <a href="products.php">
                <span class="material-icons-sharp">
                    checkroom
                    </span>
                                    <h3>Add a clothing item</h3>
            </a>
            <a href="#">
                <span class="material-icons-sharp">
                    shopping_bag
                    </span>
                                    <h3>Orders</h3>
            </a>

            <a href="userview.php">
            <span class="material-icons-sharp">
                            group
                               </span>
                                    <h3>Users</h3>
            </a>
            <a href="#">
                <span class="material-icons-sharp">
                    email
                    </span>
                                    <h3>messages</h3>
            </a>
            <a href="#">
                <span class="material-icons-sharp">
                    report_problem
                    </span>
                                    <h3>Reports</h3>
            </a>
            <a href="#">
                <span class="material-icons-sharp">
                    logout
                    </span>
                                    <h3>Logout</h3>
            </a>
        </aside>

            <main>

                <h1>Dashboard</h1>
                <div class="date">
                    <input type="date">
                </div>

                <div class="insights">
                    <div class="sales">
                        <span class="material-icons-sharp">analytics</span>
                        <div class="middle">
                            <div class="left">
                                <h3>Total Sales</h3>
                                <h1>Ksh 20000</h1>
                            </div>
                            <div class="progress">
                                <svg> <circle cx="38" cy="36" r="36"></circle>  </svg>
                                <div class="number">
                                    <p>76%</p>
                                </div>
                            </div>
                        </div>
                        <small class="text_muted"> Last 24 Hours</small>
                    </div>


                    <div class="expenses">
                        <span class="material-icons-sharp">bar_chart </span>    
                            <div class="middle">
                            <div class="left">
                                <h3>Total Expenses</h3>
                                <h1>Ksh 30000</h1>
                            </div>
                            <div class="progress">
                                <svg> <circle cx="38" cy="36" r="36"></circle>  </svg>
                                <div class="number">
                                    <p>45%</p>
                                </div>
                            </div>
                        </div>
                        <small class="text_muted"> Last 24 Hours</small>
                    </div>


                    <div class="income">
                        <span class="material-icons-sharp">stacked_line_chart</span>
                        <div class="middle">
                            <div class="left">
                                <h3>Total Income</h3>
                                <h1>Ksh 1200000</h1>
                            </div>
                            <div class="progress">
                                <svg> <circle cx="38" cy="36" r="36"></circle>  </svg>
                                <div class="number">
                                    <p>36%</p>
                                </div>
                            </div>
                        </div>
                        <small class="text_muted"> Last 24 Hours</small>
                    </div>
                </div>
            </main>

        </div>


       

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>