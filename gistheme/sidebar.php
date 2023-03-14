<section id="sidebar" class="">
		<div class="sidebar-user-logo">
			<?php if ( has_custom_logo()) : ?>
			<div class="site-logo" style="border: none;"><?php the_custom_logo(); ?></div>
			<?php endif; ?>
		</div>
		<!--<ul id="tabs">
			<li><a id="tab1">TRUY VẤN</a></li>
			 <li><a id="tab2">TÌM KIẾM</a></li>
		</ul>-->
		<div class="nav nav-sidebar container" id="tab1C" data-nav-type="accordion">
			<div class="nav-item-header">
				<div class="text-uppercase font-size-xs line-height-xs">Bản đồ</div>
			</div>

			<li class="nav-item nav-item-submenu  active-ca">
				<a href="#" class="nav-link legitRipple"><i class="fas fa-list-alt"></i> <span> Các lớp dữ liệu </span></a>
				<ul class="nav nav-group-sub" data-submenu-title="Các lớp dữ liệu">
					<li class="nav-item">
						<label class="switch">
							<input type="checkbox" id="chkRanhGioiXa" checked="checked" onclick="setLayerVisible(this.id);" />
							<span class="slider round"></span>
						</label>
						<span class="triger-pi">Kênh hở</span>
					</li>
					<li class="nav-item">
						<label class="switch">
							<input type="checkbox" id="chkRanhGioiHuyen" checked="checked" onclick="setLayerVisible(this.id);" />
							<span class="slider round"></span>
						</label>
						<span class="triger-pi">Cống ngầm</span>
					</li>
					<li class="nav-item">
						<label class="switch">
							<input type="checkbox"  id="chkBanDoNgap" checked="checked"  onclick="setLayerVisible(this.id);"/>
							<span class="slider round"></span>
						</label>
						<span class="triger-pi">Hố ga</span>
					</li>
					<li class="nav-item">
						<label class="switch">
							<input type="checkbox" id="chkSongSuoi" checked="checked" onclick="setLayerVisible(this.id);" />
							<span class="slider round"></span>
						</label>
						<span class="triger-pi">Cửa xả</span>
					</li>
					<li class="nav-item">
						<label class="switch">
							<input type="checkbox" id="chkDuongBo" checked="checked" onclick="setLayerVisible(this.id);" />
							<span class="slider round"></span>
						</label>
						<span class="triger-pi">Cửa ngăn triều</span>
					</li>
					<li class="nav-item">
						<label class="switch">
							<input type="checkbox" id="chkDuongBo" checked="checked" onclick="setLayerVisible(this.id);" />
							<span class="slider round"></span>
						</label>
						<span class="triger-pi">Tiểu lưu vực</span>
					</li>
				</ul>
			</li>
			<li class="nav-item nav-item-submenu">
				<a href="#" class="nav-link legitRipple"><i class="fas fa-map-marked-alt"></i> <span>Bản đồ nền</span></a>
				<ul class="nav nav-group-sub" data-submenu-title="Bản đồ nền">

					<li class="nav-item">
						<label class="switch">
							<input type="checkbox" id="GoogleSattelite"  checked="checked" onclick="setBasemap('GoogleSattelite');"/>
							<span class="slider round"></span>
						</label>
						<span class="triger-pi">Google Sattelite</span>
						</li>
					<li class="nav-item">
						<label class="switch">
							<input type="checkbox" id="OpenStreetMap"  onclick="setBasemap('OpenStreetMap');"/>
							<span class="slider round"></span>
						</label>
						<span class="triger-pi">OpenStreet Map</span>
					</li>
					<li class="nav-item">
						<label class="switch">
							<input type="checkbox" id="noBaseMap"  onclick="setBasemap('noBaseMap');"/>
							<span class="slider round"></span>
						</label>
						<span class="triger-pi">No Basemap</span>
					</li>

				</ul>
			</li>
			<li class="nav-item nav-item-submenu">
				<a href="#" class="nav-link legitRipple"><i class="fas fa-tools"></i> <span>Công cụ</span></a>
				<ul class="nav nav-group-sub" data-submenu-title="Công cụ">
				</ul>
			</li>
			
			<div class="nav-item-header">
				<div class="text-uppercase font-size-xs line-height-xs">Chú thích</div>
			</div>
		</div>
	</section>