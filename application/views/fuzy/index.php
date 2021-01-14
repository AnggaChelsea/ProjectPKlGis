

<div class="table-responsive ">
			<h3 class="title-1 m-b-25">** Perbarui Data.</h3>
                <table class="table ">
                   <thead>
		   			<tr>
						<td>Akses Transportasi</td>
						<td>Sarana Pendidikan</td>
						<td>Fasilitas Listrik</td>
						<td>Fasilitas Informasi dan Komunikasi</td>
						<td>Hambatan/Tantangan Alam</td>
						<td>Fasilitas Kesehatan</td>
						<td>Sarana Air Bersih</td>
						<td>Pemenuhan Kebutuhan Hidup</td>
					</tr>
					</thead>
					<tbody>
					<form action="" method="post" enctype="multipart/form-data" >
					<tr>
						<td>
							<select name="Tranportasi[]" class="custom-select dblock w-100">
							<option>--Jenis Tranportasi apa yang digunakan untuk bisa sampai ke Sekolah ?--</option>
							<option>pilih salah satu jawaban dibawah :</option>
							<option></option>
							<option>1.dapat_dilalui_kendaraan_roda_4_atau_angkutan_umum</option>
							<option>2.dapat_dilalui_kendaraan_roda_2</option>
							<option>3.hanya_dapat_dilalui_oleh_pejalan_kaki</option>
							</select>
						</td>
						<td>
							<select name="Pendidikan[]" class="custom-select dblock w-100">
							<option>--Apakah Sarana Pendidikan sudah terpenuhi dan aman untuk operasional ?--</option>
							<option>pilih salah satu jawaban dibawah :</option>
							<option></option>
							<option>1.sudah_lengkap_dan_aman</option>
							<option>2.cukup_dan_aman</option>
							<option>3.serba_terbatas_dan_membahayakan_jika_cuaca_buruk</option>
							</select>
						</td>
					
						<td>
							<select name="Listrik[]" class="custom-select dblock w-100">
							<option>--Apakah Fasilitas Listrik telah ada ?--</option>
							<option>pilih salah satu jawaban dibawah :</option>
							<option></option>
							<option>1.ya_ada</option>
							<option>2.belum_ada</option>
							</select>
						</td>
					
						<td>
							<select name="Informasi[]" class="custom-select dblock w-100">
							<option>--Apakah Fasilitas Informasi dan Komunikasi mudah diakses ?--</option>
							<option>pilih salah satu jawaban dibawah :</option>
							<option></option>
							<option>1.mudah_karna_kebanyakan_telah_memiliki_smartphone</option>
							<option>2.telah_memiliki_jaringan_wifi</option>
							<option>3.sulit_karna_kebanyakan_masih_gaptek</option>
							</select>
						</td>
					
						<td>
							<select name="TantanganAlam[]" class="custom-select dblock w-100">
							<option>--Apakah Akses jalur yang ditempuh sering mendapati hambatan ?--</option>
							<option>pilih salah satu jawaban dibawah :</option>
							<option></option>
							<option>1.tidak_karna_dapat_melalui_jalan_raya</option>
							<option>2.ya_atau_terkadang_karna_melewati_hutan_belantara_atau_sungai_tanpa_jembatan_yang_layak_atau_sering_terjadi_bencana_alam</option>
							</select>
						</td>
					
						<td>
							<select name="Kesehatan[]" class="custom-select dblock w-100">
							<option>--Apakah terdapat Fasilitas kesehatan seperti klinik,RS,dll ?--</option>
							<option>pilih salah satu jawaban dibawah :</option>
							<option></option>
							<option>1.ya_ada</option>
							<option>2.belum_ada</option>
							</select>
						</td>
					
						<td>
							<select name="AirBersih[]" class="custom-select dblock w-100">
							<option>--Apakah Air Bersih mudah didapat ?--</option>
							<option>pilih salah satu jawaban dibawah :</option>
							<option></option>
							<option>1.mudah</option>
							<option>2.sulit</option>
							</select>
						</td>
					
						<td>
							<select name="Sdm[]" class="custom-select dblock w-100">
							<option>--Apakah Pekerjaan mudah didapat ?--</option>
							<option>pilih salah satu jawaban dibawah :</option>
							<option></option>
							<option>1.mudah</option>
							<option>2.sulit</option>
							</select>
						</td>
						
					</tr>	
					
		 		
				<tr>
				<td >
				  <div align="center">
				    <button type="submit" name="fuzy" class="btn btn-danger">Kirim</button>
			      </div></td>
				</tr>
					</form>
					</tbody>
		   		</table>
		   	</div>
