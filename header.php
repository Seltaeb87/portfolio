<?php
/**
 * Created by PhpStorm.
 * User: Bastiaan
 * Date: 08-Jun-17
 * Time: 09:52 PM
 */
?>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<!-- Header -->
<div class="header">
    <!-- Site navigation menu -->
    <div class="menu">
        <ul>
            <li><a class="scroll" href="index.php">Home</a></li>
            <li><a class="scroll" href="programming.php">Programming</a></li>
            <li><a class="scroll" href="photography.php">Photography</a></li>
            <li><a class="scroll" href="astrophotography.php">Astrophotography</a></li>
            <li><a class="scroll" href="contact.php">Contact</a></li>
        </ul>
    </div>
</div>
<script>
    $(function(){

        $("a[href='index.php']").addClass("active");

        $(".menu ul li a.scroll ").click(function() {
            $(".menu ul li a.scroll").removeClass("active");
            $(this).addClass("active");
        });
    });
</script>
