<html>
<head>
    <title>Tampil Data Matakuliah</title> 
</head> 
<body> 
<br><br><br><br><br>
    <center> 
        <table> 
            <tr> 
                <th colspan="3"> 
                    Tampil Total Harga 
                </th> 
            </tr> 
            <tr> 
                <td colspan="3"> 
                    <hr> 
                </td> 
            </tr> 
            <tr> 
                <th>Nama Pembeli</th> 
                <th>:</th> 
                <td> 
                    <?= $np; ?> 
                </td> 
            </tr> 
            <tr>
            <tr> 
                <td>No Hp</td> 
                <td>:</td> 
                <td> 
                    <?= $nohp; ?> 
                </td> 
            </tr> 
            <tr> 
                <td>Merk</td> 
                <td>:</td> 
                <td> 
                    <?= $merk; ?> 
                </td> 
            </tr> 
            <tr> 
                <td>Ukuran Sepatu</td> 
                <td>:</td> 
                <td> 
                    <?= $ukuran; ?> 
                </td> 
            </tr> 
            <tr> 
                <td colspan="3" align="center"> 
                    <a href="<?= base_url('Toko_sepatu'); 
                ?>">Kembali</a> 
                </td>
                </tr> 
            </table> 
        </center> 
</body> 
</html> 