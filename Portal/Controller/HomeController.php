<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*
  header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
  header("Cache-Control: no-cache");
  header("Pragma: no-cache");
  header('Location: /FirstPhpWebApp/Portal/View/Home/index.php');

 */
//try{
//    include '../../DAL/AccessDatabase.php';
//    $filename = "../../DAL/DBConstant.php";
//
//    $db_result = (new AccessDatabase($filename))->executeQuery("select * from user_info");
//     print('  <table border = "1" cellpadding = "3" cellspacing = "2"
//         style = "background-color: #4CAF50 ">');
//     for ( $counter = 0; 
//               $row = mysqli_fetch_row( $db_result );
//               $counter++ ){
//
//               // build table to display results
//               print( "<tr>" );
//
//               foreach ( $row as $key => $value ) 
//                  print( "<td>$value</td>" );
//
//               print( "</tr>" );
//            }
//     print( "</table>" );
//}
// catch (Exception $exc){
//    echo $exc->getMessage();
// }
include '../../BLL/RedirectTo.php';

RedirectTo::page("../View/Home/index.php");
