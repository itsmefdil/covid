	<!-- page wrapper -->
	<div class="page-wrapper">

		<div class="section-title title-large">
			<span class="overline-title">Hai , Sekarang tanggal <?php $day = date('d-m-Y') ; echo $day ; ?></span>
			<h3>Pantau Covid Indonesia</h3>
		</div>

		<!-- intro app -->
		<div class="intro-app">
			<div class="container">
				<div class="intro-content">
					<div class="mask"></div>
					<img src="<?php echo base_url()?>assets/images/intro.jpg" alt="image-demo">
					<div class="caption">
						<h4 class="text-white mb-1"><?= $glob_pos['value']?></h4>
						<p class="text-white">Positif Covid-19 Global</p>
					</div>
				</div>
			</div>
		</div>
		<!-- end intro app -->

		<!-- feature slide -->
		<div class="feature-slide">
			<div class="swiper-container swiper-style">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="content shadow-sm">
							<div class="info-statistic bg-red">ID</div>
							<div class="icon"><i class="icon ion-ios-map color-red"></i></div>
							<div class="text">
								<h5>Indonesia</h5>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="content shadow-sm">
							<div class="info-statistic bg-green"><?= $indo[0]['positif']?></div>
							<div class="icon"><i class="icon ion-ios-add-circle-outline color-green"></i></div>
							<div class="text">
								<h5>Positif</h5>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="content shadow-sm">
							<div class="info-statistic bg-blue"><?= $indo[0]['sembuh']?></div>
							<div class="icon"><i class="icon ion-ios-body color-blue"></i></div>
							<div class="text">
								<h5>Sembuh</h5>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="content shadow-sm">
							<div class="info-statistic bg-dark"><?= $indo[0]['meninggal']?></div>
							<div class="icon"><i class="icon ion-ios-sad color-dark"></i></div>
							<div class="text">
								<h5>Meninggal</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	<div class="popup">
			
			<div class="list-view list-separate-two list-colored">
				<ul>
					  <?php $no=1; foreach ($prov as $key => $value) {?>
					<li>
						<a href="#" class="list-item" data-toggle="modal" data-target="#no<?= $no++?>">
							<div class="list-media">
								<i class="icon ion-ios-rocket bg-red"></i>
							</div>
							<div class="list-label">
								<div class="list-title"><?= $value['attributes']['Provinsi']?></div>
							</div>
						</a>
					</li>
					<?php } ?>
				</ul>
			</div>

<?php $no=1; foreach ($prov as $key => $value) {?>
			<!-- modal action content -->
			<div class="modal-action-content">

				

				<div id="no<?= $no++?>" class="modal fade filter-modal">
					<div class="modal-dialog modal-bottom">
						<div class="modal-content">
							<div class="modal-body">
								<div class="modal-icon-title">
									<i class="icon ion-ios-rocket"></i>
									<h5>Provinsi <?= $value['attributes']['Provinsi']?></h5>
									<p class="text-small">Data berdasarkan tiap Provinsi</p>
								</div>
								<div class="filter-tag">
									<div class="row">
										<div class="col-4">
											<span class="active">Positif</span>
										</div>
										<div class="col-4">
											<span class="active">Sembuh</span>
										</div>
										<div class="col-4">
											<span class="active">Meninggal</span>
										</div>
									</div>
									<div class="row">
										<div class="col-4">
											<span><?= $value['attributes']['Kasus_Posi']?></span>
										</div>
										<div class="col-4">
											<span><?= $value['attributes']['Kasus_Semb']?></span>
										</div>
										<div class="col-4">
											<span ><?= $value['attributes']['Kasus_Meni']?></span>
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			<!-- end modal action content -->
			<?php } ?>
				
		</div>
		<!-- end popup variant -->
	<!

	