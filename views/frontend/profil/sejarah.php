<section class="banner-area relative" id="home" style="background:url(<?=base_url()?>assets/frontend/img/izzatulbg.png) center center; height: 650px; overflow: hidden; position: relative;">  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content col-lg-12">
        <h1 class="text-white">
          Sejarah IZZATUL ISLAM KARAWANG
        </h1>
        <p class="text-white link-nav"><a href="<?=site_url('home')?>">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?=site_url('profil/sejarah/3')?>">Sejarah IZZATUL ISLAM KARAWANG</a></p>
      </div>
    </div>
  </div>
</section>

<div class="whole-wrap">
				<div class="container">
					<div class="section-top-border">
						<div class="row">
							<div class="col-md-3 text-center">
								<img src="<?=base_url('upload/profil/'.$row['foto'])?>" alt="" class="img-fluid">

							</div>
							<div class="col-md-9 mt-sm-20 left-align-p">
                <p><?=$row['isi']?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
