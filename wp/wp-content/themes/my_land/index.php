<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<title><?php bloginfo('name');?></title>

<script type="text/javascript">
	    $(document).on('click','.btn.one-f',function(){
	  
                $.ajax({
                    url: "<?php bloginfo('template_url');?>/mail.php", //Адрес подгружаемой страницы
                    type: "POST", //Тип запроса
                    dataType: "html", //Тип данных
                    data: $("#form_id").serialize()
             

                });


                alert('Спасибо, мы с вами свяжемся!');
                return false;
             });

	    $(document).on('click','.btn.two-f',function(){

                $.ajax({
                    url: "<?php bloginfo('template_url');?>/mail2.php", //Адрес подгружаемой страницы
                    type: "POST", //Тип запроса
                    dataType: "html", //Тип данных
                    data: $("#form_id2").serialize()
             

                });

                alert('Спасибо, мы с вами свяжемся!');
                return false;
             });
</script>
</head>
<body>
<!--Header Block-->
<div class="header-block">
	<p class="offer-one">

	<?php if(have_posts()):query_posts('p=5');
    while (have_posts()):the_post(); ?><?php the_title();?>
	<? endwhile; endif; wp_reset_query();?>
		 
	</p>
	<p class="offer-two">
		<?php if(have_posts()):query_posts('p=7');
    	while (have_posts()):the_post(); ?><?php the_title();?>
		<? endwhile; endif; wp_reset_query();?>
	</p>

</div>
<div class="line-blue">
<p class="call-us">
	<?php if(have_posts()):query_posts('p=9');
	while (have_posts()):the_post(); ?><?php the_title();?>
	<? endwhile; endif; wp_reset_query();?>
		 <span>
		 <?php if(have_posts()):query_posts('p=11');
		while (have_posts()):the_post(); ?><?php the_title();?>
		<? endwhile; endif; wp_reset_query();?>		 
		 </span></p>
</div>

<div class="form-one" id="callyes">
	<p>
	<?php if(have_posts()):query_posts('p=13');
		while (have_posts()):the_post(); ?><?php the_title();?>
		<? endwhile; endif; wp_reset_query();?>	
	

	</p>
	<form method="post" action=""  id="form_id">
		<input type="text"  name="name" placeholder="Ваше имя" value="">
		<input type="text"  name="phone" placeholder="Ваш телефон" value="">
		<a href="" class="btn one-f">
		<?php if(have_posts()):query_posts('p=15');
		while (have_posts()):the_post(); ?><?php the_title();?>
		<? endwhile; endif; wp_reset_query();?>
		</a>
	</form>

</div>
<div class="model">
	<div class="review-block">
	
	<?php if(have_posts()):query_posts('p=17');
		while (have_posts()):the_post(); ?><?php the_content();?>
		<? endwhile; endif; wp_reset_query();?>	

	

	<p class="respect">
		<?php if(have_posts()):query_posts('p=19');
		while (have_posts()):the_post(); ?><?php the_title();?>
		<? endwhile; endif; wp_reset_query();?>
	</p>
	</div>
	<div class="offers-block">
		<p class="offer-1">
		<?php if(have_posts()):query_posts('p=21');
		while (have_posts()):the_post(); ?><?php the_title();?>
		<? endwhile; endif; wp_reset_query();?>
		</p>
		<p class="offer-2">

		<?php if(have_posts()):query_posts('p=23');
		while (have_posts()):the_post(); ?><?php the_title();?>
		<? endwhile; endif; wp_reset_query();?>
			

		</p>
		<p class="offer-3">

		<?php if(have_posts()):query_posts('p=25');
		while (have_posts()):the_post(); ?><?php the_title();?>
		<? endwhile; endif; wp_reset_query();?>
			
		</p>
		<p class="offer-4">

		<?php if(have_posts()):query_posts('p=27');
		while (have_posts()):the_post(); ?><?php the_title();?>
		<? endwhile; endif; wp_reset_query();?>
			
		</p>
		<p class="offer-5">

		<?php if(have_posts()):query_posts('p=29');
		while (have_posts()):the_post(); ?><?php the_title();?>
		<? endwhile; endif; wp_reset_query();?>
			
		</p>
	</div>


</div>
<div class="form-two">
<p>
		<?php if(have_posts()):query_posts('p=31');
		while (have_posts()):the_post(); ?><?php the_title();?>
		<? endwhile; endif; wp_reset_query();?>
	
