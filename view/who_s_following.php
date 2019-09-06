 
            

<div class="widget stick-widget">
    <h4 class="widget-title">PAGES</h4>
			
			<ul id="people-list" class="friendz-list">
			<?php
				for($i=0; $i<$nbr_all_page; $i++){
					if(isset($all_page[$i]["pdp_page"])){
						$pdp = $all_page[$i]["pdp_page"];
						$src_pdp = "public/images/picture/pdp_page/$pdp";
					}
					else{
						$src_pdp = "public/images/av.png";
					}
			?>
				<li>
					<figure>
						<img src="<?= $src_pdp ?>" alt="">
					</figure>
					<div class="friendz-meta">
						<a href="#" Onclick = "window.location='index.php?action=visite_page&amp;id=<?=$id?>&amp;nom_page=<?=$all_page[$i]["nom_page"]?>'" ><?= $all_page[$i]["nom_page"] ?></a>
						<i><a href="#" class="__cf_email__" ><?= $all_page[$i]["mail_page"] ?></a></i>
					</div>
				</li>
			<?php
				}
			?>	
        </ul>
  </div>