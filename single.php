<?php get_header(); ?>
	<style>
		table {margin-left: auto;  margin-right: auto;}
		
		.info {text-align:center}
	</style>
	
	
	<div class="layout">
		<table>
  			<tr>
  				<!-- Header -->
    			<td colspan="6"><a href="http://www.vanderbilthustler.com"><img src="<?php the_field('header'); ?>" alt=" "></a></td>
  			</tr>
  			<tr>
  				<!-- Feature Story -->
   				<td class="feature" rowspan="2" colspan="4"><a href="<?php the_field('feature_link'); ?>"><img src="<?php the_field('feature_image'); ?>" alt=" "></a></td>
   				
   				<!--Sub Story One -->
				<td colspan="2"><a href="<?php the_field('sub1_link'); ?>"><img src="<?php the_field('sub1_image'); ?>" alt=" "></a></td>
  			</tr>
  			<tr>
  				<!--Sub Story Two -->
				<td colspan="2"><a href="<?php the_field('sub2_link'); ?>"><img src="<?php the_field('sub2_image'); ?>" alt=" "></a></td>
  			</tr>
			
  			<tr>
  				<!-- In Case You Missed It One -->
				<td colspan="2"><a href="<?php the_field('sub5_link'); ?>"><img src="<?php the_field('sub5_image'); ?>" alt=" "></a></td>
    			
				<!-- In Case You Missed It Two -->
				<td colspan="2"><a href="<?php the_field('sub4_link'); ?>"><img src="<?php the_field('sub4_image'); ?>" alt=" "></a></td>
    			
				<!-- In Case You Missed It Three -->
				<td colspan="2"><a href="<?php the_field('sub3_link'); ?>"><img src="<?php the_field('sub3_image'); ?>" alt=" "></a></td>
   			</tr>
			
			<!-- Footer -->
   			<tr><td colspan="6">
			<table>
			<tr>
				<!-- VH Logo -->
				<td><a href="http://www.vanderbilthustler.com"><img src="http://i.imgur.com/AwUinWw.png" alt=" "></a></td>
				
				<!-- News -->
				<td><a href="http://www.vanderbilthustler.com/news/"><img src="http://i.imgur.com/mePspJw.png" alt=" "></a></td>
				
				<!-- Life -->
				<td><a href="http://www.vanderbilthustler.com/life/"><img src="http://i.imgur.com/hwPK29A.png" alt=" "></a></td>
				
				<!-- Opinion -->
				<td><a href="http://www.vanderbilthustler.com/opinion/"><img src="http://i.imgur.com/0TQZz1A.png" alt=" "></a></td>
				
				<!-- Sports -->
				<td><a href="http://www.vanderbilthustler.com/sports/"><img src="http://i.imgur.com/ZRCIjm1.png" alt=" "></a></td>

				<!-- Facebook -->
				<td><a href="https://www.facebook.com/VanderbiltHustler"><img src="http://i.imgur.com/dYkDkUE.jpg" alt=" "></a></td>
				
				<!-- Twitter -->
				<td><a href="https://twitter.com/vandyhustler"><img src="http://i.imgur.com/eYZePS5.jpg" alt=" "></a></td>
				
				<!-- Instagram -->
				<td><a href="https://instagram.com/vanderbilthustler"><img src="http://i.imgur.com/raFuxqu.jpg" alt=" "></a></td>
			</tr>
			</table>
			</td></tr>
		</table>
		<p class="info">
			<?php the_field('info',8); ?>
			<br /><br /><br />
			<?php the_field('subscribe',8); ?>
		</p>
	</div>
	
<?php get_footer(); ?>