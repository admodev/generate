<?php

session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__ .  '../../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();
$dbUser = $_ENV['DB_USER'];
$dbPassword = $_ENV['DB_PASS'];
$dbHost = $_ENV['DB_HOST'];
$dbName = $_ENV['DB_NAME'];
$con = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

$_SESSION['username'] == null ? header('Location: ../login.php') : $_SESSION['welcome_message'] = "Bienvenido/a de nuevo!";

if (isset($_POST['logout'])) {
    unset($_SESSION['username']);
    session_destroy();
    header('location: logout.php');
}

// Árbol binario balanceado

// class Node
// {
//     public $data;
//     public $leftChild;
//     public $rightChild;

//     public function __construct($data)
//     {
//         $this->data = $data;
//         $this->leftChild = null;
//         $this->rightChild = null;
//     }
//     public function disp_data()
//     {
//         echo $this->data;
//     }
// } //end class Node
// class BinaryTree
// {
//     public $root;
//     //public $s;
//     public function __construct()
//     {
//         $this->root = null;
//         //$this->s=file_get_contents('store');

//     }
//     //function to display the tree
//     public function display()
//     {
//         $this->display_tree($this->root);
//     }
//     public function display_tree($local_root)
//     {

//         if ($local_root == null)
//             return;
//         $this->display_tree($local_root->leftChild);
//         echo $local_root->data . "<br/>";
//         $this->display_tree($local_root->rightChild);
//     }
//     // function to insert a new node
//     public function insert($key)
//     {
//         $newnode = new Node($key);
//         if ($this->root == null) {
//             $this->root = $newnode;
//             return;
//         } else {
//             $parent = $this->root;
//             $current = $this->root;
//             while (true) {
//                 $parent = $current;
//                 //$this->find_order($key,$current->data);
//                 if ($key == ($this->find_order($key, $this->$current->data))) {
//                     $current = $this->$current->leftChild;
//                     if ($current == null) {
//                         $this->$parent->leftChild = $newnode;
//                         return;
//                     } //end if2
//                 } //end if1 
//                 else {
//                     $current = $this->$current->rightChild;
//                     if ($current == null) {
//                         $this->$parent->rightChild = $newnode;
//                         return;
//                     } //end if1                       
//                 } //end else
//             } //end while loop 
//         } //end else

//     } //end insert function

//     //function to search a particular Node
//     public function find($key)
//     {
//         $current = $this->root;
//         while ($this->$current->data != $key) {
//             if ($key == $this->find_order($key, $this->$current->data)) {
//                 $current = $this->$current->leftChild;
//             } else {
//                 $current = $this->$current->rightChild;
//             }
//             if ($current == null)
//                 return (null);
//         }
//         return ($current->data);
//     } // end the function to search
//     public function delete1($key)
//     {
//         $current = $this->root;
//         $parent = $this->root;

//         $isLeftChild = true;
//         while ($this->$current->data != $key) {
//             $parent = $current;
//             if ($key == ($this->find_order($key, $this->$current->data))) {
//                 $current = $this->$current->leftChild;
//                 $isLeftChild = true;
//             } else {
//                 $current = $this->$current->rightChild;
//                 $isLeftChild = false;
//             }
//             if ($current == null)
//                 return (null);
//         } //end while loop 

//         echo "<br/><br/>Node to delete:" . $current->data;
//         //to delete a leaf node 
//         if ($current->leftChild == null && $current->rightChild == null) {
//             if ($current == $this->root)
//                 $this->root = null;
//             else if ($isLeftChild == true) {
//                 $this->$parent->leftChild = null;
//             } else {
//                 $this->$parent->rightChild = null;
//             }
//             return ($current);
//         } //end if1
//         //to delete a node having a leftChild 
//         else if ($current->rightChild == null) {
//             if ($current == $this->root)
//                 $this->root = $current->leftChild;
//             else if ($isLeftChild == true) {
//                 $this->$parent->leftChild = $current->leftChild;
//             } else {
//                 $this->$parent->rightChild = $current->leftChild;
//             }
//             return ($current);
//         } //end else if1
//         //to delete a node having a rightChild
//         else if ($current->leftChild == null) {
//             if ($current == $this->root)
//                 $this->root = $current->rightChild;
//             else if ($isLeftChild == true) {
//                 $this->$parent->leftChild = $current->rightChild;
//             } else {
//                 $this->$parent->rightChild = $current->rightChild;
//             }
//             return ($current);
//         }
//         //to delete a node having both childs
//         else {
//             $successor = $this->get_successor($current);
//             if ($current == $this->root) {
//                 $this->root = $successor;
//             } else if ($isLeftChild == true) {
//                 $this->$parent->leftChild = $successor;
//             } else {
//                 $this->$parent->rightChild = $successor;
//             }
//             $successor->leftChild = $current->leftChild;
//             return ($current);
//         }
//     } //end the function to delete a node
//     //Function to find the successor node
//     public function get_successor($delNode)
//     {
//         $succParent = $delNode;
//         $successor = $delNode;
//         $temp = $delNode->rightChild;
//         while ($temp != null) {
//             $succParent = $successor;
//             $successor = $temp;
//             $temp = $temp->leftChild;
//         }
//         if ($successor != $delNode->rightChild) {
//             $succParent->leftChild = $successor->rightChild;
//             $successor->rightChild = $delNode->rightChild;
//         }
//         return ($successor);
//     }
//     //function to find the order of two strings
//     public function find_order($str1, $str2)
//     {
//         $str1 = strtolower($str1);
//         $str2 = strtolower($str2);
//         $i = 0;
//         $j = 0;

