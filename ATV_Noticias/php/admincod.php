<?php 

    $con = mysqli_connect("localhost:3306", "root", "", "beluganews");

    $res = mysqli_query($con, "SELECT id FROM usuario");

    while($escrever = mysqli_fetch_array($res))
    {
        $checkbox = $_POST['check'.$escrever['id']] ?? 0;

        $res2 = mysqli_query($con, "UPDATE usuario SET ativo = $checkbox WHERE id = $escrever[0]");
    }

?>

<script>
    window.onload = (window.location.href = "../pages/admin.php")
</script>