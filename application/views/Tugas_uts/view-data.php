<html>
	<head>
	 <title>D-Lemas: Tampil Data Siswa</title>
	</head>
		<body>
			<center>
				<table>
					<tr>
						<th colspan="3">
						D-Lemas: Tampil Data Siswa
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
						<?= $namasiswa; ?>
						</td>
					</tr>
					
					<tr align="left">
						<th>NIS</th>
						<th>:</th>
						<td>
						<?= $nis; ?>
						</td>
					</tr>
					
					<tr align="left">
						<th>Kelas</th>
						<th>:</th>
						<td>
						<?= $kelas; ?>
						</td>
					</tr>
					
					<tr align="left">
						<th>Tanggal Lahir</th>
						<th>:</th>
						<td>
						<?= $tgl; ?>
						</td>
					</tr>
					
					<tr align="left">
						<th>Tempat Lahir</th>
						<th>:</th>
						<td>
						<?= $tl; ?>
						</td>
					</tr>
					
					<tr align="left">
						<th>Alamat</th>
						<th>:</th>
						<td>
						<?= $almt; ?>
						</td>
					</tr>
					
					<tr align="left">
						<th>Jenis Kelamin</th>
						<th>:</th>
						<td>
						<?= $jkl; ?>
						</td>
					</tr>
					
					<tr align="left">
						<th>Agama</th>
						<th>:</th>
						<td>
						<?= $agama; ?>
						</td>
					</tr>	
					
					<tr>
						<td colspan="3" align="center">
						<a href="<?= base_url('Tugas_uts'); 
						?>">Kembali</a>
						</td>
					</tr>
				</table>
			</center>
		</body>
</html>
