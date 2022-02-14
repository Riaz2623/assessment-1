<?php
require_once 'vendor/autoload.php';
use App\classes\Product;
use App\classes\Auth;
use App\classes\Home;
use App\classes\User;
use App\classes\AddProduct;


if(isset($_GET['pages']))
{
    if ($_GET['pages'] == 'home')
    {
        $product = new Product();
        $products = $product->getAllProduct();
        include 'pages/home.php';
    }
    elseif (isset($_POST['search_btn']))
    {
        $product = new Product($_POST);
        $product->getProductBySearchId();
    }
    elseif ($_GET['pages'] == 'detail')
    {
        $product = new Product();
        $result = $product->getAllProductById($_GET['id']);
        include 'pages/detail.php';
    }
    elseif ($_GET['pages'] == 'search')
    {
            $product = new Product();
            $products = $product->getAllProduct();
            include 'pages/search.php';
    }
    elseif ($_GET['pages'] == 'login')
    {
//        $product = new Product();
//        $products = $product->getAllProduct();
        include 'pages/login.php';
    }
    elseif ($_GET['pages'] == 'upload')
    {
        include 'pages/upload.php';
    }
    elseif($_GET['pages'] == 'login')
    {
        if (isset($_SESSION['id']))
        {
            $home = new Home();
            $home->index();
        }
        else{
            include 'pages/login.php';
        }
    }
    elseif($_GET['pages'] == 'home')
    {
        if (isset($_SESSION['id']))
        {
            include 'pages/home.php';
        }
        else{
            $auth = new Auth();
            $auth->login();
        }
    }
    elseif($_GET['pages'] == 'search')
    {
        if (isset($_SESSION['id']))
        {
            include 'pages/search.php';
        }
        else{
            $auth = new Auth();
            $auth->login();
        }
    }
    elseif($_GET['pages'] == 'upload')
    {
        if (isset($_SESSION['id']))
        {
            include 'pages/upload.php';
        }
        else{
            $auth = new Auth();
            $auth->login();
        }
    }


}
elseif(isset($_POST['search_btn']))
    {
        $product = new Product($_POST);
        $result = $product->getProductBySearchId();
        include 'pages/search_result.php';
    }
elseif (isset($_POST['login_btn']))
{
    $auth = new Auth($_POST);
    $message = $auth->verify();
    include 'pages/login.php';
}
elseif (isset($_POST['product_btn']))
{
    $addproduct = new AddProduct($_POST, $_FILES);
    $addproduct->newAddProduct();
    include 'pages/home.php';
}

