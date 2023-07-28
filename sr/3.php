<html>
    <head>
        <title>RESTORAN</title>
<div style="background-color:#CCAAFF"padding:50px;><center><p style="color:purple;font-size:60px;font-style:algerian">FAST FOOD</p></center>
</div>
</head>
<body>
  
    <form method="POST"action="hasil.php">
    <button disabled="disabled">PESAN</button><button style="background-color:purple; border-color:purple; color:white">DAFTAR MENU</button><br><br>
    <div class="container" style="display: flex; flex-direction: row; justify-content: space-evenly; ">

<form>
    <center><table></center>
        <tr>
            <td>NAMA:</td>
            <td><input type="text" name="nama" placeholder="nama anda">
</tr>
<tr>
            <td>PESANAN:</td>
            <td><select name="pesan">
<option value="pilih pesanan">pilih pesanan</option>
<option value="DIMSUM">DIMSUM</option>
<option value="BOBA">BOBA</option>
<option value="MIE AYAM">MIE AYAM</option>
<option value="MILK SHAKE">MILK SHAKE</option>
<option value="TAKOYAKI">TAKOYAKI</option>
<option value="RAMEN">RAMEN</option>
</select>
</tr>
<tr>
            <td>JUMLAH</td>
            <td><input type="text" name="JUMLAH" placeholder="JUMLAH">
</tr>
<tr>
<td><button type="submit">SUBMIT</button></td>
</tr>
</body>
</html>