<?php
    include_once '../../controller/resolutionC.php';

    if (!isset($_POST["id"])) {
        header('Location:viewReclamations.php');
        exit();
    }

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
    
    $resolution = resolutionC::getResolution($_POST["id"]);

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
        <script src="js/updateReclamation.js"></script>
    </head>

    <body>
        <!-- Page Header -->
        <header class="header header-mini"> 
            <div class="header-title">Resolution</div> 
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index_.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="viewReclamations.php">Reclamation</a></li>
                </ol>
            </nav>
        </header> <!-- End Of Page Header -->

        <!-- main content -->
        <div class="container">
            <div class="py-4"></div>
            
            <h3>View Resolution</h3>
            <hr>

            <form>
                <table border="0" align="center" width=90% rules="row">
                    <tr>
                        <td width="140px" style="vertical-align:top">
                            <label for="id">id:</label>
                        </td>
                        <td>
                            <input class="form-control" name="id" id="id" disabled="true" value="<?php echo $resolution["id"]; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td width="100px" style="vertical-align:top">
                            <label for="id">reclamation_id:</label>
                        </td>
                        <td>
                            <input class="form-control" name="reclamation_id" id="reclamation_id" disabled="true" value="<?php echo $resolution["reclamation_id"]; ?>"></input>
                        </td>
                    </tr>

                    <tr>
                        <td width="100px" style="vertical-align:top">
                            <label for="id">body:</label>
                        </td>
                        <td>
                            <textarea class="form-control" name="body" id="body" rows="5" disabled="true"><?php echo $resolution["body"]; ?></textarea>
                        </td>
                    </tr>
                </table>
                <div class="py-2"></div>
            </form>

            <div class="py-4"></div>
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
