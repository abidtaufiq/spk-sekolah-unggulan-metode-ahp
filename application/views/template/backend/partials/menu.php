<?php $pag= $this->uri->segment(1); ?>
<?php $page= $this->uri->segment(2); ?>
<?php $pages= $this->uri->segment(3); ?>
	<div class="sidebar-menu">
		<header class="logo-env">
			<!-- logo -->
			<!-- <div class="logo">
				<a href="index.html">
					<img src="<?= base_url() ?>assets/images/logo-light.jpg" width="120" alt="" />
				</a>
			</div> -->


			<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
			<div class="sidebar-mobile-menu visible-xs">
				<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
					<i class="entypo-menu"></i>
				</a>
			</div>
		</header>

		<ul id="main-menu" class="">
			<!-- add class "multiple-expanded" to allow multiple submenus to open -->
			<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
			<li><a href=" <?php echo base_url() ?> " target="_blank"><i class="entypo-monitor"></i><span>Halaman Depan</span></a></li>
			<li <?php if($page=="Dashboard") echo 'class="active opened active" '; ?> ><?= anchor('admin/Dashboard','<i class=entypo-gauge></i><span>Dashboard</span>'); ?></li>
			<li <?php if($pag =="Kriteria" || $pag =="kriteria" || $pag =="Subkriteria" || $pag =="subkriteria") echo 'class="active opened active multiple-expanded" '; ?>>
				<a href="ui-panels.html">
					<i class="entypo-layout"></i>
					<span>Kriteria</span>
				</a>
				<ul>
					<li <?php if($pag=="Kriteria" || $pag=="kriteria" ) echo 'class="active opened active multiple-expanded" '; ?>><?= anchor('Kriteria','<span class=entypo-layout>Kriteria</span>'); ?></li>
					<li <?php if($pag=="Subkriteria" || $pag=="subkriteria") echo 'class="active opened active multiple-expanded" '; ?>><?= anchor('Subkriteria','<span class=entypo-menu> Subkriteria</span>'); ?></li>
				</ul>
			</li>
			<li <?php if($pag=="sekolah" || $pag=="Sekolah") echo 'class="active opened active" '; ?>><?= anchor('Sekolah','<i class=entypo-doc-text></i><span>Sekolah</span>'); ?></li>
			<li <?php if($pag=="Alternatif" || $pag=="alternatif" || $page=="Banding" || $page=="banding" || $page=="Hasil" || $page=="hasil") echo 'class="active opened active multiple-expanded" '; ?>>
				<a href="ui-panels.html">
					<i class="entypo-book"></i>
					<span>Perhitungan</span>
				</a>
				<ul>
					<li <?php if($pag=="alternatif" || $pag=="Alternatif") echo 'class="active opened active multiple-expanded" '; ?>><?= anchor('Alternatif','<span class=entypo-direction>Alternatif</span>'); ?></li>
					<li <?php if($page=="banding" || $page=="Banding") echo 'class="active opened active multiple-expanded" '; ?>><?= anchor('Perbandingan/banding','<span class=entypo-switch> Perbandingan</span>'); ?></li>
					<li <?php if($page=="hasil" || $page=="Hasil") echo 'class="active opened active multiple-expanded" '; ?>><?= anchor('Perbandingan/hasil','<span class=entypo-chart-bar>Hasil Perhitungan</span>'); ?></li>
				</ul>
			</li>
			
			<li <?php if($page=="Auth" ||$page=="auth") echo 'class="active opened active multiple-expanded" '; ?>>
				<a href="ui-panels.html">
					<i class="entypo-tools"></i>
					<span>Pengaturan</span>
				</a>
				<ul>
					<li <?php if($page=="Auth" || $page=="auth") echo 'class="active opened active multiple-expanded" '; ?>><?= anchor('admin/Auth','<span class=entypo-user> Users</span>'); ?></li>
				</ul>
			</li>
			<li><a href="javascript:;" onclick="jQuery('#modal-1').modal('show');"><i class="entypo-help"></i><span>Tentang</span></a></li>
		</ul>

	</div>
	<!-- Modal 1 (Basic)-->
	<div class="modal fade" id="modal-1">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header">
					<h4 class="modal-title">Tentang Website</h4>
				</div>

				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vehicula aliquet pretium. Phasellus ac maximus diam, vel tristique sem. Pellentesque blandit justo dolor, a semper lacus porta nec. Nulla ullamcorper, massa in aliquet aliquet, sapien leo hendrerit neque, sit amet venenatis purus ligula ac magna. Sed vulputate rhoncus tincidunt. Praesent vestibulum, magna eu ullamcorper mattis, ligula metus mollis lacus, ut ornare metus neque eu lacus. Etiam ac consectetur urna. Phasellus sagittis erat dui, non ullamcorper ante vehicula vitae.</p>
					<p>Sed commodo enim ut purus rhoncus, ac accumsan tortor ultricies. In maximus dolor nibh, vitae efficitur odio sodales id. Sed ultricies eget felis ac semper. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aliquam at ipsum magna. Maecenas finibus dignissim nulla, vitae fringilla lectus porttitor sit amet. Integer sit amet ipsum ut ante ornare laoreet a bibendum nisi.</p>
					<p>Aenean imperdiet pellentesque enim. Morbi quis eleifend ipsum. Nulla facilisi. Quisque venenatis metus libero, quis porta augue eleifend et. Curabitur imperdiet justo lobortis metus blandit semper. Nulla lacinia consequat auctor. Nunc scelerisque condimentum nunc, sed interdum velit aliquam eget. Fusce hendrerit quis sem vel convallis.</p>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>