</p>
<div class="form-block-or">

	<form method="post" action=""  id="form_id2">
		<select name="kuzov">
			<option disabled selected value="не указано" >Серия</option>
			<option value="1 серия">1 серия</option>
			<option value="2 серия">2 серия</option>
			<option value="3 серия">3 серия</option>
			<option value="4 серия">4 серия</option>
			<option value="5 серия">5 серия</option>
			<option value="6 серия">6 серия</option>
			<option value="7 серия">7 серия</option>
			<option value="X1">Х1</option>
			<option value="X2">Х2</option>
			<option value="X3">Х3</option>
			<option value="X4">Х4</option>
			<option value="X5">Х5</option>
			<option value="X6">Х6</option>
			<option value="Другая">Другая</option>			
		</select>
		<select name="year">
			<option disabled selected value="не указано">Год выпуска</option>
			<option value="2014">2014</option>
			<option value="2013">2013</option>
			<option value="2012">2012</option>
			<option value="2011">2011</option>
			<option value="2010">2010</option>
			<option value="2009">2009</option>
			<option value="2008">2008</option>
			<option value="2007">2007</option>
			<option value="2006">2006</option>
			<option value="2005">2005</option>
			<option value="2004">2004</option>
			<option value="2003">2003</option>
			<option value="2002">2002</option>
			<option value="2001">2001</option>
			<option value="2000">2000</option>
			<option>Другой</option>			
		</select>
		<input type="text"  name="v-dvg" placeholder="Объем двигателя" value="">
		<select name="model">
			<option disabled selected>Модель кузова</option>
			<option value="E46">Е46</option>
			<option value="E39">E39</option>
			<option value="E38">E38</option>
			<option value="E53">E53</option>
			<option value="E83">E83</option>
			<option value="E87">E87</option>
			<option value="E65">E65</option>
			<option value="E70">E70</option>
			<option value="E90">E90</option>
			<option value="E84">E84</option>
			<option value="E60">E60</option>		
		</select>
		<textarea name="zapch" placeholder="Требуемые запчасти" value=""></textarea>
		<input type="text"  name="name" placeholder="Ваше имя" value="">
		<input type="text"  name="phone" placeholder="Ваш телефон" value="">
		<a href="" class="btn two-f">

		<?php if(have_posts()):query_posts('p=33');
		while (have_posts()):the_post(); ?><?php the_title();?>
		<? endwhile; endif; wp_reset_query();?>			

		</a>
</form>
</div>


</div>

<div class="dos-block">
<div class="dos-block-text">
	<?php if(have_posts()):query_posts('p=35');
		while (have_posts()):the_post(); ?>
	<h1>
	<?php the_title();?>
	</h1>

	<?php the_content();?>
	<? endwhile; endif; wp_reset_query();?>	

</div>
</div>

<div class="call-back">
	<div class="call-back-center">
		<div class="call-back-left">
			<h1>
				<?php if(have_posts()):query_posts('p=38');
			while (have_posts()):the_post(); ?><?php the_title();?>
			
			</h1>
			<?php the_content();?>


			<? endwhile; endif; wp_reset_query();?>
			

		</div>
		<div class="call-back-right">
			<a href="#callyes" class="btn">				
			<?php if(have_posts()):query_posts('p=15');
			while (have_posts()):the_post(); ?><?php the_title();?>
			<? endwhile; endif; wp_reset_query();?>
			</a>

		</div>
	</div>
</div>
<div class="maps">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4492.837828608045!2d37.667171526439596!3d55.7338500203855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54adb8372c92d%3A0x53a4ad6aeeb96e53!2z0JzQsNGA0LrRgdC40YHRgtGB0LrQsNGPINGD0LsuLCAzOCwg0JzQvtGB0LrQstCwLCAxMDkxNDc!5e0!3m2!1sru!2sru!4v1433952254838" width="100%" height="260" frameborder="0" style="border:0"></iframe>

</div>
<div class="footer">
	
<p class="offer-one foot">
		
		<?php if(have_posts()):query_posts('p=5');
    while (have_posts()):the_post(); ?><?php the_title();?>
	<? endwhile; endif; wp_reset_query();?>

	</p>
	<p class="call-us foot">
	<?php if(have_posts()):query_posts('p=9');
	while (have_posts()):the_post(); ?><?php the_title();?>
	<? endwhile; endif; wp_reset_query();?>

	<span>

	<?php if(have_posts()):query_posts('p=11');
		while (have_posts()):the_post(); ?><?php the_title();?>
		<? endwhile; endif; wp_reset_query();?>	


	</span></p>

	<p class="offer-two foot">
		<?php if(have_posts()):query_posts('p=7');
    	while (have_posts()):the_post(); ?><?php the_title();?>
		<? endwhile; endif; wp_reset_query();?>
	</p>

</div>

</body>
</html>
