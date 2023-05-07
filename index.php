<?php

use public_site\controller\ErrorController;
use public_site\controller\HomeController;
use public_site\controller\DetailsController;
use api\manager\ServerRequestManager;

/*
  TODO:
  Frontend
    error page (if needed?)
  Mobile responsiveness
  Backend
    For Details page have country name as variable in url to figure out which country details to show.
  Add documentation to code
  Write readme
*/

require __DIR__ . "/src/inc/bootstrap.php";

session_start();

$uri = ServerRequestManager::getUriParts();

if ($uri[2] != "ajax") {
  echo "
    <!DOCTYPE html>
    <html>
      <head>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='icon' type='image/x-icon' href='/src/public_site/media/icons/favicon.svg'>
        <link href='/src/public_site/styles/css/main.css' rel='stylesheet' type='text/css'>
        <script src='/src/public_site/js/darkMode.js' defer></script>
  ";
}

switch ($uri[2]) {
  case "":
    showHome();
    break;
  case "details":
    showDetails();
    break;
  case "error":
    showError("Error title", "This is the error page.", "/index.php");
    break;
  default:
    showError(
      "404 Not Found",
      "The page you're looking for doesn't exist.",
      "/index.php"
    );
    exit();
}

if ($uri[2] != "ajax") {
  echo "
      </body>
    </html>
  ";
}

function showHome()
{
  $homeController = new HomeController();
  $homeController->showHomePage();
}

function showDetails()
{
  $detailsController = new DetailsController();
  $detailsController->showDetailsPage();
}

function showError($title, $message, $link): void
{
  $errorController = new ErrorController($title, $message, $link);
  $errorController->showErrorPage();
}
