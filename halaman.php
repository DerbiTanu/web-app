<?php error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>
<?php include "koneksi.php" ?>
<?php session_start();
	switch($_GET['go']){
		case 'Home': 
			include("home_info.php"); 
		break;
		
		case 'Pengguna': 
			include("pengguna_data.php"); 
		break;	
		
		case 'Pengguna_Form': 
			include("pengguna_form.php"); 
		break;	
		
		case 'Pengguna_Simpan': 
			include("pengguna_simpan.php"); 
		break;			
		
		case 'Pengguna_Hapus': 
			include("pengguna_hapus.php"); 
		break;
		
		case 'Pengguna_Ubah_Password_Form': 
			include("pengguna_ubah_password_form.php"); 
		break;								
		
		case 'Pengguna_Ubah_Password_Simpan': 
			include("pengguna_ubah_password_simpan.php"); 
		break;	
		
		case 'Barang': 
			include("barang_data.php"); 
		break;		
		
		case 'Barang_Form': 
			include("barang_form.php"); 
		break;	
		
		case 'Barang_Simpan': 
			include("barang_simpan.php"); 
		break;	
		
		case 'Barang_Form_Ubah': 
			include("barang_form_ubah.php"); 
		break;			
		
		case 'Barang_Ubah': 
			include("barang_ubah.php"); 
		break;						
		
		case 'Barang_Hapus': 
			include("barang_hapus.php"); 
		break;		
		
		case 'Pemasok': 
			include("pemasok_data.php"); 
		break;		
		
		case 'Pemasok_Form': 
			include("pemasok_form.php"); 
		break;	
		
		case 'Pemasok_Simpan': 
			include("pemasok_simpan.php"); 
		break;	
		
		case 'Pemasok_Form_Ubah': 
			include("pemasok_form_ubah.php"); 
		break;			
		
		case 'Pemasok_Ubah': 
			include("pemasok_ubah.php"); 
		break;						
		
		case 'Pemasok_Hapus': 
			include("pemasok_hapus.php"); 
		break;					
		
		case 'Kelompok': 
			include("kelompok_data.php"); 
		break;		
		
		case 'Kelompok_Form': 
			include("kelompok_form.php"); 
		break;	
		
		case 'Kelompok_Simpan': 
			include("kelompok_simpan.php"); 
		break;	
		
		case 'Kelompok_Form_Ubah': 
			include("kelompok_form_ubah.php"); 
		break;			
		
		case 'Kelompok_Ubah': 
			include("kelompok_ubah.php"); 
		break;						
		
		case 'Kelompok_Hapus': 
			include("kelompok_hapus.php"); 
		break;		
		
		case 'Pembelian': 
			include("pembelian_data.php"); 
		break;		
		
		case 'Pembelian_Form': 
			include("pembelian_form.php"); 
		break;	
		
		case 'Pembelian_Simpan': 
			include("pembelian_simpan.php"); 
		break;	
		
		case 'Pembelian_Form_Rinci': 
			include("pembelian_form_rinci.php"); 
		break;			
		
		case 'Pembelian_Ubah': 
			include("pembelian_ubah.php"); 
		break;						
		
		case 'Pembelian_Hapus': 
			include("pembelian_hapus.php"); 
		break;	
		
		case 'Penjualan': 
			include("penjualan_data.php"); 
		break;		
		
		case 'Penjualan_Form': 
			include("penjualan_form.php"); 
		break;	
		
		case 'Penjualan_Simpan': 
			include("penjualan_simpan.php"); 
		break;	
		
		case 'Penjualan_Form_Rinci': 
			include("penjualan_form_rinci.php"); 
		break;			
		
		case 'Penjualan_Ubah': 
			include("penjualan_ubah.php"); 
		break;						
		
		case 'Penjualan_Hapus': 
			include("penjualan_hapus.php"); 
		break;
		
		case 'Laporan_Pembelian_Form': 
			include("laporan_pembelian_form.php"); 
		break;	
		
		case 'Laporan_Pembelian': 
			include("laporan_pembelian.php"); 
		break;						
		
		case 'Laporan_Penjualan_Form': 
			include("laporan_penjualan_form.php"); 
		break;		
		
		case 'Laporan_Penjualan': 
			include("laporan_penjualan.php"); 
		break;											
	
		case '':
			include("home_info.php");		
		break;		
	};
?>	