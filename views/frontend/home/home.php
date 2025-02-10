<!-- start banner Area -->
<section class="banner-area relative" id="home" style="background:url(<?=base_url()?>assets/frontend/img/izzatulbg.png) center center; height: 650px; overflow: hidden; position: relative;">
  </style>
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row fullscreen d-flex align-items-center justify-content-between">
      <div class="banner-content col-lg-12 col-md-12">
        <h1 class="text-uppercase">
        TK IZZATUL ISLAM KARAWANG
        </h1>
        <h4 class="pt-10 pb-10 text-white">

        </h4>
      </div>
    </div>
  </div>
</section>
<!-- End banner Area -->


<!-- End feature Area -->

<!-- Start blog Area -->

<section class="gallery-area section-gap" id="galeri">
				<div class="container">
          <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-12">
              <div class="title text-center">
                <h1 class="mb-10">Galeri Terbaru TK IZZATUL ISLAM KARAWANG</h1>
                <p>Ikuti terus dokumentasi foto dan video terbaru tentang IZZATUL ISLAM KARAWANG.</p>
              </div>
            </div>
          </div>
					<div class="row">
            <?php
            foreach ($galeri_foto->result_array() as $row) {
            ?>
            <div class="col-md-4">
								<a href="<?=base_url('upload/galeri/'.$row['foto'])?>" class="img-gal">
                  <div class="single-gallery-image" style="background: url(<?=base_url('upload/galeri/'.$row['foto'])?>);"></div></a>
                  <div class="text-center" style="margin-top:15px">
                  <small><?=$row['judul']?></small>
                </div>
							</div>
            <?php } ?>
					</div>
          <div class="text-center" style="margin-top:25px; margin-bottom:45px;">
          <a href="<?=site_url('galeri/foto')?>" class="genric-btn primary radius">Lihat Semua Foto</a>
          </div>
          <hr>
          <div class="row" style="margin-top:50px;">
            <?php
            foreach ($galeri_video->result_array() as $row) {
            ?>
						<div class="col-lg-6">
              <iframe width="540" height="315" src="<?=$row['link']?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <div class="text-center" style="margin-top:10px">
              <h5><?=$row['judul']?></h5>
              <small><?=$row['isi']?></small>
              </div>
						</div>
            <?php } ?>
					
			</section>

      <style type="text/css">
        #frame-image {
        /*CSS Untuk croping gambar / foto Disini Anda dapat menentukan lebar dan tinggi image */
        width: 255px;
        height: 175px;
        overflow: hidden;
        /*  CSS Untuk mengatur posisi gambar Menjadikan frame / bingkai sebagai patokan koordinat left/top */
        position: relative;
      }
        #frame-image img {
        /* CSS Untuk croping gambar Membatasi tinggi gambar, membiarkan width-nya auto Bisa juga diganti jadi height: 320px jika tinggi gambar mau dipaksakan jadi 320px
        */
        /* max-height: 320px; */
        width: 150%;
        /*  CSS Untuk mengatur posisi gambar Left/top berpatokan pada frame Diisi dengan nilai minus untuk memposisikan keluar dari frame karena frame overflow-nya dibuat jadi hidden
        posisi yg keluar area frame jadi tidak terlihat Disini Anda dapat mengatur bagian/posisi gambar yg mana yg akan ditampilkan  */
        position: absolute;
        left: 0px;
        top: 0px;
      }
      </style>
