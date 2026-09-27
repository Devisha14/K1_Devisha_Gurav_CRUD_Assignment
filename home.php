<?php
include "db.php";
session_start();
$result=$conn->query("select *from products");
?>

<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
         <nav
            class="navbar navbar-expand-sm navbar-light bg-light"
         >
            <div class="container">
                <a class="navbar-brand" href="#">Navbar</a>
                <button
                    class="navbar-toggler d-lg-none"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId"
                    aria-controls="collapsibleNavId"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="home.php" aria-current="page"
                                >Home
                                <span class="visually-hidden">(current)</span></a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="insert.php">Add</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="update.php">Update</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="delete.php">Delete</a>
                        </li>
                    </ul>
                    <form action="logout.php" class="mx-4"><button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Logout
                    </button>
                    </form>
                    <form class="d-flex my-2 md" action="csv.php">
                        <button
                            class="btn btn-outline-success my-2 my-sm-0" 
                            type="submit"
                        >
                            Generate CSV
                        </button>
                    </form>
                </div>
            </div>
         </nav>
         
        </header>
        <main>
            <h2 class="text-center mt-5">
                Hello <?php echo $_SESSION["uname"]; 
                ?></h2>
            <div
                class="container"
            >
              <div
                class="table-responsive"
              >
                <table
                    class="table table-primary"
                >
                    <thead>
                          <tr>
                            <th scope="col">Product ID</th>
                            <th scope="col"> Product Name</th>
                            <th scope="col">Category</th>   
                            <th scope="col">Price</th>
                             <th scope="col">Quantity</th>
                              <th scope="col">Brand</th>
                               <th scope="col">Description</th>
                        </tr>
                    </thead>
                    <?php while ($row=$result->fetch_assoc()) { ?>
          <tr>
             <td><?php echo $row["pid"] ?></td>
            <td><?php echo $row["pname"] ?></td>
            <td><?php echo $row["category"] ?></td>
            <td><?php echo $row["price"] ?></td>
            <td><?php echo $row["quantity"] ?></td>
            <td><?php echo $row["brand"] ?></td>
                 <td><?php echo $row["description"] ?></td>
          </tr>  
        <?php 
        } ?>
                </table>
              </div>
              
            </div>
            


        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>

