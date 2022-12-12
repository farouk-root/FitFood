<?php
    include '../controller/reclamationC.php';

    # For testing purposes
    $_SESSION["client_id"] = 0;
    $_SESSION["password"] = "password";

    $authed = isset($_SESSION["client_id"]) && isset($_SESSION["password"]);
    # && $clientC.authentify($_SESSION["client_id"], $_SESSION["password"]);

    if (!$authed) {
        # TODO: change this to login page instead
        header('Location:index.html');
        exit();
    }

    $list_reclamation = ReclamationC::listClientReclamations($_SESSION["client_id"]); 
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="Start your development with FoodHut landing page.">
            <meta name="author" content="Devcrud">
            <title>FoodHut | Free Bootstrap 4.3.x template</title>

        <!-- font icons -->
        <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">

        <!-- Bootstrap + Steller  -->
        <link rel="stylesheet" href="assets/css/foodhut.css">
        <script src="js/utils.js"></script>
    </head>

    <body>
        <!-- Page Header -->
        <header class="header header-mini"> 
            <div class="header-title">Reclamation</div> 
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="template.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="viewReclamations.php">Reclamation</a></li>
                </ol>
            </nav>
        </header> <!-- End Of Page Header -->

        <!-- main content -->
        <div class="container">
            <div class="py-4"></div>
            
            <form method="POST" action="sendReclamation.php">
                <input type="submit" class="btn btn-primary" id="add-button" value="Send Reclamation"></input>
            </form>

            
            <div class="py-3"></div>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col" onclick="sortTable(0, 'reclamation_table')">id</th>
                    <th scope="col" onclick="sortTable(1, 'reclamation_table')">subject</th>
                    <th scope="col" width="250px">resolutions</th>
                    <th scope="col">update</th>
                    <th scope="col">delete</th>
                    </tr>
                </thead>
                <tbody id="reclamation_table">
                    <?php
                    foreach($list_reclamation as $reclamation) {
                    ?>
                    <tr>
                        <td scope="row"><?php echo $reclamation['id']; ?></th>
                        <td><?php echo $reclamation['subject']; ?></th>
                        <td>
                            <form method="POST" action="viewResolutions.php">
                                <input type="image" src="assets/imgs/edit.png" width="50" height="50" alt="Submit"> 
                                <input type="hidden" value=<?PHP echo $reclamation['id']; ?> name="reclamation_id">
                            </form>
                        </td>
                        <td>
                            <form method="POST" action="updateReclamation.php">
                                <input type="image" src="assets/imgs/update.png" width="50" height="50" alt="Submit"> 
                                <input type="hidden" value=<?PHP echo $reclamation['id']; ?> name="id">
                            </form>
                        </td>
                        <td>
                            <form method="POST" action="deleteReclamation.php">
                                <input type="image" src="assets/imgs/delete.png" width="50" height="50" alt="Submit"> 
                                <input type="hidden" value=<?PHP echo $reclamation['id']; ?> name="id">
                            </form>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>

            
            
        </div>
        <!-- end of typography -->

        <!-- Page Footer -->
        <div class="bg-dark text-light text-center border-top wow fadeIn">
                <p class="mb-0 py-3 text-muted small">&copy; Copyright <script>document.write(new Date().getFullYear())</script> Made with <i class="ti-heart text-danger"></i> By <a href="http://devcrud.com">DevCRUD</a></p>
            </div>
            <!-- End of Page Footer -->
        
        <!-- core  -->
        <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
        <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    </body>
</html>
