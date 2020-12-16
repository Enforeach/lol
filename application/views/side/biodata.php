<style>
	@import url('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css');
	/*@import url("http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css");*/

	*{
		padding: 0;
		margin: 0;
		font-family: "Arial", sans-serif;
		list-style: none;
		text-decoration: none;
		/*reload*/
	}

	.card{
		width: 350px;
		position: relative;
		top: 250px;
		left: 50%;
		/*reload*/
		transform: translate(-50%, -50%);
		overflow: hidden;
		/*reload*/
		/*box-shadow: 0 5px 5px white;*/
	}

	.card-header{
		position: relative;
		height: 350px;
		/*reload*/
		overflow: hidden;
	}

	.card-header img{
		height: 100%;
		background: black;
		/*reload*/
	}

	.card-header .cover{
		position: absolute;
		top: 0;
		background: #e8f4f7;
		opacity: .1;
		width: 100%;
		height: 100%;
	}

	/*GAK PENTING*/
	.card-header .menu{
		position: absolute;
		top: 10px;
		right: 40px;
		display: flex;
		/*align-items: center;*/
		color: white;
		opacity: .8;
		/*reload*/
		cursor: pointer;
		/*reload*/
	}
	/**/

	.card-header .menu span{
		font-size: 32px;
	}

	.card-header .menu ul{
		background: black;
		padding: 5px 0;
		margin: 25px -20px;
		display: none;
		box-shadow: 0 0 10px white;
	}

	.card-header .menu ul li{
		width: 50px;
		text-align: left;
		padding: 10px;
		font-size: 20px;
	}

	.card-header .menu ul li a{
		color: #e9e2df;
		font-size: 15px;
		float: right;
		margin-left: 15px;
		text-decoration: none;
	}

	.card-header .menu:hover > ul{
		display: block;
	}

	.card-header .loc{
		position: absolute;
		left: 20px;
		color: #31aedd;
	}

	.card-header .loca{
		position: absolute;
		bottom: 20px;
		left: 20px;
		color: black;
		opacity: .5;
	}

	.card-header .first{
		display: block;
		font-size: 25px;
		opacity: .5;
	}

	.card-header .last{
		display: block;
		font-size: 36px;
		opacity: .5;
	}

	.container{
		padding: 20px;
		overflow: hidden;
	}

	.left-section{
		overflow: hidden;
		float: left;
	}

	.left-section h3{
		font-size: 17px;
		color: pink;
	}

	.left-section p{
		margin: 10px 0;
	}

	.right-section{
		overflow: hidden;
		float: right;
		text-align: center;
	}

	.item{
		margin: 6px 0;
	}

	.numb{
		font-weight: bold;
		display: block;
		font-size: 30px;
	}

	.word{
		font-size: 16px;
	}
</style>
<div class="main-panel">
	<div class="content-wrapper" style="background-color: #e8f4f7;">
		<!-- table -->

		<!-- alert -->
		<div class="row">
			<div class="col-md-12">

				<div class="row">
					<div class="col-md-4">
						<div class="card">
							<div class="card-header">
								<img src="<?= site_url('assets/Bio.jpg') ?>" width="310" alt="">
								<div class="cover">
								</div>

								<div class="loca">
									<span class="last" style="padding-left: 20px; bottom: 20px;">Alwi</span>
								</div>
							</div>
							<div class="container">
								<div class="left-section">
									<p style="color: grey; text-align: center;">"Benar karena yang sebenarnya benar adalah yang benar benar sebenarnya benar"</p>
								</div> 
							</div>
						</div>
					</div>

					<div class="col-md-8">
						<div class="card" style="width: 100%; box-shadow: 0 30px 35px 5px black">
							<div class="card-header"  style="background-color: #21252900;">
								<div class="loc" style="">
									<span style="padding-left: 40px; font-size: 12px;">SIPS (Sistem Pengelolaan Surat) merupakan sebuah aplikasi yang dikembangkan dengan memuat menu dari fungsi-fungsi kegiatan surat menyurat-menyurat, yang dapat digunakan sebagai media pembelajaran mata pelajaran korespondensi khususnya dalam kegiatan praktikum penulisan sebuah surat. Aplikasi SIPS merupakan kategori media pembelajaran interaktif yang digunakan sebagai alat bantu berbasis website dan dirancang khusus untuk membantu pembelajaran korespondensi khususnya pada saat praktikum membuat surat oleh peserta didik. Aplikasi ini tentunya juga dapat digunakan untuk pembelajaran jarak jauh (distance learning) yang memanfaatkan teknologi komputer atau jaringan komputer atau internet serta akan sangat membantu proses pembelajaran peserta didik dan guru tidak dituntut dalam satu ruang dan satu waktu.
										<br><br>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Aplikasi SIPS (Sistem Pengelolaan Surat) ini dibuat sebagai media pembelajaran pada mata pelajaran Korespondensi Semester 2. 
										Aplikasi SIPS dapat 
										Digunakan oleh seluruh elemen , baik itu guru maupun siswa pada Kompetensi Keahlian OTKP (Otomatisasi Tata Kelola Perkantoran) Kelas X Kurikulum 2013 Revisi 2017. 

										Aplikasi ini dikembangkan oleh Dion Hendriansyah, seorang mahasiwa Program Studi S1 Pendidikan Administrasi Perkantoran Jurusan Manajemen Fakultas Ekonomi dan Bisnis di Universitas Negeri Malang. 

									Balmond, sapaan akrabnya mengembangkan media pembelajaran ini saat menyelesaikan Program Studinya dengan Mengerjakan Skripsi untuk meraih gelar Sarjana Pendidikan (S.Pd.). </span>
								</div>
							</div>
							<div class="container">
								<div class="left-section">
									<p style="color: black; text-align: center;"> <b><i class="fa fa-book"></i> S I P S</b>&nbsp;Balmond dapat dihubngi melalui kontak <a href="https://dionp.arum@gmail.com"> dionp.arum@gmail.com</a> dan +6285669966496</p>
									</div> 
								</div>
							</div>
						</div>




					</div>


					<!-- col md12 -->
				</div>
			</div>
			<!-- col mmd12-->
		</div>