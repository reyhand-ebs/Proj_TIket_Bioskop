<section  class="homepage-slider" id="home-slider">
	<div class="flexslider">
		<ul class="slides">
		<?php
			//require('../inc.koneksi.php');
			require_once "authorization_admin.php";
            require_once('./class/class.banner.php'); 		
            $objBanner = new Banner(); 
            $arrayResult = $objBanner->SelectAllBanner();

            foreach ($arrayResult as $dataBanner) {
    			echo '<li>';
				echo '<img src="banner/'.$dataBanner->foto.'" alt="" />
	        			<div class="intro">
    						<h1>'.$dataBanner->nama.'</h1>
	        				<p><span>'.$dataBanner->deskripsi1.'</span></p>
							<p><span>'.$dataBanner->deskripsi2.'</span></p>
						</div>';
				echo '</li>';								
			}
		?>	
						
		</ul>
	</div>	
</section>
<section class="header_text">
	We stand for top quality templates. Our genuine developers always optimized bootstrap commercial templates. 
    <br/>Don't miss to use our cheap abd best bootstrap templates.
</section>