<br />


<?php
if (isset($_POST['fuzy'])) {
	//*******************************************************************//
	// menerima paket dari menu form input
	$id=$_POST['id'];
	$NamaSekolah=$_POST['NamaSekolah'];
	$NSS=$_POST['NSS'];
	$Tranportasi=$_POST['Tranportasi'];
	$Pendidikan=$_POST['Pendidikan'];
	$Listrik=$_POST['Listrik'];
	$Informasi=$_POST['Informasi'];
	$TantanganAlam=$_POST['TantanganAlam'];
	$Kesehatan=$_POST['Kesehatan'];
	$AirBersih=$_POST['AirBersih'];
	$Sdm=$_POST['Sdm'];
	$jumlah=count($id);
	//*******************************************************************//
?>
<div class="table-responsive ">
			<h3 class="title-1 m-b-25">** Tampil Data.</h3>
                <table class="table ">
                   <thead>
		   			<tr>
						<td>Akses Transportasi</td>
						<td>Sarana Pendidikan</td>
						<td>Fasilitas Listrik</td>
						<td>Fasilitas Informasi dan Komunikasi</td>
						<td>Hambatan/Tantangan Alam</td>
						<td>Fasilitas Kesehatan</td>
						<td>Sarana Air Bersih</td>
						<td>Pemenuhan Kebutuhan Hidup</td>
						<td>Fuzy</td>
						
						
					</tr>
					</thead>
					<tbody>
					<form action="proses.php" method="post" enctype="multipart/form-data" >
<?php
	//*******************************************************************//
	//menampilkan kembali data setelah dikelola menggunakan algoritma fuzy logic
	//dan siap untuk dikirim ke database.
	$no1=1;
	for ($i=0; $i < $jumlah ; $i++) { 
		?>

		<tr>
			
			<td>
				<input type="text" name="Tranportasi[]" value="<?= $Tranportasi[$i] ?>">
			</td>
			<td>
				<input type="text" name="Pendidikan[]" value="<?= $Pendidikan[$i] ?>">
			</td>
			<td>
				<input type="text" name="Listrik[]" value="<?= $Listrik[$i] ?>">
			</td>
			<td>
				<input type="text" name="Informasi[]" value="<?= $Informasi[$i] ?>">
			</td>
			<td>
				<input type="text" name="TantanganAlam[]" value="<?= $TantanganAlam[$i] ?>">
			</td>
			<td>
				<input type="text" name="Kesehatan[]" value="<?= $Kesehatan[$i] ?>">
			</td>
			<td>
				<input type="text" name="AirBersih[]" value="<?= $AirBersih[$i] ?>">
			</td>
			<td>
				<input type="text" name="Sdm[]" value="<?= $Sdm[$i] ?>">
			</td>
			<td>
				<input type="text" name="fuzy[]" value="<?php if ($Tranportasi[$i]=='3.hanya_dapat_dilalui_oleh_pejalan_kaki' and $Pendidikan[$i]=='3.serba_terbatas_dan_membahayakan_jika_cuaca_buruk' and $Listrik[$i]=='2.belum_ada' and $Informasi[$i]=='3.sulit_karna_kebanyakan_masih_gaptek' and $TantanganAlam[$i]=='2.ya_atau_terkadang_karna_melewati_hutan_belantara_atau_sungai_tanpa_jembatan_yang_layak_atau_sering_terjadi_bencana_alam' and $Kesehatan[$i]=='2.belum_ada' and $AirBersih[$i]=='2.sulit' and $Sdm[$i]=='2.sulit') 
				{
					echo 'Terpelosok';
				}
				else 
				{
					echo 'Tidak_Terpelosok';
				}
				?>">
			</td>

		</tr>

				
				
				
<?php
			}
?>
				<tr>
				<td >
				  <div align="center">
				  	<button type="submit" name="perbarui" class="btn btn-danger">Perbarui</button>
				  	<!--
				  	<button type="submit" name="tambah" class="btn btn-danger">tambah</button>
					-->
			      </div></td>
				</tr>
					</form>
					</tbody>
		   		</table>
		   	</div>
<br />


<?php
	}
?>	
