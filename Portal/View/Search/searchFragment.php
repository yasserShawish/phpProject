<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
    <div class = "search">
        <form action="../../Controller/SearchController.php" method="get">
             <input type = "text" value = "Search" onfocus = "this.value = '';" onblur = "if (this.value == '') {
                            this.value = 'Search';
                        }" name="searchKey">
             <input type = "submit" value = "">
        </form>
    </div>
    

