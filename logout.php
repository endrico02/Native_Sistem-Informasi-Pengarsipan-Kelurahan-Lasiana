<?php
    session_start();
    include "koneksi.php";
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script src="assets/alert.js"></script>
</body>
</html>
<?php 
    session_destroy();
    // echo "<script>location='login.php'</script>";
    echo "
        <script>
            Swal.fire({
                title: 'Logout Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
            }).then((result) => {
            if (result.value){
                window.location = 'index.php';}
            })
        </script>
    ";
?>