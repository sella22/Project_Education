<div class="content">
<div class="row">
		<div class="col">
			<div class="card ">
				<div class="card-body ">
					<nav class="navbar navbar-expand-lg">
						<ul>
							<li><a href="#">Kecamatan</a>
								<ul>
									<li><a href="<?php echo site_url('kec_rumbai/'); ?>">Rumbai</a></li>
									<li><a href="<?php echo site_url('kec_payung/'); ?>">Payung Sekaki</a></li>
									<li><a href="<?php echo site_url('kec_rumbaipesisir/'); ?>">Rumbai Pesisir</a></li>
									<li><a href="<?php echo site_url('kec_tampan/'); ?>">Tampan</a></li>
									<li><a href="<?php echo site_url('kec_tenayan/'); ?>">Tenayan Raya</a></li>
									<li><a href="<?php echo site_url('kec_bukit/'); ?>">Bukit Raya</a></li>
									<li><a href="<?php echo site_url('kec_marpoyan/'); ?>">Marpoyan Damai</a></li>
									<li><a href="<?php echo site_url('kec_sukajadi/'); ?>">Sukajadi</a></li>
									<li><a href="<?php echo site_url('kec_senapelan/'); ?>">Senapelan</a></li>
									<li><a href="<?php echo site_url('kec_sail/'); ?>">Sail</a></li>
									<li><a href="<?php echo site_url('kec_pekan/'); ?>">Pekanbaru Kota</a></li>
									<li><a href="<?php echo site_url('kec_lima/'); ?>">Lima Kota</a></li>
								</ul>
							</li>
							<li><a href="#" class="form-select form-select-sm">Education </a>
								<ul>
									<li><a href="<?php echo site_url('tk/'); ?>">TK</a></li>
									<li><a href="<?php echo site_url('sd/'); ?>">SD</a></li>
									<li><a href="<?php echo site_url('smp/'); ?>">SMP</a></li>
									<li><a href="<?php echo site_url('sma/'); ?>">SMA</a></li>
									<li><a href="<?php echo site_url('ma/'); ?>">MA</a></li>
									<li><a href="<?php echo site_url('mts/'); ?>">MTS</a></li>
									<li><a href="<?php echo site_url('mi/'); ?>">MI</a></li>
									<li><a href="<?php echo site_url('univ/'); ?>">Perguruan Tinggi</a></li>
								</ul>
							</li>
							<li><a href="<?php echo site_url('peta/'); ?>">Home</a></li>
						</ul>
					</nav>
					<div id="map" class="map" style="width:97%; margin-left:auto;margin-right:auto"></div>

					<div id="popup" class="ol-popup">
						<a href="#" id="popup-closer" class="ol-popup-closer"></a>
						<div id="popup-content"></div>
					</div>


					<script type="text/javascript">
						var VectorLayers = new ol.layer.Vector({
							source: new ol.source.Vector({
								format: new ol.format.GeoJSON(),
								url: '<?= base_url('assets/'); ?>json/sd.geojson'
							}),
							style: new ol.style.Style({
								image: new ol.style.Icon(({
									anchor: [0.5, 46],
									anchorXUnits: 'fraticon',
									anchorYUnits: 'pixels',
									src: '<?= base_url('icon/'); ?>img/edu/sd.png'
								}))
							})
						});

						var map = new ol.Map({
							target: 'map',
							layers: [
								new ol.layer.Tile({
									source: new ol.source.OSM()
								}), VectorLayers
							],
							view: new ol.View({
								center: ol.proj.fromLonLat([101.438309, 0.510440]),
								zoom: 11
							})
						});
					</script>

					<script type="text/javascript">
						var container = document.getElementById('popup'),
							content_element = document.getElementById('popup-content'),
							closer = document.getElementById('popup-closer');
						closer.onclick = function() {
							overlay.setPosition(undefined);
							closer.blur();
							return false;
						};
						var overlay = new ol.Overlay({
							element: container,
							autoPan: true,
							offset: [0, -10]
						});

						map.addOverlay(overlay);

						var Fullscreen = new ol.control.FullScreen();
						map.addControl(Fullscreen);
						map.on('click', function(evt) {
							var feature = map.forEachFeatureAtPixel(evt.pixel,
								function(feature, Layer) {
									return feature;
								});
							if (feature) {
								var geometry = feature.getGeometry();
								var coord = geometry.getCoordinates();
								var content = '<h6>' + feature.get('nama_education') + '</h6>';

								content += '<p>Jenis Edukasi: ' + feature.get('jenis_education') +
									'<br>' + 'Alamat: ' + feature.get('Alamat') +
									'<br>' + 'Kecamatan: ' + feature.get('Kecamatan') +
									'<br>' + 'Kelurahan: ' + feature.get('Kelurahan') +
									'<br>' + 'Akreditasi: ' + feature.get('akre') +
									'<br>' + 'Rating: ' + feature.get('rating') +
									'<br>' + 'Status: ' + feature.get('STATUS') +
									'<br>' + 'Koordinat: ' + feature.get('X') + ', ' + feature.get('Y') + '</p>';


								content += '<img src="' + feature.get('LINK PHOTO') + '" height="200"/>';

								content_element.innerHTML = content;
								overlay.setPosition(coord);
								console.info(feature.getProperties());
							}
						});
					</script>
				</div>
			</div>
		</div>
	</div>
</div>
