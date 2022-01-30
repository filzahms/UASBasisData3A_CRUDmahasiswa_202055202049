<html>
<head>
    <title>Tambahkan Data Mahasiswa</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>NIM</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr> 
                <td>Prodi</td>
                <td><input type="text" name="prodi"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    if(isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $prodi = $_POST['prodi'];
        
        include_once("config.php");
                
        $result = mysqli_query($mysqli, "INSERT INTO mahasiswa(nama,nim,prodi) VALUES('$nama','$nim','$prodi')");
        
        echo "User added successfully. <a href='index.php'>View Table</a>";
    }
    ?>
</body>
</html>
