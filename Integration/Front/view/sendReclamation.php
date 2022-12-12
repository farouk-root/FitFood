<?php
    include '../controller/reclamationC.php';
    include_once '../model/reclamation.php';

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

    if (isset($_POST["body"]) && isset($_POST["subject"])) {
        $reclamation = new Reclamation(NULL, $_SESSION["client_id"], $_POST["subject"], $_POST["body"], "empty");
        ReclamationC::addReclamation($reclamation);
        header('Location:viewReclamations.php');
        exit();
    }
    
    
    #if (!isset($_COOKIE["lang"])) {
    #    $_COOKIE["lang"] = "en";
    #}
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
        <script src="js/sendReclamation.js"></script>
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
            
            <h3>Send Reclamation</h3>
            <hr>

            <form method="POST" action="sendReclamation.php">
                <input class="form-control" name="subject" id="subject" placeholder="Subject" minlength="4" maxlength="64"></input>
                <textarea class="form-control" name="body" id="body" rows="5" placeholder="Body" minlength="16" maxlength="4096"></textarea>
                <div class="py-2"></div>
                <input type="submit" class="btn btn-primary" id="submit" value="Send Reclamation"></input>
                <p id="err-subject" style="color:red;"></a>
                <p id="err-body" style="color:red;"></a>
            </form>

            #<button class="btn btn-primary" onclick="setCookie('lang','en');googleTranslateElementInit();" >en</button>
            #<button class="btn btn-primary" onclick="setCookie('lang','fr');googleTranslateElementInit();" >fr</button>

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

        <style>#google_translate_element,.skiptranslate{display:none;}body{top:0!important;}</style>
        <div id="google_translate_element"></div>
        <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    </body>
</html>
