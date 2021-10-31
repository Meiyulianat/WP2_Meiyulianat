<html> 
    <head> 
        <title>Form Input Matakuliah</title> 
    </head> 
<body>
    <br><br><br><br><br>
    <center> 
        <?php echo validation_errors(); ?>
        <form action="<?= base_url('Toko_sepatu/cetak'); 
        ?>" method="post"> 
            <table> 
                <tr> 
                    <th colspan="3"> 
                        Shoes Store 
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
                        <input type="text" name="np" id="np"> 
                    </td> 
                </tr> 
                <tr> 
                    <th>No Hp</th> 
                    <td>:</td> 
                    <td> 
                        <input type="text" name="nohp" id="nohp"> 
                    </td> 
                </tr>  
                <tr>
                    <th>Merk</th> 
                    <td>:</td> 
                    <td> 
                        <select name="merk" id="merk"> 
                            <option value="">Pilih Merk</option> 
                            <option value="2">Nike @375000</option> 
                            <option value="3">Adidas @300000</option> 
                            <option value="4">Kickers @250000</option>
                            <option value="5">Eiger @275000</option>
                            <option value="6">Bucherri @400000</option>
                        </select> 
                    </td> 
                </tr>
                <tr>
                    <th>Ukuran Sepatu</th> 
                    <td>:</td> 
                    <td> 
                        <select name="ukuran" id="ukuran"> 
                            <option value="">Pilih Ukuran</option> 
                            <option value="2">32</option> 
                            <option value="3">33</option> 
                            <option value="4">34</option>
                            <option value="5">35</option>
                            <option value="6">36</option>
                            <option value="7">37</option>
                            <option value="8">38</option>
                            <option value="9">39</option>
                            <option value="10">40</option>
                            <option value="11">41</option>
                            <option value="12">42</option>
                        </select> 
                    </td> 
                </tr> 
                <tr> 
                    <td colspan="3" align="center"> 
                        <input type="submit" value="Submit"> 
                    </td> 
                </tr> 
            </table> 
        </form> 
    </center> 
</body> 
</html> 