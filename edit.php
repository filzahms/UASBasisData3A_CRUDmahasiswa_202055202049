<?php
include_once("config.php");
 
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $nama=$_POST['nama'];
    $nim=$_POST['nim'];
    $prodi=$_POST['prodi'];
        
    $result = mysqli_query($mysqli, "UPDATE mahasiswa SET nama='$nama',nim='$nim',prodi='$prodi' WHERE id=$id");
    
    header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];
 
$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $nama = $user_data['nama'];
    $nim = $user_data['nim'];
    $prodi = $user_data['prodi'];
}
?>
<html>
<head>    
    <title>Ubah Data Mahasiswa</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>NIM</td>
                <td><input type="text" name="nim" value=<?php echo $nim;?>></td>
            </tr>
            <tr> 
                <td>Prodi</td>
                <td><input type="text" name="prodi" value=<?php echo $prodi;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
