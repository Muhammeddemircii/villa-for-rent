<?php
    $baglanti = mysqli_connect("localhost", "root", "", "villarent");

    if(mysqli_connect_errno() > 0) {
        die("hata: ".mysqli_connect_errno());
    }
