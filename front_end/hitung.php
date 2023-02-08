<form method="POST">

    <input type="number" name="tjumlah">
    <input type="number" name="tharga">
    <button name="hitung">hitung</button>
</form>

<?php
if(isset($_POST['hitung'])){
    $hasil = $_POST['tjumlah']*$_POST['tharga'];
}
echo $hasil  

    


?>