//         $p1 = $str1[$i];
//         $p2 = $str2[$j];
//         while (true) {
//             if (ord($p1) < ord($p2) || ($p1 == '' && $p2 == '')) {

//                 return ($str1);
//             } else {
//                 if (ord($p1) == ord($p2)) {
//                     $p1 = $str1[++$i];
//                     $p2 = $str2[++$j];
//                     continue;
//                 }
//                 return ($str2);
//             }
//         } //end while

//     } //end function find string order

//     public function is_empty()
//     {
//         if ($this->root == null)
//             return (true);
//         else
//             return (false);
//     }
// } //end class BinaryTree

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Generate | Menu Principal</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="assets/css/estilos-index.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/red.css">
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Mi Cuenta</a>
            </div>
            <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Bienvenido/a &nbsp; <?php echo $_SESSION['username']; ?> <a href="#" class="btn btn-danger square-btn-adjust">Cerrar Sesion</a> </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="assets/img/find_user.png" class="user-image img-responsive" />
                    </li>


                    <li>
                        <a href="mis_inversiones.php"> <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-briefcase-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85v5.65z" />
                                <path fill-rule="evenodd" d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5v1.384l-7.614 2.03a1.5 1.5 0 0 1-.772 0L0 5.884V4.5zm5-2A1.5 1.5 0 0 1 6.5 1h3A1.5 1.5 0 0 1 11 2.5V3h-1v-.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5V3H5v-.5z" />
                            </svg> Mis Inversiones</a>
                    </li>
                    <li>
                        <a href="mis_creditos.php"> <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-calendar3-event-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2h16a2 2 0 0 0-2-2H2zm14 3H0v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3zm-2 3a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                            </svg> Mis Creditos</a>
                    </li>
                    <li>
                        <a href="mis_pagos.php"> <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-calendar-check-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM0 5h16v9a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5zm10.854 3.854a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                            </svg> Mis Pagos</a>
                    </li>
                    <li>
                        <a href="oportunidades_negocio.php"> <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-cash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M15 4H1v8h14V4zM1 3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H1z" />
                                <path d="M13 4a2 2 0 0 0 2 2V4h-2zM3 4a2 2 0 0 1-2 2V4h2zm10 8a2 2 0 0 1 2-2v2h-2zM3 12a2 2 0 0 0-2-2v2h2zm7-4a2 2 0 1 1-4 0 2 2 0 0 1 4 0z" />
                            </svg> Oportunidades De Negocio</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Mi Red</a>
                    </li>
                    <li>
                        <a href="mi_billetera.php"> <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-wallet" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M2 4v8.5A1.5 1.5 0 0 0 3.5 14h10a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 1 1 0v8a1.5 1.5 0 0 1-1.5 1.5h-10A2.5 2.5 0 0 1 1 12.5V4h1z" />
                                <path fill-rule="evenodd" d="M1 4a2 2 0 0 1 2-2h11.5a.5.5 0 0 1 0 1H3a1 1 0 0 0 0 2h11.5v1H3a2 2 0 0 1-2-2z" />
                                <path fill-rule="evenodd" d="M13 5V3h1v2h-1z" />
                            </svg> Mi Billetera</a>
                    </li>
                    <li>
                        <a href="informacion_club.php"> <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-info-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.93 4.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                            </svg> Informacion Del Club</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <h3>Mi Red</h3>
                    <div class="tree">
                        <ul>
                            <li>
                                <div>Usuario 1</div>
                                <ul>
                                    <li>
                                        <div>Usuario 2</div>
                                    </li>
                                    <li>
                                        <div>Usuario 3</div>
                                        <ul>
                                            <li>
                                                <div>Usuario 4</div>
                                            </li>
                                            <li>
                                                <div>Usuario 5</div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./backend/wz_jsgraphics.js"></script>
    <script type="text/javascript" src="./backend/binarytree.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <script type="text/javascript">

    </script>
</body>

</html>