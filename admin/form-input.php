<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>INPUT DATA</title>
</head>
<body align="center" vlign="middle">
	<h2>FORM INPUT DATA SISWA</h2>
	<style>
		body{ 
			background-image: url(https://news.fatduckdn.com/content/images/2022/08/vlc_BpivRtZ2Ou.jpg);
			
			

		}
		.from_input{
			box-sizing : border-box;
	        width: 100%;
	        padding: 10px;
	        font-size: 11pt;
	        margin-bottom: 20px;
			
		}
		.td{
			font-family: sans-serif;
			font-size: 15px;
			color: red;
		}
		
		.container{
			background: aqua;
	padding: 2em;
	height: 250px;
	width: 600px;
	display: flex;
	flex-direction: column;
	border-radius: 20px;
	box-shadow: 0 0 2em hsl(231deg 62% 94%);
  
		}
		</style>
	 <center><form class="container"action="input.php" method="POST">
		<table widht="720" border="0" align="center" cellspading="0" cellspacing="0" >
			<!--<tr>			
				<td width="100">ID SISWA</td>
				<td><input type="text" name="nis" maxlength="16" size="50"/></td>
			</tr>-->
			<!-- <tr>			
				<td class="td" width="200">NIS</td>
				<td><input class="form_input"type="text" name="nis" maxlength="16" size="50"/></td>
			</tr> -->
			<br></br>
			<tr>			
				<td class="td">Nama Siswa</td>
				<td><input class="form_input" type="text" name="nama_member" maxlength="128" size="50"/></td>
			</tr>
			<tr>			
				<td class="td">Jurusan</td>
				<td><input  class="form_input"type="text" name="alamat_member" maxlength="128" size="50"/></td>
			</tr>
			<tr>			
				<td class="td">No. Telp</td>
				<td><input  class="form_input"type="text" name="telp_member" maxlength="16" size="50"/></td>
			</tr>
			<tr>			
				<td class="td">Alamat</td>
				<td><textarea  class="form_input"type="text" name="no_ktp" maxlength="255" cols="38"></textarea></td>
			</tr>
			<tr>			
				<td></td>
				<td><input class="form_input"type="submit" name="Submit" value="Submit" />&nbsp;<input type="reset" value="Reset" /></td>
			</tr>
		</table>
	</form>
	</center>
	<button><a href="index.php"> Kembali</a></button>
</body>
</html>