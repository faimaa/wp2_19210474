<html>
	<head>
		<title>D-Lemas : Form Input Data Siswa</title>
	</head>
		<body>
			<center>
				 <form action="<?= base_url('Tugas_uts/cetak'); ?>"method="post">
					<table>
					<tr>
						<th colspan="3">
						D-Lemas : Form Input Data Siswa
						</th>
					</tr>
					 
					<tr>
						 <td colspan="3">
						 <hr>
						 </td>
					</tr>
					 
					<tr align="left">
						 <th>Nama Siswa</th>
						 <th>:</th>
						 <td>
							<input type="text" name="namasiswa" id="namasiswa" value="<?= set_value('namasiswa');?>">
						 </td>
					</tr>
					 
					<tr>
					<th></th>
					<th></th>
					<td>
					 	<font style="color:red; font-size:8;
						align:center;"><?= form_error('namasiswa'); ?></font>
					</td>
					</tr>
					 
					<tr align="left">
						<th>NIS</th>
						<th>:</th>
						<td>
							<input type="text" name="nis" id="nis" value="<?= set_value('nis');?>">
						</td>
					</tr>
					 
					<tr>
					<th></th>
					<th></th>
					<td>
					 	<font style="color:red; font-size:8;
						align:center;"><?= form_error('nis'); ?></font>
					</td>
					</tr>
					
					<tr align="left">
						 <th>Kelas</th>
						 <th>:</th>
						 <td>
							<input type="text" name="kelas" id="kelas" value="<?= set_value('kelas');?>">
						 </td>
					</tr>
					 
					<tr>
					<th></th>
					<th></th>
					<td>
					 	<font style="color:red; font-size:8;
						align:center;"><?= form_error('kelas'); ?></font>
					</td>
					</tr>
					
					<tr align="left">
						 <th>Tanggal Lahir</th>
						 <th>:</th>
						 <td>
							<input type="text" name="tgl" id="tgl" value="<?= set_value('tgl');?>">
						 </td>
					</tr>
					
					<tr>
					<th>
					 	<font style="font-size:11;">( format :2021-04-23)</font>
					</th>
					<th></th>
					<td>
					 	<font style="color:red; font-size:8;
						align:center;"><?= form_error('tgl'); ?></font>
					</td>
					</tr>
				
					<tr align="left">
						 <th>Tempat Lahir</th>
						 <th>:</th>
						 <td>
							<input type="text" name="tl" id="tl" value="<?= set_value('tl');?>">
						 </td>
					</tr>
					 
					<tr>
					<th></th>
					<th></th>
					<td>
					 	<font style="color:red; font-size:8;
						align:center;"><?= form_error('tl'); ?></font>
					</td>
					</tr>
					
					<tr align="left">
						 <th>Alamat</th>
						 <th>:</th>
						 <td>
							<input type="text" name="almt" id="almt" value="<?= set_value('almt');?>">
						 </td>
					</tr>
					 
					<tr>
					<th></th>
					<th></th>
					<td>
					 	<font style="color:red; font-size:8;
						align:center;"><?= form_error('almt'); ?></font>
					</td>
					</tr>
					
					<tr align="left">
						<th>Jenis Kelamin</th>
						<th>:</th>
						<td>
							<input type="radio" name="jkl" value="Laki-laki"<?php echo set_radio('jkl', 'Laki-laki'); ?>> Laki-laki<br>
							<input type="radio" name="jkl" value="Perempuan"<?php echo set_radio('jkl', 'Perempuan'); ?>> Perempuan<br>
						 </td>
					</tr>
					 
					<tr>
					<th></th>
					<th></th>
					<td>
					 	<font style="color:red; font-size:8;
						align:center;"><?= form_error('jkl'); ?></font>
					</td>
					</tr>
					
					<tr align="left">
						<th>Agama</th>
						<th>:</th>
						<td>
							<select name="agama" id="agama" >
							<option value="" <?php echo set_select('agama', TRUE); ?>>Pilih Agama</option>
							<option value="Islam"<?php echo set_select('agama', 'Islam'); ?>>Islam</option>
							<option value="Kristen"<?php echo set_select('agama', 'Kristen'); ?>>Kristen</option>
							<option value="Katolik"<?php echo set_select('agama', 'Katolik'); ?>>Katolik</option>
							<option value="Budha"<?php echo set_select('agama', 'Budha'); ?>>Budha</option>
							<option value="Hindu"<?php echo set_select('agama', 'Hindu'); ?>>Hindu</option>
							<option value="Protestan"<?php echo set_select('agama', 'Protestan'); ?>>Protestan</option>
							<option value="Khonghucu"<?php echo set_select('agama', 'Khonghucu'); ?>>Khonghucu</option>
							</select>
						</td>
					</tr>
					 
					<tr>
					<th></th>
					<th></th>
					<td>
					 	<font style="color:red; font-size:8;
						align:center;"><?= form_error('agama'); ?></font>
					</td>
					</tr>
					
					<tr>
						<td colspan="3">
						<hr>
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
