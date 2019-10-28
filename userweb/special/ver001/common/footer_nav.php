
			<div id="footer-nav">
				<div class="inner">
					<nav>
						<ul>
							<li class="invew_up nav03<?php if($active == "3"){echo ' active';} else {} ?>"><a href="<?php echo $Path ?>alfawave/"><img src="<?php echo $Path ?>img/nav_03.png" alt="アルファウェーブ"></a></li>
							<li class="invew_up nav02<?php if($active == "2"){echo ' active';} else {} ?>"><a href="<?php echo $Path ?>sunmat/"><img src="<?php echo $Path ?>img/nav_02.png" alt="サン・マット"></a></li>
							<li class="invew_up nav01<?php if($active == "1"){echo ' active';} else {} ?>"><a href="<?php echo $Path ?>sanramera"><img src="<?php echo $Path ?>img/nav_01.png" alt="サンラメラ"></a></li>
						</ul><?php if($active == ""): ?><? else: ?>
						<p class="invew_up navtop"><a href="<?php echo $Path ?>"><i class="fa fa-home" aria-hidden="true"></i> トップへ</a></p>
						<?php endif; ?>
					</nav>
				</div>
			</div>
