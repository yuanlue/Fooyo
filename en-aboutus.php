<<<<<<< HEAD
<?php
/*
Category Template:enabout us
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	  <title><?php if ( is_home() ) {
        bloginfo('name'); echo " - "; bloginfo('description');
    } elseif ( is_category() ) {
        single_cat_title(); echo " - "; bloginfo('name');
    } elseif (is_single() || is_page() ) {
        single_post_title();
    } elseif (is_search() ) {
        echo "搜索结果"; echo " - "; bloginfo('name');
    } elseif (is_404() ) {
        echo '页面未找到!';
    } else {
        wp_title('',true);
    } ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <meta name="robots" content="noodp">
<meta property="og:locale" content="en_US">
<meta property="og:locale:alternate" content="zh_CN">
<meta property="og:type" content="article">
<meta property="og:title" content="About">
<meta property="og:url" content="http://www.fooyo.sg/about/">
<meta property="og:site_name" content="Fooyo|With fooyo, building dreams">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="About">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/common.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/en-style.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/guanyu.css">
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/rem.js"></script>
	  <script src='<?php bloginfo('template_url'); ?>/js/jquery-3.1.0.min.js'></script>
	   <script src="<?php bloginfo('template_url'); ?>/js/common.js"></script>
</head>
<body>
	<div class="guanyu	">
		<div class="top">
			<h1>
		      <svg width="133px" height="32px" viewBox="0 0 133 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
		        <desc>Created with Sketch.</desc>
		        <defs></defs>
		        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
		          <g id="Fooyo_Logo" sketch:type="MSLayerGroup">
		            <g id="patern_1_" sketch:type="MSShapeGroup">
		              <g id="Ellipse_1" fill="#366695">
		                <ellipse id="Oval" cx="6.03170254" cy="5.93015873" rx="6.03170254" ry="5.93015873"></ellipse>
		              </g>
		              <g id="Ellipse_1_copy_2" transform="translate(6.457926, 14.222222)" fill="#40ABB4">
		              <ellipse id="Oval" cx="5.1146771" cy="5.05396825" rx="5.02426614" ry="4.93968254"></ellipse>
		            </g>
		          <g id="Ellipse_1_copy" transform="translate(16.532290, 2.920635)" fill="#47DCCB">
		              <ellipse id="Oval" cx="4.5851272" cy="4.4952381" rx="4.52054795" ry="4.44444444"></ellipse>
		          </g>
		          <g id="Ellipse_1_copy_3" transform="translate(21.052838, 16.253968)" fill="#95F4E9">
		              <ellipse id="Oval" cx="4.09432485" cy="4.01269841" rx="4.01682975" ry="3.94920635"></ellipse>
		          </g>
		        </g>
		        <g id="word_1_" transform="translate(36.551859, 0.000000)" fill="#263248" sketch:type="MSShapeGroup">
		          <g id="Ellipse_2_copy">
		              <path d="M26.4258317,6.17142857 C20.7428571,6.17142857 16.9714286,9.76507937 16.9714286,15.3904762 C16.9714286,21.015873 20.9495108,24.3555556 26.1287671,24.3555556 C30.8688845,24.3555556 35.4669276,21.4349206 35.4669276,15.0603175 C35.4798434,9.84126984 31.8634051,6.17142857 26.4258317,6.17142857 L26.4258317,6.17142857 Z M26.2837573,20.4825397 C23.9330724,20.4825397 22.667319,18.2349206 22.667319,15.2507937 C22.667319,12.6857143 23.6489237,10.0190476 26.2837573,10.0190476 C28.7765166,10.0190476 29.7968689,12.647619 29.7968689,15.2507937 C29.7968689,18.3746032 28.4277886,20.4825397 26.2837573,20.4825397 L26.2837573,20.4825397 Z M68.1052838,15.0984127 C67.8469667,16.0888889 67.562818,17.4095238 67.304501,18.3365079 L67.2011742,18.3365079 C66.9816047,17.4095238 66.6199609,16.1269841 66.3358121,15.0984127 L63.6880626,6.55238095 L57.5659491,6.55238095 L64.0497065,22.4761905 C64.2692759,22.9079365 64.3080235,23.1873016 64.3080235,23.3650794 C64.3080235,23.6190476 64.2046967,23.8984127 64.0238748,24.152381 C63.481409,25.0412698 62.5772994,25.8920635 61.7377691,26.3238095 C60.9111546,26.8190476 60.0328767,27.1365079 59.3483366,27.2507937 L59.3612524,27.2761905 C58.353816,27.5555556 57.6176125,28.4571429 57.6176125,29.5365079 C57.6176125,30.831746 58.6896282,31.8857143 60.007045,31.8857143 C60.1749511,31.8857143 60.3428571,31.8603175 60.5107632,31.8349206 L60.5107632,31.847619 C61.8927593,31.6698413 63.9205479,31.0984127 65.8320939,29.4603175 C67.821135,27.7206349 69.5260274,24.9396825 72.0575342,18.031746 L76.1906067,6.57777778 L70.2880626,6.57777778 L68.1052838,15.0984127 L68.1052838,15.0984127 Z M47.4270059,6.17142857 C41.7440313,6.17142857 37.9726027,9.76507937 37.9726027,15.3904762 C37.9726027,21.015873 41.9506849,24.3555556 47.1299413,24.3555556 C51.8700587,24.3555556 56.4681018,21.4349206 56.4681018,15.0603175 C56.4810176,9.84126984 52.8645793,6.17142857 47.4270059,6.17142857 L47.4270059,6.17142857 Z M47.2849315,20.4825397 C44.9342466,20.4825397 43.6684932,18.2349206 43.6684932,15.2507937 C43.6684932,12.6857143 44.6500978,10.0190476 47.2849315,10.0190476 C49.7776908,10.0190476 50.7980431,12.647619 50.7980431,15.2507937 C50.7980431,18.3746032 49.416047,20.4825397 47.2849315,20.4825397 L47.2849315,20.4825397 Z M14.6982387,4.43174603 C14.7886497,4.44444444 14.8919765,4.45714286 14.9823875,4.45714286 C16.2610568,4.45714286 17.3072407,3.42857143 17.3072407,2.17142857 C17.3072407,1.16825397 16.6485323,0.317460317 15.7444227,0.0126984127 L0.0387475538,0.0126984127 L0.0387475538,23.9746032 L0.142074364,23.9746032 C0.193737769,25.4095238 1.38199609,26.552381 2.85440313,26.552381 C4.32681018,26.552381 5.51506849,25.4095238 5.5667319,23.9746032 L5.5925636,23.9746032 L5.5925636,14.3238095 L13.807045,14.3238095 C13.9232877,14.3365079 14.0395303,14.3492063 14.155773,14.3492063 C15.4086106,14.3492063 16.416047,13.3587302 16.416047,12.1269841 C16.416047,10.9587302 15.5119374,10.0063492 14.3495108,9.91746032 L14.3495108,9.9047619 L14.1816047,9.9047619 L14.155773,9.9047619 L14.1299413,9.9047619 L5.5925636,9.9047619 L5.5925636,4.43174603 L14.6982387,4.43174603 L14.6982387,4.43174603 Z M86.3941292,6.17142857 C80.7111546,6.17142857 76.939726,9.76507937 76.939726,15.3904762 C76.939726,21.015873 80.9178082,24.3555556 86.0970646,24.3555556 C90.837182,24.3555556 95.435225,21.4349206 95.435225,15.0603175 C95.4481409,9.84126984 91.8187867,6.17142857 86.3941292,6.17142857 L86.3941292,6.17142857 Z M86.2391389,20.4825397 C83.888454,20.4825397 82.6227006,18.2349206 82.6227006,15.2507937 C82.6227006,12.6857143 83.6043053,10.0190476 86.2391389,10.0190476 C88.7318982,10.0190476 89.7522505,12.647619 89.7522505,15.2507937 C89.7522505,18.3746032 88.3831703,20.4825397 86.2391389,20.4825397 L86.2391389,20.4825397 Z" id="Shape">
		            </path>
		          </g>
		        </g>
		      </svg>
		    </h1>
<?php get_header();?>
	    	<a href="javascript:;" class="menu"></a>
	  	</div>
	  	<div class="bg">
	  		<div class="h2">
	  			<div>
	  				<p>浮</p>
	  				<p>游</p>
	  			</div>
	  			<small>Story</small>
	  		</div>
	  		<p class="intro">Fooyo (浮游) means floating, a state of simplicity and freedom.</p>
	  		<p class="t">Birth</p>
	  		<p class="c">April 2014, a virtual chatting group was formed between four gentlemen, Rick in	Zürich,	Zeyu in	Toronto,Shao and Zing in Singapore, coming up with the idea to</p>
	  		<p class="c">create a small and	beautiful tech studio that makes elegant products.</p>
	  		<p class="c"> We named our studio "Fooyo" which sounds	like "浮游"	in Chinese. </p>
	  		<p class="c">It stands for a pure and simple object that can bring beauty and freedom.</p>
	 
	  	</div>
		 <div class="brand">
		 	<div class="inner">
		 		<div>
		 			<h2 class="t">Brand</h2>
		 			<p class="c first">The brand color was inspired by the beautiful color of the Ko Tao island in Thailand. Instead of picking traditional IT blue colors, the designer Keyan </p>
		 			<p class="c">found turquoise and venetian blue more fresh and vital. "They are natural colors of the ocean. </p>
		 			<p class="c bottom">It's a beautiful and small company, with great potentials </p>
		 			
		 		</div>
		 	</div>
		 </div>
		 	  	<div class="color">
		 	<ul class="clexrfix">
		 		<li>
		 			<div></div>
		 			<p>#366695</p>
		 		</li>
		 		<li>
		 			<div></div>
		 			<p>#40abbc</p>
		 		</li>
		 		<li>
		 			<div></div>
		 			<p>#47dccb</p>
		 		</li>
		 		<li>
		 			<div></div>
		 			<p>#95f4e9</p>
		 		</li>
		 	</ul>
		 </div>
		 <div class="team">
		 	<div>
		 		<h2>Our Team</h2>
		 		<p>We are a group of professionals passionate about creating products to solve real world problems and make people's lives easier and better.</p>
		 	</div>
		 	<div class="img-boxs">
	
		 		<ul class="clearfix">

		 <?php if(have_posts()):?>
		<?php while(have_posts()):the_post();?>
	
			<li  class="img-box">
		
		 				<div class="boxT" style="background-image: url('<?php the_post_thumbnail_url();?>')">
                </div>
					<div class="secondboxT" ><?php if (class_exists('MultiPostThumbnails')) : MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image'); endif; ?></div>

                <h1><?php the_title();?></h1>
                <p class="tag"><?php  echo strip_tags(get_the_tag_list(), '' );?></p>
                
		 			</li>
	
		 		
		<?php endwhile;?>
		<?php else:?><h1>not found</h1>
		<?php  endif;?>
			
		 		</ul>

		 	</div>
		 	
		 </div>
		 	 		 <footer>
            <svg width="133px" height="32px" viewBox="0 0 133 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
              <desc>Created with Sketch.</desc>
              <defs></defs>
              <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                <g id="Fooyo_Logo" sketch:type="MSLayerGroup">
                  <g id="patern_1_" sketch:type="MSShapeGroup">
                    <g id="Ellipse_1" fill="#366695">
                      <ellipse id="Oval" cx="6.03170254" cy="5.93015873" rx="6.03170254" ry="5.93015873"></ellipse>
                    </g>
                    <g id="Ellipse_1_copy_2" transform="translate(6.457926, 14.222222)" fill="#40ABB4">
                    <ellipse id="Oval" cx="5.1146771" cy="5.05396825" rx="5.02426614" ry="4.93968254"></ellipse>
                  </g>
                <g id="Ellipse_1_copy" transform="translate(16.532290, 2.920635)" fill="#47DCCB">
                    <ellipse id="Oval" cx="4.5851272" cy="4.4952381" rx="4.52054795" ry="4.44444444"></ellipse>
                </g>
                <g id="Ellipse_1_copy_3" transform="translate(21.052838, 16.253968)" fill="#95F4E9">
                    <ellipse id="Oval" cx="4.09432485" cy="4.01269841" rx="4.01682975" ry="3.94920635"></ellipse>
                </g>
              </g>
              <g id="word_1_" transform="translate(36.551859, 0.000000)" fill="#263248" sketch:type="MSShapeGroup">
                <g id="Ellipse_2_copy">
                    <path d="M26.4258317,6.17142857 C20.7428571,6.17142857 16.9714286,9.76507937 16.9714286,15.3904762 C16.9714286,21.015873 20.9495108,24.3555556 26.1287671,24.3555556 C30.8688845,24.3555556 35.4669276,21.4349206 35.4669276,15.0603175 C35.4798434,9.84126984 31.8634051,6.17142857 26.4258317,6.17142857 L26.4258317,6.17142857 Z M26.2837573,20.4825397 C23.9330724,20.4825397 22.667319,18.2349206 22.667319,15.2507937 C22.667319,12.6857143 23.6489237,10.0190476 26.2837573,10.0190476 C28.7765166,10.0190476 29.7968689,12.647619 29.7968689,15.2507937 C29.7968689,18.3746032 28.4277886,20.4825397 26.2837573,20.4825397 L26.2837573,20.4825397 Z M68.1052838,15.0984127 C67.8469667,16.0888889 67.562818,17.4095238 67.304501,18.3365079 L67.2011742,18.3365079 C66.9816047,17.4095238 66.6199609,16.1269841 66.3358121,15.0984127 L63.6880626,6.55238095 L57.5659491,6.55238095 L64.0497065,22.4761905 C64.2692759,22.9079365 64.3080235,23.1873016 64.3080235,23.3650794 C64.3080235,23.6190476 64.2046967,23.8984127 64.0238748,24.152381 C63.481409,25.0412698 62.5772994,25.8920635 61.7377691,26.3238095 C60.9111546,26.8190476 60.0328767,27.1365079 59.3483366,27.2507937 L59.3612524,27.2761905 C58.353816,27.5555556 57.6176125,28.4571429 57.6176125,29.5365079 C57.6176125,30.831746 58.6896282,31.8857143 60.007045,31.8857143 C60.1749511,31.8857143 60.3428571,31.8603175 60.5107632,31.8349206 L60.5107632,31.847619 C61.8927593,31.6698413 63.9205479,31.0984127 65.8320939,29.4603175 C67.821135,27.7206349 69.5260274,24.9396825 72.0575342,18.031746 L76.1906067,6.57777778 L70.2880626,6.57777778 L68.1052838,15.0984127 L68.1052838,15.0984127 Z M47.4270059,6.17142857 C41.7440313,6.17142857 37.9726027,9.76507937 37.9726027,15.3904762 C37.9726027,21.015873 41.9506849,24.3555556 47.1299413,24.3555556 C51.8700587,24.3555556 56.4681018,21.4349206 56.4681018,15.0603175 C56.4810176,9.84126984 52.8645793,6.17142857 47.4270059,6.17142857 L47.4270059,6.17142857 Z M47.2849315,20.4825397 C44.9342466,20.4825397 43.6684932,18.2349206 43.6684932,15.2507937 C43.6684932,12.6857143 44.6500978,10.0190476 47.2849315,10.0190476 C49.7776908,10.0190476 50.7980431,12.647619 50.7980431,15.2507937 C50.7980431,18.3746032 49.416047,20.4825397 47.2849315,20.4825397 L47.2849315,20.4825397 Z M14.6982387,4.43174603 C14.7886497,4.44444444 14.8919765,4.45714286 14.9823875,4.45714286 C16.2610568,4.45714286 17.3072407,3.42857143 17.3072407,2.17142857 C17.3072407,1.16825397 16.6485323,0.317460317 15.7444227,0.0126984127 L0.0387475538,0.0126984127 L0.0387475538,23.9746032 L0.142074364,23.9746032 C0.193737769,25.4095238 1.38199609,26.552381 2.85440313,26.552381 C4.32681018,26.552381 5.51506849,25.4095238 5.5667319,23.9746032 L5.5925636,23.9746032 L5.5925636,14.3238095 L13.807045,14.3238095 C13.9232877,14.3365079 14.0395303,14.3492063 14.155773,14.3492063 C15.4086106,14.3492063 16.416047,13.3587302 16.416047,12.1269841 C16.416047,10.9587302 15.5119374,10.0063492 14.3495108,9.91746032 L14.3495108,9.9047619 L14.1816047,9.9047619 L14.155773,9.9047619 L14.1299413,9.9047619 L5.5925636,9.9047619 L5.5925636,4.43174603 L14.6982387,4.43174603 L14.6982387,4.43174603 Z M86.3941292,6.17142857 C80.7111546,6.17142857 76.939726,9.76507937 76.939726,15.3904762 C76.939726,21.015873 80.9178082,24.3555556 86.0970646,24.3555556 C90.837182,24.3555556 95.435225,21.4349206 95.435225,15.0603175 C95.4481409,9.84126984 91.8187867,6.17142857 86.3941292,6.17142857 L86.3941292,6.17142857 Z M86.2391389,20.4825397 C83.888454,20.4825397 82.6227006,18.2349206 82.6227006,15.2507937 C82.6227006,12.6857143 83.6043053,10.0190476 86.2391389,10.0190476 C88.7318982,10.0190476 89.7522505,12.647619 89.7522505,15.2507937 C89.7522505,18.3746032 88.3831703,20.4825397 86.2391389,20.4825397 L86.2391389,20.4825397 Z" id="Shape">
                  </path>
                </g>
              </g>
            </svg>
 	        <p>
	          <span>Address：3 Science Park Drive,The Franklin #02-07,Singapore</span>
	          <span>Postcode：118223</span>
	          <span>Tel：(+65)84127233</span>
	          <span>E-mail：hi@fooyo.sg</span>
	        </p>
          </footer>
	 </div>

</body>
</html>
<script>
	var term=[];
	$(".guanyu .team .img-boxs .clearfix .img-box").each(function(index, el) {
		term.push($(this).height())
	});
	var max=Math.max.apply(Math,term)
	$(".guanyu .team ul li").css("min-height",max)
</script>
  <script>
    $(".current-menu-item").addClass('active')
       $(".img-box").each(function(index, el) {
    	$(this).hover(function() {
    		if($(this).find('img').length>0)
    		{	
    			$(this).children('.boxT').animate({"opacity":"0"},400,function(){
    				
    			});
    			
    		}
    	}, function() {
    		  			$(this).children('.boxT').animate({"opacity":"1"},400,function(){
    		  			
    		  			});
    			
    	});
    });
=======
<?php
/*
Category Template:enabout us
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	  <title><?php if ( is_home() ) {
        bloginfo('name'); echo " - "; bloginfo('description');
    } elseif ( is_category() ) {
        single_cat_title(); echo " - "; bloginfo('name');
    } elseif (is_single() || is_page() ) {
        single_post_title();
    } elseif (is_search() ) {
        echo "搜索结果"; echo " - "; bloginfo('name');
    } elseif (is_404() ) {
        echo '页面未找到!';
    } else {
        wp_title('',true);
    } ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <meta name="robots" content="noodp">
<meta property="og:locale" content="en_US">
<meta property="og:locale:alternate" content="zh_CN">
<meta property="og:type" content="article">
<meta property="og:title" content="About">
<meta property="og:url" content="http://www.fooyo.sg/about/">
<meta property="og:site_name" content="Fooyo|With fooyo, building dreams">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="About">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/common.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/en-style.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/guanyu.css">
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/rem.js"></script>
	  <script src='<?php bloginfo('template_url'); ?>/js/jquery-3.1.0.min.js'></script>
	   <script src="<?php bloginfo('template_url'); ?>/js/common.js"></script>
</head>
<body>
	<div class="guanyu	">
		<div class="top">
			<h1>
		      <svg width="133px" height="32px" viewBox="0 0 133 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
		        <desc>Created with Sketch.</desc>
		        <defs></defs>
		        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
		          <g id="Fooyo_Logo" sketch:type="MSLayerGroup">
		            <g id="patern_1_" sketch:type="MSShapeGroup">
		              <g id="Ellipse_1" fill="#366695">
		                <ellipse id="Oval" cx="6.03170254" cy="5.93015873" rx="6.03170254" ry="5.93015873"></ellipse>
		              </g>
		              <g id="Ellipse_1_copy_2" transform="translate(6.457926, 14.222222)" fill="#40ABB4">
		              <ellipse id="Oval" cx="5.1146771" cy="5.05396825" rx="5.02426614" ry="4.93968254"></ellipse>
		            </g>
		          <g id="Ellipse_1_copy" transform="translate(16.532290, 2.920635)" fill="#47DCCB">
		              <ellipse id="Oval" cx="4.5851272" cy="4.4952381" rx="4.52054795" ry="4.44444444"></ellipse>
		          </g>
		          <g id="Ellipse_1_copy_3" transform="translate(21.052838, 16.253968)" fill="#95F4E9">
		              <ellipse id="Oval" cx="4.09432485" cy="4.01269841" rx="4.01682975" ry="3.94920635"></ellipse>
		          </g>
		        </g>
		        <g id="word_1_" transform="translate(36.551859, 0.000000)" fill="#263248" sketch:type="MSShapeGroup">
		          <g id="Ellipse_2_copy">
		              <path d="M26.4258317,6.17142857 C20.7428571,6.17142857 16.9714286,9.76507937 16.9714286,15.3904762 C16.9714286,21.015873 20.9495108,24.3555556 26.1287671,24.3555556 C30.8688845,24.3555556 35.4669276,21.4349206 35.4669276,15.0603175 C35.4798434,9.84126984 31.8634051,6.17142857 26.4258317,6.17142857 L26.4258317,6.17142857 Z M26.2837573,20.4825397 C23.9330724,20.4825397 22.667319,18.2349206 22.667319,15.2507937 C22.667319,12.6857143 23.6489237,10.0190476 26.2837573,10.0190476 C28.7765166,10.0190476 29.7968689,12.647619 29.7968689,15.2507937 C29.7968689,18.3746032 28.4277886,20.4825397 26.2837573,20.4825397 L26.2837573,20.4825397 Z M68.1052838,15.0984127 C67.8469667,16.0888889 67.562818,17.4095238 67.304501,18.3365079 L67.2011742,18.3365079 C66.9816047,17.4095238 66.6199609,16.1269841 66.3358121,15.0984127 L63.6880626,6.55238095 L57.5659491,6.55238095 L64.0497065,22.4761905 C64.2692759,22.9079365 64.3080235,23.1873016 64.3080235,23.3650794 C64.3080235,23.6190476 64.2046967,23.8984127 64.0238748,24.152381 C63.481409,25.0412698 62.5772994,25.8920635 61.7377691,26.3238095 C60.9111546,26.8190476 60.0328767,27.1365079 59.3483366,27.2507937 L59.3612524,27.2761905 C58.353816,27.5555556 57.6176125,28.4571429 57.6176125,29.5365079 C57.6176125,30.831746 58.6896282,31.8857143 60.007045,31.8857143 C60.1749511,31.8857143 60.3428571,31.8603175 60.5107632,31.8349206 L60.5107632,31.847619 C61.8927593,31.6698413 63.9205479,31.0984127 65.8320939,29.4603175 C67.821135,27.7206349 69.5260274,24.9396825 72.0575342,18.031746 L76.1906067,6.57777778 L70.2880626,6.57777778 L68.1052838,15.0984127 L68.1052838,15.0984127 Z M47.4270059,6.17142857 C41.7440313,6.17142857 37.9726027,9.76507937 37.9726027,15.3904762 C37.9726027,21.015873 41.9506849,24.3555556 47.1299413,24.3555556 C51.8700587,24.3555556 56.4681018,21.4349206 56.4681018,15.0603175 C56.4810176,9.84126984 52.8645793,6.17142857 47.4270059,6.17142857 L47.4270059,6.17142857 Z M47.2849315,20.4825397 C44.9342466,20.4825397 43.6684932,18.2349206 43.6684932,15.2507937 C43.6684932,12.6857143 44.6500978,10.0190476 47.2849315,10.0190476 C49.7776908,10.0190476 50.7980431,12.647619 50.7980431,15.2507937 C50.7980431,18.3746032 49.416047,20.4825397 47.2849315,20.4825397 L47.2849315,20.4825397 Z M14.6982387,4.43174603 C14.7886497,4.44444444 14.8919765,4.45714286 14.9823875,4.45714286 C16.2610568,4.45714286 17.3072407,3.42857143 17.3072407,2.17142857 C17.3072407,1.16825397 16.6485323,0.317460317 15.7444227,0.0126984127 L0.0387475538,0.0126984127 L0.0387475538,23.9746032 L0.142074364,23.9746032 C0.193737769,25.4095238 1.38199609,26.552381 2.85440313,26.552381 C4.32681018,26.552381 5.51506849,25.4095238 5.5667319,23.9746032 L5.5925636,23.9746032 L5.5925636,14.3238095 L13.807045,14.3238095 C13.9232877,14.3365079 14.0395303,14.3492063 14.155773,14.3492063 C15.4086106,14.3492063 16.416047,13.3587302 16.416047,12.1269841 C16.416047,10.9587302 15.5119374,10.0063492 14.3495108,9.91746032 L14.3495108,9.9047619 L14.1816047,9.9047619 L14.155773,9.9047619 L14.1299413,9.9047619 L5.5925636,9.9047619 L5.5925636,4.43174603 L14.6982387,4.43174603 L14.6982387,4.43174603 Z M86.3941292,6.17142857 C80.7111546,6.17142857 76.939726,9.76507937 76.939726,15.3904762 C76.939726,21.015873 80.9178082,24.3555556 86.0970646,24.3555556 C90.837182,24.3555556 95.435225,21.4349206 95.435225,15.0603175 C95.4481409,9.84126984 91.8187867,6.17142857 86.3941292,6.17142857 L86.3941292,6.17142857 Z M86.2391389,20.4825397 C83.888454,20.4825397 82.6227006,18.2349206 82.6227006,15.2507937 C82.6227006,12.6857143 83.6043053,10.0190476 86.2391389,10.0190476 C88.7318982,10.0190476 89.7522505,12.647619 89.7522505,15.2507937 C89.7522505,18.3746032 88.3831703,20.4825397 86.2391389,20.4825397 L86.2391389,20.4825397 Z" id="Shape">
		            </path>
		          </g>
		        </g>
		      </svg>
		    </h1>
<?php get_header();?>
	    	<a href="javascript:;" class="menu"></a>
	  	</div>
	  	<div class="bg">
	  		<div class="h2">
	  			<div>
	  				<p>浮</p>
	  				<p>游</p>
	  			</div>
	  			<small>Story</small>
	  		</div>
	  		<p class="intro">Fooyo (浮游) means floating, a state of simplicity and freedom.</p>
	  		<p class="t">Birth</p>
	  		<p class="c">April 2014, a virtual chatting group was formed between four gentlemen, Rick in	Zürich,	Zeyu in	Toronto,Shao and Zing in Singapore, coming up with the idea to</p>
	  		<p class="c">create a small and	beautiful tech studio that makes elegant products.</p>
	  		<p class="c"> We named our studio "Fooyo" which sounds	like "浮游"	in Chinese. </p>
	  		<p class="c">It stands for a pure and simple object that can bring beauty and freedom.</p>
	 
	  	</div>
		 <div class="brand">
		 	<div class="inner">
		 		<div>
		 			<h2 class="t">Brand</h2>
		 			<p class="c first">The brand color was inspired by the beautiful color of the Ko Tao island in Thailand. Instead of picking traditional IT blue colors, the designer Keyan </p>
		 			<p class="c">found turquoise and venetian blue more fresh and vital. "They are natural colors of the ocean. </p>
		 			<p class="c bottom">It's a beautiful and small company, with great potentials </p>
		 			
		 		</div>
		 	</div>
		 </div>
		 	  	<div class="color">
		 	<ul class="clexrfix">
		 		<li>
		 			<div></div>
		 			<p>#366695</p>
		 		</li>
		 		<li>
		 			<div></div>
		 			<p>#40abbc</p>
		 		</li>
		 		<li>
		 			<div></div>
		 			<p>#47dccb</p>
		 		</li>
		 		<li>
		 			<div></div>
		 			<p>#95f4e9</p>
		 		</li>
		 	</ul>
		 </div>
		 <div class="team">
		 	<div>
		 		<h2>Our Team</h2>
		 		<p>We are a group of professionals passionate about creating products to solve real world problems and make people's lives easier and better.</p>
		 	</div>
		 	<div class="img-boxs">
	
		 		<ul class="clearfix">

		 <?php if(have_posts()):?>
		<?php while(have_posts()):the_post();?>
	
			<li  class="img-box">
		
		 				<div class="boxT" style="background-image: url('<?php the_post_thumbnail_url();?>')">
                </div>
					<div class="secondboxT" ><?php if (class_exists('MultiPostThumbnails')) : MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image'); endif; ?></div>

                <h1><?php the_title();?></h1>
                <p class="tag"><?php  echo strip_tags(get_the_tag_list(), '' );?></p>
                
		 			</li>
	
		 		
		<?php endwhile;?>
		<?php else:?><h1>not found</h1>
		<?php  endif;?>
			
		 		</ul>

		 	</div>
		 	
		 </div>
		 	 		 <footer>
            <svg width="133px" height="32px" viewBox="0 0 133 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
              <desc>Created with Sketch.</desc>
              <defs></defs>
              <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                <g id="Fooyo_Logo" sketch:type="MSLayerGroup">
                  <g id="patern_1_" sketch:type="MSShapeGroup">
                    <g id="Ellipse_1" fill="#366695">
                      <ellipse id="Oval" cx="6.03170254" cy="5.93015873" rx="6.03170254" ry="5.93015873"></ellipse>
                    </g>
                    <g id="Ellipse_1_copy_2" transform="translate(6.457926, 14.222222)" fill="#40ABB4">
                    <ellipse id="Oval" cx="5.1146771" cy="5.05396825" rx="5.02426614" ry="4.93968254"></ellipse>
                  </g>
                <g id="Ellipse_1_copy" transform="translate(16.532290, 2.920635)" fill="#47DCCB">
                    <ellipse id="Oval" cx="4.5851272" cy="4.4952381" rx="4.52054795" ry="4.44444444"></ellipse>
                </g>
                <g id="Ellipse_1_copy_3" transform="translate(21.052838, 16.253968)" fill="#95F4E9">
                    <ellipse id="Oval" cx="4.09432485" cy="4.01269841" rx="4.01682975" ry="3.94920635"></ellipse>
                </g>
              </g>
              <g id="word_1_" transform="translate(36.551859, 0.000000)" fill="#263248" sketch:type="MSShapeGroup">
                <g id="Ellipse_2_copy">
                    <path d="M26.4258317,6.17142857 C20.7428571,6.17142857 16.9714286,9.76507937 16.9714286,15.3904762 C16.9714286,21.015873 20.9495108,24.3555556 26.1287671,24.3555556 C30.8688845,24.3555556 35.4669276,21.4349206 35.4669276,15.0603175 C35.4798434,9.84126984 31.8634051,6.17142857 26.4258317,6.17142857 L26.4258317,6.17142857 Z M26.2837573,20.4825397 C23.9330724,20.4825397 22.667319,18.2349206 22.667319,15.2507937 C22.667319,12.6857143 23.6489237,10.0190476 26.2837573,10.0190476 C28.7765166,10.0190476 29.7968689,12.647619 29.7968689,15.2507937 C29.7968689,18.3746032 28.4277886,20.4825397 26.2837573,20.4825397 L26.2837573,20.4825397 Z M68.1052838,15.0984127 C67.8469667,16.0888889 67.562818,17.4095238 67.304501,18.3365079 L67.2011742,18.3365079 C66.9816047,17.4095238 66.6199609,16.1269841 66.3358121,15.0984127 L63.6880626,6.55238095 L57.5659491,6.55238095 L64.0497065,22.4761905 C64.2692759,22.9079365 64.3080235,23.1873016 64.3080235,23.3650794 C64.3080235,23.6190476 64.2046967,23.8984127 64.0238748,24.152381 C63.481409,25.0412698 62.5772994,25.8920635 61.7377691,26.3238095 C60.9111546,26.8190476 60.0328767,27.1365079 59.3483366,27.2507937 L59.3612524,27.2761905 C58.353816,27.5555556 57.6176125,28.4571429 57.6176125,29.5365079 C57.6176125,30.831746 58.6896282,31.8857143 60.007045,31.8857143 C60.1749511,31.8857143 60.3428571,31.8603175 60.5107632,31.8349206 L60.5107632,31.847619 C61.8927593,31.6698413 63.9205479,31.0984127 65.8320939,29.4603175 C67.821135,27.7206349 69.5260274,24.9396825 72.0575342,18.031746 L76.1906067,6.57777778 L70.2880626,6.57777778 L68.1052838,15.0984127 L68.1052838,15.0984127 Z M47.4270059,6.17142857 C41.7440313,6.17142857 37.9726027,9.76507937 37.9726027,15.3904762 C37.9726027,21.015873 41.9506849,24.3555556 47.1299413,24.3555556 C51.8700587,24.3555556 56.4681018,21.4349206 56.4681018,15.0603175 C56.4810176,9.84126984 52.8645793,6.17142857 47.4270059,6.17142857 L47.4270059,6.17142857 Z M47.2849315,20.4825397 C44.9342466,20.4825397 43.6684932,18.2349206 43.6684932,15.2507937 C43.6684932,12.6857143 44.6500978,10.0190476 47.2849315,10.0190476 C49.7776908,10.0190476 50.7980431,12.647619 50.7980431,15.2507937 C50.7980431,18.3746032 49.416047,20.4825397 47.2849315,20.4825397 L47.2849315,20.4825397 Z M14.6982387,4.43174603 C14.7886497,4.44444444 14.8919765,4.45714286 14.9823875,4.45714286 C16.2610568,4.45714286 17.3072407,3.42857143 17.3072407,2.17142857 C17.3072407,1.16825397 16.6485323,0.317460317 15.7444227,0.0126984127 L0.0387475538,0.0126984127 L0.0387475538,23.9746032 L0.142074364,23.9746032 C0.193737769,25.4095238 1.38199609,26.552381 2.85440313,26.552381 C4.32681018,26.552381 5.51506849,25.4095238 5.5667319,23.9746032 L5.5925636,23.9746032 L5.5925636,14.3238095 L13.807045,14.3238095 C13.9232877,14.3365079 14.0395303,14.3492063 14.155773,14.3492063 C15.4086106,14.3492063 16.416047,13.3587302 16.416047,12.1269841 C16.416047,10.9587302 15.5119374,10.0063492 14.3495108,9.91746032 L14.3495108,9.9047619 L14.1816047,9.9047619 L14.155773,9.9047619 L14.1299413,9.9047619 L5.5925636,9.9047619 L5.5925636,4.43174603 L14.6982387,4.43174603 L14.6982387,4.43174603 Z M86.3941292,6.17142857 C80.7111546,6.17142857 76.939726,9.76507937 76.939726,15.3904762 C76.939726,21.015873 80.9178082,24.3555556 86.0970646,24.3555556 C90.837182,24.3555556 95.435225,21.4349206 95.435225,15.0603175 C95.4481409,9.84126984 91.8187867,6.17142857 86.3941292,6.17142857 L86.3941292,6.17142857 Z M86.2391389,20.4825397 C83.888454,20.4825397 82.6227006,18.2349206 82.6227006,15.2507937 C82.6227006,12.6857143 83.6043053,10.0190476 86.2391389,10.0190476 C88.7318982,10.0190476 89.7522505,12.647619 89.7522505,15.2507937 C89.7522505,18.3746032 88.3831703,20.4825397 86.2391389,20.4825397 L86.2391389,20.4825397 Z" id="Shape">
                  </path>
                </g>
              </g>
            </svg>
 	        <p>
	          <span>Address：3 Science Park Drive,The Franklin #02-07,Singapore</span>
	          <span>Postcode：118223</span>
	          <span>Tel：(+65)84127233</span>
	          <span>E-mail：hi@fooyo.sg</span>
	        </p>
          </footer>
	 </div>

</body>
</html>
<script>
	var term=[];
	$(".guanyu .team .img-boxs .clearfix .img-box").each(function(index, el) {
		term.push($(this).height())
	});
	var max=Math.max.apply(Math,term)
	$(".guanyu .team ul li").css("min-height",max)
</script>
  <script>
    $(".current-menu-item").addClass('active')
       $(".img-box").each(function(index, el) {
    	$(this).hover(function() {
    		if($(this).find('img').length>0)
    		{	
    			$(this).children('.boxT').animate({"opacity":"0"},400,function(){
    				
    			});
    			
    		}
    	}, function() {
    		  			$(this).children('.boxT').animate({"opacity":"1"},400,function(){
    		  			
    		  			});
    			
    	});
    });
>>>>>>> origin/master
  </script>