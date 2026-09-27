<?php
include "db.php";   
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $pid = $_POST["pid"];

    $sql=$conn->prepare("delete from products where pid=?");
    $sql->bind_param("i",$pid);

    if($sql->execute()){
        echo "Deleted successfully";
    } else {
        echo "Error";
    }

}
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
            <!-- place navbar here -->
        </header>
        <main>
            <h2 class="text-center" >Delete Products</h2>
            <div
                class="container col-6 p-4 mt-5 border shadow rounded"
            >
              <form action="" method="POST">
                <div class="mb-3">
                    <label for="" class="form-label">Product ID</label>
                    <input
                        type="number"
                        class="form-control"
                        name="pid"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                </div>
                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Delete
                </button>            
              </form>
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