<div class="col-lg-3">
	<aside class="sidebar static">
		<div class="widget">
			
		<?php
			require("view/your_page.php");
		?>

		</div><!-- page like widget -->
		<div class="widget">
			<div class="banner medium-opacity bluesh">
				<div class="bg-image" style="background-image: url(public/images/resources/baner-widgetbg.jpg)"></div>
				<div class="baner-top">
					<span><img alt="" src="public/images/book-icon.png"></span>
					<i class="fa fa-ellipsis-h"></i>
				</div>
				<div class="banermeta">
					<p>
						créer une page pour mieux récruter.
					</p>
					<span>avec ti-asa</span>
					<a data-ripple="" title="" href="#">Commencer</a>
				</div>
			</div>											
		</div>
		<div class="widget friend-list stick-widget">
			<h4 class="widget-title">Profils intéressants</h4>
			
			<ul id="people-list" class="friendz-list">
			<?php
				while($autres_profil = $afficher_autre_profil->fetch()){
					$id_autre_profil = $autres_profil["id"];
					$username = $autres_profil["username"];
					if(isset($autres_profil["photo_de_profil"])){
						$pdp = $autres_profil["photo_de_profil"];
						$src_pdp = "public/images/picture/pdp/$pdp";
					}
					else{
						$src_pdp = "public/images/av.png";
					}
			?>
				<li>
					<figure>
						<img src="<?= $src_pdp ?>" alt="">
						<span class="status f-online"></span>
					</figure>
					<div class="friendz-meta">
						<a href="#" Onclick = "window.location='index.php?action=affichage_profil&amp;username=<?= $username ?>'" ><?= $autres_profil["prenom"] ?></a>
						<i><a href="#" class="__cf_email__" ><?= $autres_profil["poste"] ?></a></i>
					</div>
				</li>
			<?php
				}
			?>	
			<div class="chat-box">
				<div class="chat-head">
					<span class="status f-online"></span>
					<h6>Bucky Barnes</h6>
					<div class="more">
						<span><i class="ti-more-alt"></i></span>
						<span class="close-mesage"><i class="ti-close"></i></span>
					</div>
				</div>
				<div class="chat-list">
					<ul>
						<li class="me">
							<div class="chat-thumb"><img src="public/images/resources/chatlist1.jpg" alt=""></div>
							<div class="notification-event">
								<span class="chat-message-item">
									Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
								</span>
								<span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
							</div>
						</li>
						<li class="you">
							<div class="chat-thumb"><img src="public/images/resources/chatlist2.jpg" alt=""></div>
							<div class="notification-event">
								<span class="chat-message-item">
									Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
								</span>
								<span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
							</div>
						</li>
						<li class="me">
							<div class="chat-thumb"><img src="public/images/resources/chatlist1.jpg" alt=""></div>
							<div class="notification-event">
								<span class="chat-message-item">
									Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
								</span>
								<span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
							</div>
						</li>
					</ul>
					<form class="text-box">
						<textarea placeholder="Post enter to post..."></textarea>
						<div class="add-smiles">
							<span title="add icon" class="em em-expressionless"></span>
						</div>
						<div class="smiles-bunch">
							<i class="em em---1"></i>
							<i class="em em-smiley"></i>
							<i class="em em-anguished"></i>
							<i class="em em-laughing"></i>
							<i class="em em-angry"></i>
							<i class="em em-astonished"></i>
							<i class="em em-blush"></i>
							<i class="em em-disappointed"></i>
							<i class="em em-worried"></i>
							<i class="em em-kissing_heart"></i>
							<i class="em em-rage"></i>
							<i class="em em-stuck_out_tongue"></i>
						</div>
						<button type="submit"></button>
					</form>
				</div>
			</div>
		</div><!-- friends list sidebar -->
	</aside>
</div>