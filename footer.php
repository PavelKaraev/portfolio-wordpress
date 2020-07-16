<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Portfolio
 */

?>
	<footer class="footer">
     <div class="top-footer">
       <div class="container">
         <div class="row">
           <div class="col-md-6 d-md-flex d-none align-items-center">
             <nav class="navbar navbar-expand-md navbar-dark">
               <div class="navbar" id="navbarFooter">
				 <?php
				 wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class'     => 'navbar-nav',
					'container'			 => false,
					'walker'         => new Header_Nav_Menu(),
				 ) );
				 ?>
               </div>
             </nav>
           </div>
           <div class="col-md-6">
             <ul class="social-list">
               <li>
                 <a href="#" target="_blank">
                   <i class="fab fa-facebook-f"></i>
                 </a>
               </li>
               <li>
                 <a href="#" target="_blank">
                   <i class="fab fa-instagram"></i>
                 </a>
               </li>
               <li>
                 <a href="#" target="_blank">
                   <i class="fab fa-linkedin-in"></i>
                 </a>
               </li>
               <li>
                 <a href="#" target="_blank">
                   <svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" viewBox="0 0 20 14">
                     <path d="M11.3907 13.4611L12.226 9.47493C13.0097 9.91567 13.8954 10.1646 14.939 10.1646C17.2508 10.1646 19.15 8.33956 19.15 6.00029C19.15 3.76408 17.2481 1.94161 14.939 1.94161C13.0269 1.94161 11.5651 3.09943 10.9068 4.91826C10.0788 3.62285 9.41883 2.19618 9.04608 0.956799L9.01396 0.85H8.90244H6.85366H6.70366V1V6.17636C6.70366 7.10935 5.89822 7.89266 4.91463 7.89266C3.93105 7.89266 3.12561 7.10935 3.12561 6.17636V1.03521V0.885213H2.97561H1H0.85V1.03521V6.21157C0.85 8.4469 2.71439 10.235 4.9878 10.235C7.26122 10.235 9.12561 8.4469 9.12561 6.21157V5.92437C9.46606 6.53124 9.86056 7.1567 10.2777 7.72461L9.01214 13.3976L8.97139 13.5803H9.15854H11.2439H11.3657L11.3907 13.4611ZM12.998 6.42853L13.0037 6.40848V6.38764V6.36542C13.076 5.95421 13.2264 5.42257 13.5294 4.99546C13.8308 4.57047 14.2821 4.24877 14.9756 4.24877C16.0315 4.24877 16.873 5.06593 16.8744 6.06819C16.8393 7.07218 15.9241 7.89266 14.939 7.89266C14.2062 7.89266 13.4312 7.58358 12.8059 7.1063L12.998 6.42853Z" stroke="#646464" stroke-width="0.3"/>
                   </svg>
                 </a>
               </li>
               <li>
                 <a href="#" target="_blank">
                   <i class="fab fa-github"></i>
                 </a>
               </li>
             </ul>
           </div>
         </div>
       </div>
     </div>
     <div class="footer-copyright d-flex align-items-center justify-content-center">
       <div class="container">
         <div class="row">
           <div class="col-12 text-center">
             <span>© All rights reserved</span>
           </div>
         </div>
       </div>
     </div>
   </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
