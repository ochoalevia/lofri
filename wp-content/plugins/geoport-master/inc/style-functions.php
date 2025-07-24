<?php
/**
* Define geoport class
*/
class Geoport_Master_Core {

	/* =================================================================
    = Menu 1 color
    ====================================================================*/
	public function Menu1_Style() {

  		if(function_exists( 'geoport_framework_init' ) ) {
  			/* =================================================================
		    = Menu 1 color
		    ====================================================================*/
		    $menu1_bg_color = geoport_get_option( 'menu1_bg_color' );
		    if (!empty($menu1_bg_color)) {
		      $menu1_bg_color = $menu1_bg_color;
		    } else {
		      $menu1_bg_color = 'transparent';
		    }
		    $menu1_font_color = geoport_get_option( 'menu1_font_color' );
		    if (!empty($menu1_font_color)) {
		      $menu1_font_color = $menu1_font_color;
		    } else {
		      $menu1_font_color = '#ffffff';
		    }
		    $menu1_hover_font_color = geoport_get_option( 'menu1_hover_font_color' );
		    if (!empty($menu1_hover_font_color)) {
		      $menu1_hover_font_color = $menu1_hover_font_color;
		    } else {
		      $menu1_hover_font_color = '#39bdb2';
		    }
		    // Submenu
		    $submenu1_bg_color = geoport_get_option( 'submenu1_bg_color' );
		    if (!empty($submenu1_bg_color)) {
		      $submenu1_bg_color = $submenu1_bg_color;
		    } else {
		      $submenu1_bg_color = '#ffffff';
		    }
		    $submenu1_color = geoport_get_option( 'submenu1_color' );
		    if (!empty($submenu1_color)) {
		      $submenu1_color = $submenu1_color;
		    } else {
		      $submenu1_color = '#000d38';
		    }
		    $submenu1_hover_color = geoport_get_option( 'submenu1_hover_color' );
		    if (!empty($submenu1_hover_color)) {
		      $submenu1_hover_color = $submenu1_hover_color;
		    } else {
		      $submenu1_hover_color = '#39bdb2';
		    }
		    $submenu1_border_color = geoport_get_option( 'submenu1_border_color' );
		    if (!empty($submenu1_border_color)) {
		      $submenu1_border_color = $submenu1_border_color;
		    } else {
		      $submenu1_border_color = '#eceef0';
		    }

		    // Button
		    $menu1_btn_font_color = geoport_get_option( 'menu1_btn_font_color' );
		    if (!empty($menu1_btn_font_color)) {
		      $menu1_btn_font_color = $menu1_btn_font_color;
		    } else {
		      $menu1_btn_font_color = '#ffffff';
		    }
		    $menu1_btn_bg_color = geoport_get_option( 'menu1_btn_bg_color' );
		    if (!empty($menu1_btn_bg_color)) {
		      $menu1_btn_bg_color = $menu1_btn_bg_color;
		    } else {
		      $menu1_btn_bg_color = 'transparent';
		    } 
		    $menu1_btn_border_color = geoport_get_option( 'menu1_btn_border_color' );
		    if (!empty($menu1_btn_border_color)) {
		      $menu1_btn_border_color = $menu1_btn_border_color;
		    } else {
		      $menu1_btn_border_color = 'rgba(255, 255, 255, 0.3)';
		    }

		    $menu1_btn_hf_color = geoport_get_option( 'menu1_btn_hf_color' );
		    if (!empty($menu1_btn_hf_color)) {
		      $menu1_btn_hf_color = $menu1_btn_hf_color;
		    } else {
		      $menu1_btn_hf_color = '#ffffff';
		    }
		    $menu1_btn_hb_color = geoport_get_option( 'menu1_btn_hb_color' );
		    if (!empty($menu1_btn_hb_color)) {
		      $menu1_btn_hb_color = $menu1_btn_hb_color;
		    } else {
		      $menu1_btn_hb_color = '#ff5e14';
		    }

			// Sticky Menu
			$menu1_sticky_menu_bg_color = geoport_get_option( 'menu1_sticky_menu_bg_color' );
		    if (!empty($menu1_sticky_menu_bg_color)) {
		      $menu1_sticky_menu_bg_color = $menu1_sticky_menu_bg_color;
		    } else {
		      $menu1_sticky_menu_bg_color = '#ffffff';
		    }
		    $sticky_menu1_font_color = geoport_get_option( 'sticky_menu1_font_color' );
		    if (!empty($sticky_menu1_font_color)) {
		      $sticky_menu1_font_color = $sticky_menu1_font_color;
		    } else {
		      $sticky_menu1_font_color = '#568ea5';
		    }
		    $sticky_menu1_hover_font_color = geoport_get_option( 'sticky_menu1_hover_font_color' );
		    if (!empty($sticky_menu1_hover_font_color)) {
		      $sticky_menu1_hover_font_color = $sticky_menu1_hover_font_color;
		    } else {
		      $sticky_menu1_hover_font_color = '#ff5e14';
		    }

		    $responsive_menu1_icon_color = geoport_get_option( 'responsive_menu1_icon_color' );
		    if (!empty($responsive_menu1_icon_color)) {
		      $responsive_menu1_icon_color = $responsive_menu1_icon_color;
		    } else {
		      $responsive_menu1_icon_color = '#ffffff';
		    }
		    $stickyresponsive_menu1_icon_color = geoport_get_option( 'stickyresponsive_menu1_icon_color' );
		    if (!empty($stickyresponsive_menu1_icon_color)) {
		      $stickyresponsive_menu1_icon_color = $stickyresponsive_menu1_icon_color;
		    } else {
		      $stickyresponsive_menu1_icon_color = '#001d67';
		    }

		    $sticky_submenu1_bg_color = geoport_get_option( 'sticky_submenu1_bg_color' );
		    if (!empty($sticky_submenu1_bg_color)) {
		      $sticky_submenu1_bg_color = $sticky_submenu1_bg_color;
		    } else {
		      $sticky_submenu1_bg_color = '#ffffff';
		    }
		    $sticky_submenu1_color = geoport_get_option( 'sticky_submenu1_color' );
		    if (!empty($sticky_submenu1_color)) {
		      $sticky_submenu1_color = $sticky_submenu1_color;
		    } else {
		      $sticky_submenu1_color = '#244b5a';
		    }
		    $sticky_submenu1_hover_color = geoport_get_option( 'sticky_submenu1_hover_color' );
		    if (!empty($sticky_submenu1_hover_color)) {
		      $sticky_submenu1_hover_color = $sticky_submenu1_hover_color;
		    } else {
		      $sticky_submenu1_hover_color = '#ff5e14';
		    }
		    $sticky_submenu1_border_color = geoport_get_option( 'sticky_submenu1_border_color' );
		    if (!empty($sticky_submenu1_border_color)) {
		      $sticky_submenu1_border_color = $sticky_submenu1_border_color;
		    } else {
		      $sticky_submenu1_border_color = '#eceef0';
		    }

		    $menu1_stickybtn_font_color = geoport_get_option( 'menu1_stickybtn_font_color' );
		    if (!empty($menu1_stickybtn_font_color)) {
		      $menu1_stickybtn_font_color = $menu1_stickybtn_font_color;
		    } else {
		      $menu1_stickybtn_font_color = '#568ea5';
		    }

		    $menu1_stickybtn_hbg_color = geoport_get_option( 'menu1_stickybtn_hbg_color' );
		    if (!empty($menu1_stickybtn_hbg_color)) {
		      $menu1_stickybtn_hbg_color = $menu1_stickybtn_hbg_color;
		    } else {
		      $menu1_stickybtn_hbg_color = '#568ea5';
		    }

		    $responsive_menu1_bacg_color = geoport_get_option( 'responsive_menu1_bacg_color' );
		    if (!empty($responsive_menu1_bacg_color)) {
		      $responsive_menu1_bacg_color = $responsive_menu1_bacg_color;
		    } else {
		      $responsive_menu1_bacg_color = '#001d67';
		    }

		    $responsive_menu1_bgtext_color = geoport_get_option( 'responsive_menu1_bgtext_color' );
		    if (!empty($responsive_menu1_bgtext_color)) {
		      $responsive_menu1_bgtext_color = $responsive_menu1_bgtext_color;
		    } else {
		      $responsive_menu1_bgtext_color = '#ffffff';
		    }

		    $lan1_btn_sitem_color = geoport_get_option( 'lan1_btn_sitem_color' );
		    if (!empty($lan1_btn_sitem_color)) {
		      $lan1_btn_sitem_color = $lan1_btn_sitem_color;
		    } else {
		      $lan1_btn_sitem_color = '#ded6d6';
		    }
		    
		    echo "<style>
				/* = Menu 1 Color = */
			    .transparent-header.default-header {
			        background: $menu1_bg_color;
			    }
				.transparent-header.default-header ul li a {
					color: $menu1_font_color;
				}
				.transparent-header.default-header .main-menu ul li.menu-item-has-children.current_page_ancestor > a::before,
				.transparent-header.default-header .main-menu ul li.menu-item-has-children.active > a::before,
				.transparent-header.default-header .main-menu ul li.menu-item-has-children:hover > a::before,
				.transparent-header.default-header .main-menu ul li > .submenu li.current-menu-item>a,
				.transparent-header.default-header .main-menu ul li.current-menu-ancestor>a::before,
				.transparent-header.default-header .main-menu ul li.current-menu-ancestor>a,
				.transparent-header.default-header .main-menu ul li.current-menu-item>a,
				.transparent-header.default-header .main-menu ul li:hover > a, 
				.transparent-header.default-header .main-menu ul li.active>a,
				.transparent-header.default-header .main-menu ul li:hover>a {
					color: $menu1_hover_font_color;
				}

				/* = Sub Menu 1 Color = */
				.transparent-header.default-header .main-menu ul li > .submenu {
					background-color: $submenu1_bg_color;
				}
				.transparent-header.default-header .main-menu ul li > .submenu li a {
					color: $submenu1_color;
				}
				.transparent-header.default-header .main-menu ul li .submenu > li:hover > a {
					color: $submenu1_hover_color;
				}
				.transparent-header.default-header .main-menu ul li > .submenu li {
					border-color: $submenu1_border_color;
				}

				/* = Menu 1 Button Color = */
				.transparent-header.default-header .btn.transparent-btn {
					color: $menu1_btn_font_color;
					background: $menu1_btn_bg_color;
				}
				.transparent-header.default-header .btn.transparent-btn {
					border-color: $menu1_btn_border_color;
				}
				.transparent-header.default-header .btn.transparent-btn:hover {
					color: $menu1_btn_hf_color;
					background: $menu1_btn_hb_color;
					border-color: $menu1_btn_hb_color;
				}
				
				/* = Sticky Menu 1 Color = */
				.transparent-header.default-header.sticky-header {
					background: $menu1_sticky_menu_bg_color;
				}

				.transparent-header.default-header.sticky-header .main-menu ul li a {
					color: $sticky_menu1_font_color;
				}

				.default-header.sticky-header .main-menu ul li.menu-item-has-children.current_page_ancestor > a::before,
				.default-header.sticky-header .main-menu ul li.menu-item-has-children.active > a::before,
				.default-header.sticky-header .main-menu ul li.menu-item-has-children:hover > a::before,
				.default-header.sticky-header .main-menu ul li > .submenu li.current-menu-item>a,
				.default-header.sticky-header .main-menu ul li.current-menu-ancestor>a::before,
				.default-header.sticky-header .main-menu ul li.current-menu-ancestor>a,
				.default-header.sticky-header .main-menu ul li.current-menu-item>a,
				.default-header.sticky-header .main-menu ul li:hover > a, 
				.default-header.sticky-header .main-menu ul li.active>a,
				.default-header.sticky-header .main-menu ul li:hover>a {
					color: $sticky_menu1_hover_font_color;
				}

				.transparent-header.default-header .mean-container a.meanmenu-reveal {
				    border: 1px solid $responsive_menu1_icon_color;
				    color: $responsive_menu1_icon_color;
				}
				.transparent-header.default-header .mean-container a.meanmenu-reveal span {
					background: $responsive_menu1_icon_color;
				}
				.default-header.sticky-header .mean-container a.meanmenu-reveal {
				    border: 1px solid $stickyresponsive_menu1_icon_color;
				    color: $stickyresponsive_menu1_icon_color;
				}
				.default-header.sticky-header .mean-container a.meanmenu-reveal span {
					background: $stickyresponsive_menu1_icon_color;
				}

				/* = Sticky Sub Menu 1 Color = */
				.transparent-header.default-header.sticky-header .main-menu ul li > .submenu {
					background-color: $sticky_submenu1_bg_color;
				}
				.transparent-header.default-header.sticky-header .main-menu ul li > .submenu li a {
					color: $sticky_submenu1_color;
				}
				.transparent-header.default-header.sticky-header .main-menu ul li .submenu > li:hover > a {
					color: $sticky_submenu1_hover_color;
				}
				.transparent-header.default-header.sticky-header .main-menu ul li > .submenu li {
					border-color: $sticky_submenu1_border_color;
				}
				.transparent-header.default-header.sticky-header .btn.transparent-btn {
					color: $menu1_stickybtn_font_color;
					background-color: $menu1_stickybtn_hbg_color;
					border: 2px solid $menu1_stickybtn_hbg_color;
				}

				.transparent-header.header3 .mobile-menu.mean-container .mean-nav {
					background-color: $responsive_menu1_bacg_color;
				}
				.transparent-header.header3 .mobile-menu.mean-container .mean-nav a{
					color: $responsive_menu1_bgtext_color;
				}

				ul.lang-sub-menu li.current-lang {
					background-color: $lan1_btn_sitem_color;
				}

		    </style>";
		}
	}



	/* =================================================================
    = Menu 2 color
    ====================================================================*/
	public function Menu2_Style() {

  		if(function_exists( 'geoport_framework_init' ) ) {

		    /* =================================================================
		    = Menu 2 color 
		    ====================================================================*/
		    $menu2_bg_color = geoport_get_option( 'menu2_bg_color' );
		    if (!empty( $menu2_bg_color )) {
		      $menu2_bg_color = $menu2_bg_color;
		    } else {
		      $menu2_bg_color = 'transparent';
		    }
		    $menu2_font_color = geoport_get_option( 'menu2_font_color' );
		    if (!empty( $menu2_font_color )) {
		      $menu2_font_color = $menu2_font_color;
		    } else {
		      $menu2_font_color = '#568ea5';
		    }
		    $menu2_hover_font_color = geoport_get_option( 'menu2_hover_font_color' );
		    if (!empty( $menu2_hover_font_color )) {
		      $menu2_hover_font_color = $menu2_hover_font_color;
		    } else {
		      $menu2_hover_font_color = '#ff5e14';
		    }

		    // Submenu 2
		    $submenu2_bg_color = geoport_get_option( 'submenu2_bg_color' );
		    if (!empty( $submenu2_bg_color )) {
		      $submenu2_bg_color = $submenu2_bg_color;
		    } else {
		      $submenu2_bg_color = '#ffffff';
		    }
		    $submenu2_font_color = geoport_get_option( 'submenu2_font_color' );
		    if (!empty( $submenu2_font_color )) {
		      $submenu2_font_color = $submenu2_font_color;
		    } else {
		      $submenu2_font_color = '#568ea5';
		    }
		    $submenu2_hover_color = geoport_get_option( 'submenu2_hover_color' );
		    if (!empty( $submenu2_hover_color )) {
		      $submenu2_hover_color = $submenu2_hover_color;
		    } else {
		      $submenu2_hover_color = '#ff5e14';
		    }
		    $submenu2_border_color = geoport_get_option( 'submenu2_border_color' );
		    if (!empty( $submenu2_border_color )) {
		      $submenu2_border_color = $submenu2_border_color;
		    } else {
		      $submenu2_border_color = '#eceef0';
		    }

		    // Button
		    $menu2_btn_font_color = geoport_get_option( 'menu2_btn_font_color' );
		    if (!empty( $menu2_btn_font_color )) {
		      $menu2_btn_font_color = $menu2_btn_font_color;
		    } else {
		      $menu2_btn_font_color = '#568ea5';
		    }
		    $menu2_btn_bg_color = geoport_get_option( 'menu2_btn_bg_color' );
		    if (!empty( $menu2_btn_bg_color )) {
		      $menu2_btn_bg_color = $menu2_btn_bg_color;
		    } else {
		      $menu2_btn_bg_color = 'transparent';
		    } 
		    $menu2_btn_border_color = geoport_get_option( 'menu2_btn_border_color' );
		    if (!empty( $menu2_btn_border_color )) {
		      $menu2_btn_border_color = $menu2_btn_border_color;
		    } else {
		      $menu2_btn_border_color = '#d7edff';
		    }

		    $menu2_btn_hf_color = geoport_get_option( 'menu2_btn_hf_color' );
		    if (!empty( $menu2_btn_hf_color )) {
		      $menu2_btn_hf_color = $menu2_btn_hf_color;
		    } else {
		      $menu2_btn_hf_color = '#ffffff';
		    }
		    $menu2_btn_hb_color = geoport_get_option( 'menu2_btn_hb_color' );
		    if (!empty( $menu2_btn_hb_color )) {
		      $menu2_btn_hb_color = $menu2_btn_hb_color;
		    } else {
		      $menu2_btn_hb_color = '#ff5e14';
		    }

			// Sticky Menu
			$sticky_menu2_bg_color = geoport_get_option( 'sticky_menu2_bg_color' );
		    if (!empty( $sticky_menu2_bg_color )) {
		      $sticky_menu2_bg_color = $sticky_menu2_bg_color;
		    } else {
		      $sticky_menu2_bg_color = '#ffffff';
		    }
		    $sticky_menu2_font_color = geoport_get_option( 'sticky_menu2_font_color' );
		    if (!empty( $sticky_menu2_font_color )) {
		      $sticky_menu2_font_color = $sticky_menu2_font_color;
		    } else {
		      $sticky_menu2_font_color = '#568ea5';
		    }
		    $sticky_menu2_hover_font_color = geoport_get_option( 'sticky_menu2_hover_font_color' );
		    if (!empty( $sticky_menu2_hover_font_color )) {
		      $sticky_menu2_hover_font_color = $sticky_menu2_hover_font_color;
		    } else {
		      $sticky_menu2_hover_font_color = '#ff5e14';
		    }

		    $responsive_menu2_icon_color = geoport_get_option( 'responsive_menu2_icon_color' );
		    if (!empty( $responsive_menu2_icon_color )) {
		      $responsive_menu2_icon_color = $responsive_menu2_icon_color;
		    } else {
		      $responsive_menu2_icon_color = '#001d67';
		    }
		    $stickyresponsive_menu2_icon_color = geoport_get_option( 'stickyresponsive_menu2_icon_color' );
		    if (!empty( $stickyresponsive_menu2_icon_color )) {
		      $stickyresponsive_menu2_icon_color = $stickyresponsive_menu2_icon_color;
		    } else {
		      $stickyresponsive_menu2_icon_color = '#001d67';
		    }


		    $sticky_submenu2_bg_color = geoport_get_option( 'sticky_submenu2_bg_color' );
		    if (!empty( $sticky_submenu2_bg_color )) {
		      $sticky_submenu2_bg_color = $sticky_submenu2_bg_color;
		    } else {
		      $sticky_submenu2_bg_color = '#fff';
		    }
		    $sticky_submenu2_color = geoport_get_option( 'sticky_submenu2_color' );
		    if (!empty( $sticky_submenu2_color )) {
		      $sticky_submenu2_color = $sticky_submenu2_color;
		    } else {
		      $sticky_submenu2_color = '#568ea5';
		    }
		    $sticky_submenu2_hover_color = geoport_get_option( 'sticky_submenu2_hover_color' );
		    if (!empty( $sticky_submenu2_hover_color )) {
		      $sticky_submenu2_hover_color = $sticky_submenu2_hover_color;
		    } else {
		      $sticky_submenu2_hover_color = '#ff5e14';
		    }
		    $sticky_submenu2_border_color = geoport_get_option( 'sticky_submenu2_border_color' );
		    if (!empty( $sticky_submenu2_border_color )) {
		      $sticky_submenu2_border_color = $sticky_submenu2_border_color;
		    } else {
		      $sticky_submenu2_border_color = '#eceef0';
		    }


		    $responsive_menu2_bacg_color = geoport_get_option( 'responsive_menu2_bacg_color' );
		    if (!empty($responsive_menu2_bacg_color)) {
		      $responsive_menu2_bacg_color = $responsive_menu2_bacg_color;
		    } else {
		      $responsive_menu2_bacg_color = '#001d67';
		    }

		    $responsive_menu2_bgtext_color = geoport_get_option( 'responsive_menu2_bgtext_color' );
		    if (!empty($responsive_menu2_bgtext_color)) {
		      $responsive_menu2_bgtext_color = $responsive_menu2_bgtext_color;
		    } else {
		      $responsive_menu2_bgtext_color = '#ffffff';
		    }

		    $lan1_btn_sitem_color = geoport_get_option( 'lan1_btn_sitem_color' );
		    if (!empty($lan1_btn_sitem_color)) {
		      $lan1_btn_sitem_color = $lan1_btn_sitem_color;
		    } else {
		      $lan1_btn_sitem_color = '#ded6d6';
		    }



		    echo "<style>
				/* = Menu 2 Color = */
			    .transparent-header.header-style-two {
			        background: $menu2_bg_color;
			    }
				.transparent-header.header-style-two ul li a {
					color: $menu2_font_color;
				}
				.transparent-header.header-style-two .main-menu ul li.menu-item-has-children.current_page_ancestor > a::before,
				.transparent-header.header-style-two .main-menu ul li.menu-item-has-children.active > a::before,
				.transparent-header.header-style-two .main-menu ul li.menu-item-has-children:hover > a::before,
				.transparent-header.header-style-two .main-menu ul li > .submenu li.current-menu-item>a,
				.transparent-header.header-style-two .main-menu ul li.current-menu-ancestor>a::before,
				.transparent-header.header-style-two .main-menu ul li.current-menu-ancestor>a,
				.transparent-header.header-style-two .main-menu ul li.current-menu-item>a,
				.transparent-header.header-style-two .main-menu ul li.active>a,
				.transparent-header.header-style-two .main-menu ul li:hover>a,
				.transparent-header.header-style-two .main-menu ul li:hover > a {
					color: $menu2_hover_font_color;
				}


				/* = Sub Menu 2 Color = */
				.transparent-header.header-style-two .main-menu ul li > .submenu {
					background-color: $submenu2_bg_color;
				}
				.transparent-header.header-style-two .main-menu ul li > .submenu li a {
					color: $submenu2_font_color;
				}
				.transparent-header.header-style-two .main-menu ul li .submenu > li:hover > a {
					color: $submenu2_hover_color;
				}
				.transparent-header.header-style-two .main-menu ul li > .submenu li {
					border-color: $submenu2_border_color;
				}

				/* = Sticky Sub Menu 2 Color = */
				.header-style-two.sticky-header .main-menu ul li > .submenu {
					background-color: $sticky_submenu2_bg_color;
				}
				.header-style-two.sticky-header .main-menu ul li > .submenu li a {
					color: $sticky_submenu2_color;
				}
				.header-style-two.sticky-header .main-menu ul li .submenu > li:hover > a {
					color: $sticky_submenu2_hover_color;
				}
				.header-style-two.sticky-header .main-menu ul li > .submenu li {
					border-color: $sticky_submenu2_border_color;
				}

				/* = Menu 2 Button Color = */
				.transparent-header.header-style-two .btn.transparent-btn {
					color: $menu2_btn_font_color;
					background: $menu2_btn_bg_color;
				}
				.transparent-header.header-style-two .btn.transparent-btn {
					border-color: $menu2_btn_border_color;
				}
				.transparent-header.header-style-two .btn.transparent-btn:hover {
					color: $menu2_btn_hf_color;
					background: $menu2_btn_hb_color;
					border-color: $menu2_btn_hb_color;
				}
				
				/* = Sticky Menu 2 Color = */
				.transparent-header.header-style-two.sticky-header {
					background: $sticky_menu2_bg_color;
				}

			    .header-style-two.sticky-header .main-menu ul li > a, 
			    .header-style-two.sticky-header .main-menu ul li.menu-item-has-children > a::before  {
			        color: $sticky_menu2_font_color;
			    }

				.header-style-two.sticky-header .main-menu ul li.menu-item-has-children.current_page_ancestor > a::before,
				.header-style-two.sticky-header .main-menu ul li.menu-item-has-children.active > a::before,
				.header-style-two.sticky-header .main-menu ul li > .submenu li.current-menu-item>a,
				.header-style-two.sticky-header .main-menu ul li.current-menu-ancestor>a,
				.header-style-two.sticky-header .main-menu ul li.current-menu-item>a,
				.header-style-two.sticky-header .main-menu ul li.current-menu-item>a,
				.header-style-two.sticky-header .main-menu ul li.active>a,
				.header-style-two.sticky-header .main-menu ul li:hover>a,
				.header-style-two.sticky-header .main-menu ul li:hover > a, 
				.header-style-two.sticky-header .main-menu ul li.menu-item-has-children:hover > a::before {
				    color: $sticky_menu2_hover_font_color;
				}


				.header-style-two .mean-container a.meanmenu-reveal {
				    border: 1px solid $responsive_menu2_icon_color;
				    color: $responsive_menu2_icon_color;
				}
				.header-style-two .mean-container a.meanmenu-reveal span {
					background: $responsive_menu2_icon_color;
				}

				.header-style-two.sticky-header .mean-container a.meanmenu-reveal {
				    border: 1px solid $stickyresponsive_menu2_icon_color;
				    color: $stickyresponsive_menu2_icon_color;
				}
				.header-style-two.sticky-header .mean-container a.meanmenu-reveal span {
					background: $stickyresponsive_menu2_icon_color;
				}

				.transparent-header.header-style-two .mean-container .mean-nav {
					background-color: $responsive_menu2_bacg_color;
				}
				.transparent-header.header-style-two .mean-container .mean-nav a{
					color: $responsive_menu2_bgtext_color;
				}

				ul.lang-sub-menu li.current-lang {
					background-color: $lan1_btn_sitem_color;
				}
		    

		    </style>";
  		}		
	}



	/* =================================================================
    = Menu 3 color
    ====================================================================*/
	public function Menu3_Style() {

  		if(function_exists( 'geoport_framework_init' ) ) {
  			//Menu
  			$menu3_bg_color = geoport_get_option( 'menu3_bg_color' );
		    if (!empty($menu3_bg_color)) {
		      $menu3_bg_color = $menu3_bg_color;
		    } else {
		      $menu3_bg_color = 'transparent';
		    }
		    $menu3_font_color = geoport_get_option( 'menu3_font_color' );
		    if (!empty($menu3_font_color)) {
		      $menu3_font_color = $menu3_font_color;
		    } else {
		      $menu3_font_color = '#ffffff';
		    }
		    $menu3_hover_font_color = geoport_get_option( 'menu3_hover_font_color' );
		    if (!empty($menu3_hover_font_color)) {
		      $menu3_hover_font_color = $menu3_hover_font_color;
		    } else {
		      $menu3_hover_font_color = '#39bdb2';
		    }

		    // Submenu 3
		    $submenu3_bg_color = geoport_get_option( 'submenu3_bg_color' );
		    if (!empty($submenu3_bg_color)) {
		      $submenu3_bg_color = $submenu3_bg_color;
		    } else {
		      $submenu3_bg_color = '#ffffff';
		    }
		    $submenu3_color = geoport_get_option( 'submenu3_color' );
		    if (!empty($submenu3_color)) {
		      $submenu3_color = $submenu3_color;
		    } else {
		      $submenu3_color = '#000d38';
		    }
		    $submenu3_hover_color = geoport_get_option( 'submenu3_hover_color' );
		    if (!empty($submenu3_hover_color)) {
		      $submenu3_hover_color = $submenu3_hover_color;
		    } else {
		      $submenu3_hover_color = '#ff566e';
		    }
		    $submenu3_border_color = geoport_get_option( 'submenu3_border_color' );
		    if (!empty($submenu3_border_color)) {
		      $submenu3_border_color = $submenu3_border_color;
		    } else {
		      $submenu3_border_color = '#eceef0';
		    }

		    // Button
		    $menu3_btn_color = geoport_get_option( 'menu3_btn_color' );
		    if (!empty($menu3_btn_color)) {
		      $menu3_btn_color = $menu3_btn_color;
		    } else {
		      $menu3_btn_color = '#ffffff';
		    }
		    $menu3_btn_bg_color = geoport_get_option( 'menu3_btn_bg_color' );
		    if (!empty($menu3_btn_bg_color)) {
		      $menu3_btn_bg_color = $menu3_btn_bg_color;
		    } else {
		      $menu3_btn_bg_color = '#34ccff';
		    }  
		    $menu3_btn_border_color = geoport_get_option( 'menu3_btn_border_color' );
		    if (!empty($menu3_btn_border_color)) {
		      $menu3_btn_border_color = $menu3_btn_border_color;
		    } else {
		      $menu3_btn_border_color = '#34ccff';
		    }

		    $menu3_btn_hb_color = geoport_get_option( 'menu3_btn_h_color' );
		    if (!empty($menu3_btn_hb_color)) {
		      $menu3_btn_hb_color = $menu3_btn_hb_color;
		    } else {
		      $menu3_btn_hb_color = '#ffffff';
		    }
		    $menu3_btn_h_f_color = geoport_get_option( 'menu3_btn_h_f_color' );
		    if (!empty($menu3_btn_h_f_color)) {
		      $menu3_btn_h_f_color = $menu3_btn_h_f_color;
		    } else {
		      $menu3_btn_h_f_color = '#ffffff';
		    }


		    $menu3_sticky_menu_bg_color = geoport_get_option( 'menu3_sticky_menu_bg_color' );
		    if (!empty($menu3_sticky_menu_bg_color)) {
		      $menu3_sticky_menu_bg_color = $menu3_sticky_menu_bg_color;
		    } else {
		      $menu3_sticky_menu_bg_color = '#ffffff';
		    }

		    $sticky_menu3_font_color = geoport_get_option( 'sticky_menu3_font_color' );
		    if (!empty($sticky_menu3_font_color)) {
		      $sticky_menu3_font_color = $sticky_menu3_font_color;
		    } else {
		      $sticky_menu3_font_color = '#5b7d9a';
		    }

		    $sticky_menu3_hover_font_color = geoport_get_option( 'sticky_menu3_hover_font_color' );
		    if (!empty($sticky_menu3_hover_font_color)) {
		      $sticky_menu3_hover_font_color = $sticky_menu3_hover_font_color;
		    } else {
		      $sticky_menu3_hover_font_color = '#5b7d9a';
		    }

		    $sticky_submenu3_bg_color = geoport_get_option( 'sticky_submenu3_bg_color' );
		    if (!empty($sticky_submenu3_bg_color)) {
		      $sticky_submenu3_bg_color = $sticky_submenu3_bg_color;
		    } else {
		      $sticky_submenu3_bg_color = '#fff';
		    }
		    $sticky_submenu3_color = geoport_get_option( 'sticky_submenu3_color' );
		    if (!empty($sticky_submenu3_color)) {
		      $sticky_submenu3_color = $sticky_submenu3_color;
		    } else {
		      $sticky_submenu3_color = '#568ea5';
		    }
		    $sticky_submenu3_hover_color = geoport_get_option( 'sticky_submenu3_hover_color' );
		    if (!empty($sticky_submenu3_hover_color)) {
		      $sticky_submenu3_hover_color = $sticky_submenu3_hover_color;
		    } else {
		      $sticky_submenu3_hover_color = '#34ccff';
		    }
		    $sticky_submenu3_border_color = geoport_get_option( 'sticky_submenu3_border_color' );
		    if (!empty($sticky_submenu3_border_color)) {
		      $sticky_submenu3_border_color = $sticky_submenu3_border_color;
		    } else {
		      $sticky_submenu3_border_color = '#eceef0';
		    }


		    $responsive_menu3_icon_color = geoport_get_option( 'responsive_menu3_icon_color' );
		    if (!empty($responsive_menu3_icon_color)) {
		      $responsive_menu3_icon_color = $responsive_menu3_icon_color;
		    } else {
		      $responsive_menu3_icon_color = '#001d67';
		    }
		    $stickyresponsive_menu3_icon_color = geoport_get_option( 'stickyresponsive_menu3_icon_color' );
		    if (!empty($stickyresponsive_menu3_icon_color)) {
		      $stickyresponsive_menu3_icon_color = $stickyresponsive_menu3_icon_color;
		    } else {
		      $stickyresponsive_menu3_icon_color = '#001d67';
		    }


		    // medium response style
		    $top_header3_1medium_device = geoport_get_option( 'top_header3_1medium_device' );
		    if (!empty($top_header3_1medium_device)) {
		      $top_header3_1medium_device = 'inline-block';
		    } else {
		      $top_header3_1medium_device = 'none';
		    }

		    $top_header3_2medium_device = geoport_get_option( 'top_header3_2medium_device' );
		    if (!empty($top_header3_2medium_device)) {
		      $top_header3_2medium_device = 'inline-block';
		    } else {
		      $top_header3_2medium_device = 'none';
		    }

		    $top_header3_3medium_device = geoport_get_option( 'top_header3_3medium_device' );
		    if (!empty($top_header3_3medium_device)) {
		      $top_header3_3medium_device = 'inline-block';
		    } else {
		      $top_header3_3medium_device = 'none';
		    }

		    // small response style
		    $top_header3_1small_device = geoport_get_option( 'top_header3_1small_device' );
		    if (!empty($top_header3_1small_device)) {
		      $top_header3_1small_device = 'inline-block';
		    } else {
		      $top_header3_1small_device = 'none';
		    }

		    $top_header3_2small_device = geoport_get_option( 'top_header3_2small_device' );
		    if (!empty($top_header3_2small_device)) {
		      $top_header3_2small_device = 'inline-block';
		    } else {
		      $top_header3_2small_device = 'none';
		    }

		    $top_header3_3small_device = geoport_get_option( 'top_header3_3small_device' );
		    if (!empty($top_header3_3small_device)) {
		      $top_header3_3small_device = 'inline-block';
		    } else {
		      $top_header3_3small_device = 'none';
		    }

		    // extra small response style
		    $top_header3_1exsmall_device = geoport_get_option( 'top_header3_1exsmall_device' );
		    if (!empty($top_header3_1exsmall_device)) {
		      $top_header3_1exsmall_device = 'inline-block';
		    } else {
		      $top_header3_1exsmall_device = 'none';
		    }

		    $top_header3_2exsmall_device = geoport_get_option( 'top_header3_2exsmall_device' );
		    if (!empty($top_header3_2exsmall_device)) {
		      $top_header3_2exsmall_device = 'inline-block';
		    } else {
		      $top_header3_2exsmall_device = 'none';
		    }

		    $top_header3_3exsmall_device = geoport_get_option( 'top_header3_3exsmall_device' );
		    if (!empty($top_header3_3exsmall_device)) {
		      $top_header3_3exsmall_device = 'inline-block';
		    } else {
		      $top_header3_3exsmall_device = 'none';
		    }

		    $menu_lang1_1medium_device = geoport_get_option( 'menu_lang1_1medium_device' );
		    if (!empty($menu_lang1_1medium_device)) {
		      $menu_lang1_1medium_device = 'inline-block';
		    } else {
		      $menu_lang1_1medium_device = 'none';
		    }

		    $menu_lang1_1small_device = geoport_get_option( 'menu_lang1_1small_device' );
		    if (!empty($menu_lang1_1small_device)) {
		      $menu_lang1_1small_device = 'inline-block';
		    } else {
		      $menu_lang1_1small_device = 'none';
		    }
		    

		    $menu_lang1_1exsmall_device = geoport_get_option( 'menu_lang1_1exsmall_device' );
		    if (!empty($menu_lang1_1exsmall_device)) {
		      $menu_lang1_1exsmall_device = 'inline-block';
		    } else {
		      $menu_lang1_1exsmall_device = 'none';
		    }
		    
		    $menu_track3_1medium_device = geoport_get_option( 'menu_track3_1medium_device' );
		    if (!empty($menu_track3_1medium_device)) {
		      $menu_track3_1medium_device = 'inline-block';
		    } else {
		      $menu_track3_1medium_device = 'none';
		    }
		    
		    $menu_track3_1small_device = geoport_get_option( 'menu_track3_1small_device' );
		    if (!empty($menu_track3_1small_device)) {
		      $menu_track3_1small_device = 'inline-block';
		    } else {
		      $menu_track3_1small_device = 'none';
		    }
		    
		    $menu_track3_1exsmall_device = geoport_get_option( 'menu_track3_1exsmall_device' );
		    if (!empty($menu_track3_1exsmall_device)) {
		      $menu_track3_1exsmall_device = 'inline-block';
		    } else {
		      $menu_track3_1exsmall_device = 'none';
		    }

		    $responsive_menu3_bacg_color = geoport_get_option( 'responsive_menu3_bacg_color' );
		    if (!empty($responsive_menu3_bacg_color)) {
		      $responsive_menu3_bacg_color = $responsive_menu3_bacg_color;
		    } else {
		      $responsive_menu3_bacg_color = '#001d67';
		    }

		    $responsive_menu3_bgtext_color = geoport_get_option( 'responsive_menu3_bgtext_color' );
		    if (!empty($responsive_menu3_bgtext_color)) {
		      $responsive_menu3_bgtext_color = $responsive_menu3_bgtext_color;
		    } else {
		      $responsive_menu3_bgtext_color = '#ffffff';
		    }


		    $lan1_btn_sitem_color = geoport_get_option( 'lan1_btn_sitem_color' );
		    if (!empty($lan1_btn_sitem_color)) {
		      $lan1_btn_sitem_color = $lan1_btn_sitem_color;
		    } else {
		      $lan1_btn_sitem_color = '#ded6d6';
		    }



		    echo "<style>

				/* = Menu 3 Color = */
			    .transparent-header.header3 {
			        background: $menu3_bg_color;
			    }

				.s-transparent-header.header3.sticky-menu,
				   .header3 .s-header-container {
				   	background: $menu3_sticky_menu_bg_color;
				}

			    .header3 .main-menu ul li > a, 
			    .header3 .main-menu ul li.menu-item-has-children > a::before  {
			        color: $menu3_font_color;
			    }
			    .header3.sticky-header .main-menu ul li > a, 
			    .header3.sticky-header .main-menu ul li.menu-item-has-children > a::before  {
			        color: $sticky_menu3_font_color;
			    }

				.header3.sticky-header .main-menu ul li.menu-item-has-children.current_page_ancestor > a::before,
				.header3.sticky-header .main-menu ul li.menu-item-has-children.active > a::before,
				.header3.sticky-header .main-menu ul li > .submenu li.current-menu-item>a,
				.header3.sticky-header .main-menu ul li.current-menu-ancestor>a,
				.header3.sticky-header .main-menu ul li.current-menu-item>a,
				.header3.sticky-header .main-menu ul li.current-menu-item>a,
				.header3.sticky-header .main-menu ul li.active>a,
				.header3.sticky-header .main-menu ul li:hover>a,
				.header3.sticky-header .main-menu ul li:hover > a, 
				.header3.sticky-header .main-menu ul li.menu-item-has-children:hover > a::before {
				    color: $sticky_menu3_hover_font_color;
				}

				.transparent-header.header3 .mean-container a.meanmenu-reveal {
				    border: 1px solid $responsive_menu3_icon_color;
				    color: $responsive_menu3_icon_color;
				}
				.transparent-header.header3 .mean-container a.meanmenu-reveal span {
					background: $responsive_menu3_icon_color;
				}

				.header3.sticky-header .mean-container a.meanmenu-reveal {
				    border: 1px solid $stickyresponsive_menu3_icon_color;
				    color: $stickyresponsive_menu3_icon_color;
				}
				.header3.sticky-header .mean-container a.meanmenu-reveal span {
					background: $stickyresponsive_menu3_icon_color;
				}

				.transparent-header.default-header .mobile-menu.mean-container .mean-nav {
					background-color: $responsive_menu3_bacg_color;
				}
				.transparent-header.default-header .mobile-menu.mean-container .mean-nav a{
					color: $responsive_menu3_bgtext_color;
				}



			    .header3 .main-menu ul li.menu-item-has-children.current_page_ancestor > a::before,
			    .header3 .main-menu ul li.menu-item-has-children.active > a::before,
			    .header3 .main-menu ul li > .submenu li.current-menu-item>a,
			    .header3 .main-menu ul li.current-menu-ancestor>a,
				.header3 .main-menu ul li.current-menu-item>a,
				.header3 .main-menu ul li.current-menu-item>a,
				.header3 .main-menu ul li.active>a,
				.header3 .main-menu ul li:hover>a,
			    .header3 .main-menu ul li:hover > a, 
			    .header3 .main-menu ul li.menu-item-has-children:hover > a::before {
			        color: $menu3_hover_font_color;
			    }


		      	/* = Sub Menu 3 Color = */
				.header3 .main-menu ul li > .submenu {
					background-color: $submenu3_bg_color;
				}
				.header3 .main-menu ul li > .submenu li a {
					color: $submenu3_color;
				}
				.header3 .main-menu ul li .submenu > li:hover > a {
					color: $submenu3_hover_color;
				}
				.header3 .main-menu ul li > .submenu li {
					border-color: $submenu3_border_color;
				}

		     	 /* = Sticky Sub Menu 3 Color = */
				.sticky-header.header3{
					background-color: $menu3_sticky_menu_bg_color;
				}
				.sticky-header.header3 .main-menu ul li > .submenu {
					background-color: $sticky_submenu3_bg_color;
				}
				.sticky-header.header3 .main-menu ul li > .submenu li a {
					color: $sticky_submenu3_color;
				}
				.sticky-header.header3 .main-menu ul li .submenu > li:hover > a {
					color: $sticky_submenu3_hover_color;
				}
				.sticky-header.header3 .main-menu ul li > .submenu li {
					border-color: $sticky_submenu3_border_color;
				}

				ul.lang-sub-menu li.current-lang {
					background-color: $lan1_btn_sitem_color;
				}



				
				/* = Menu 3 Button = */
				.header3 a.btn.transparent-btn {
					color: $menu3_btn_color;
					border-color: $menu3_btn_border_color;
					background-color: $menu3_btn_bg_color;
				}	
				.header3 a.btn.transparent-btn:hover {
					box-shadow: 0px 8px 16px 0px $menu3_btn_bg_color;
				}

				@media (max-width: 767px) {
					.header3-top-left-area {
					    display: $top_header3_1medium_device;
					}
					.header-top-right .header-top-link {
					    display: $top_header3_2medium_device;
					}
					.header-top-right .header-social {
					    display: $top_header3_3medium_device;
					}

					.transparent-header.header3 .header-top-area.h3-320.h3-767 {
					    display: none;
					}
					.transparent-header.header3 .header-top-area.h3-767 {
					    display: none;
					}
					.transparent-header.header3 .header-top-area.h3-320.h3-480 {
					    display: block;
					}
					.transparent-header.header3 .header-top-area.h3-320.h3-480.h3-767 {
					    display: none;
					}
					.transparent-header.header3 .header-top-area.h3-320 {
					    display: block;
					}
					.transparent-header.header3 .header-top-area.h3-480 {
					    display: block;
					}
					.transparent-header.header3 .header-top-area.h3-480.h3-767 {
					    display: none;
					}
					.transparent-header.default-header .header1default-menu-area .header1default-trackorder-area .header-language {
					    display: $menu_lang1_1medium_device;
					}
					.transparent-header.default-header .header1default-menu-area .header1default-trackorder-area .header-btn {
					    display: $menu_track3_1medium_device;
					}
				}

				@media (max-width: 480px) {
					.header3-top-left-area {
					    display: $top_header3_1small_device;
					}
					.header-top-right .header-top-link {
					    display: $top_header3_2small_device;
					}
					.header-top-right .header-social {
					    display: $top_header3_3small_device;
					}

					.transparent-header.header3 .header-top-area.h3-320.h3-767 {
					    display: block;
					}
					.transparent-header.header3 .header-top-area.h3-767 {
					    display: block;
					}
					.transparent-header.header3 .header-top-area.h3-320.h3-480 {
					    display: none;
					}
					.transparent-header.header3 .header-top-area.h3-480 {
					    display: none;
					}
					.transparent-header.header3 .header-top-area.h3-480.h3-767 {
					    display: none;
					}
					.transparent-header.header3 .header-top-area.h3-320 {
					    display: block;
					}

					.transparent-header.default-header .header1default-menu-area .header1default-trackorder-area .header-language {
					    display: $menu_lang1_1small_device;
					}
					.transparent-header.default-header .header1default-menu-area .header1default-trackorder-area .header-btn {
					    display: $menu_track3_1small_device;
					}

				}

				@media (max-width: 320px) {
					.header3-top-left-area {
					    display: $top_header3_1exsmall_device;
					}
					.header-top-right .header-top-link {
					    display: $top_header3_2exsmall_device;
					}
					.header-top-right .header-social {
					    display: $top_header3_3exsmall_device;
					}

					.transparent-header.header3 .header-top-area.h3-320.h3-767 {
					    display: none;
					}
					.transparent-header.header3 .header-top-area.h3-767 {
					    display: block;
					}
					.transparent-header.header3 .header-top-area.h3-320.h3-480 {
					    display: none;
					}
					.transparent-header.header3 .header-top-area.h3-480.h3-767 {
					    display: block;
					}
					.transparent-header.header3 .header-top-area.h3-320 {
					    display: none;
					}
					.transparent-header.header3 .header-top-area.h3-480 {
					    display: block;
					}
					.transparent-header.default-header .header1default-menu-area .header1default-trackorder-area .header-language {
					    display: $menu_lang1_1exsmall_device;
					}
					.transparent-header.default-header .header1default-menu-area .header1default-trackorder-area .header-btn {
					    display: $menu_track3_1exsmall_device;
					}

				}


				@media (max-width: 375px) {
					.transparent-header.default-header .header1default-menu-area .header1default-trackorder-area .header-language{
					    display: $menu_lang1_1exsmall_device;
					}
					.transparent-header.default-header .header1default-menu-area .header1default-trackorder-area .header-btn{
					    display: $menu_track3_1exsmall_device;
					}
				}

				@media (max-width: 425px) {
					.transparent-header.default-header .header1default-menu-area .header1default-trackorder-area .header-language{
					    display: $menu_lang1_1exsmall_device;
					}
					.transparent-header.default-header .header1default-menu-area .header1default-trackorder-area .header-btn{
					    display: $menu_track3_1exsmall_device;
					}
				}


		    </style>";

		   $menu3_mobile_btn = geoport_get_option( 'menu3_mobile_btn' );
		   
		   if (!empty( $menu3_mobile_btn )) {
			   echo "<style>
					/* = Menu 1 Color = */
					@media screen and ( max-width: 991px ) {
						.header-btn {
						    display: block;
						}
					}
				</style>";
	  		}		

		}	
	}



	/* =================================================================
    = Header 1 Top Part
    ====================================================================*/
	public function Header1_Top_Color() {

  		if(function_exists( 'geoport_framework_init' ) ) {
		    $h1top_bg_color = geoport_get_option( 'h1top_bg_color' );
		    if (!empty($h1top_bg_color)) {
		      $h1top_bg_color = $h1top_bg_color;
		    } else {
		      $h1top_bg_color = 'transparent';
		    }
		    $h1top_font_color = geoport_get_option( 'h1top_font_color' );
		    if (!empty($h1top_font_color)) {
		      $h1top_font_color = $h1top_font_color;
		    } else {
		      $h1top_font_color = '#ffffff';
		    }
		    $h1top_hover_font_color = geoport_get_option( 'h1top_hover_font_color' );
		    if (!empty($h1top_hover_font_color)) {
		      $h1top_hover_font_color = $h1top_hover_font_color;
		    } else {
		      $h1top_hover_font_color = '#ff5e14';
		    }
		    $h1top_border_color = geoport_get_option( 'h1top_border_color' );
		    if (!empty($h1top_border_color)) {
		      $h1top_border_color = $h1top_border_color;
		    } else {
		      $h1top_border_color = 'rgba(255,255,255,.2)';
		    }

		    if ( !empty($h1top_bg_color )) {
		    	$padding = 'padding: 15px';
		    } else {
		    	$padding = 'padding: 15px 0';
		    }


		    // medium response style
		    $top_header1_1medium_device = geoport_get_option( 'top_header1_1medium_device' );
		    if (!empty($top_header1_1medium_device)) {
		      $top_header1_1medium_device = 'inline-block';
		    } else {
		      $top_header1_1medium_device = 'none';
		    }

		    $top_header1_2medium_device = geoport_get_option( 'top_header1_2medium_device' );
		    if (!empty($top_header1_2medium_device)) {
		      $top_header1_2medium_device = 'inline-block';
		    } else {
		      $top_header1_2medium_device = 'none';
		    }

		    $top_header1_3medium_device = geoport_get_option( 'top_header1_3medium_device' );
		    if (!empty($top_header1_3medium_device)) {
		      $top_header1_3medium_device = 'inline-block';
		    } else {
		      $top_header1_3medium_device = 'none';
		    }

		    // small response style
		    $top_header1_1small_device = geoport_get_option( 'top_header1_1small_device' );
		    if (!empty($top_header1_1small_device)) {
		      $top_header1_1small_device = 'inline-block';
		    } else {
		      $top_header1_1small_device = 'none';
		    }

		    $top_header1_2small_device = geoport_get_option( 'top_header1_2small_device' );
		    if (!empty($top_header1_2small_device)) {
		      $top_header1_2small_device = 'inline-block';
		    } else {
		      $top_header1_2small_device = 'none';
		    }

		    $top_header1_3small_device = geoport_get_option( 'top_header1_3small_device' );
		    if (!empty($top_header1_3small_device)) {
		      $top_header1_3small_device = 'inline-block';
		    } else {
		      $top_header1_3small_device = 'none';
		    }

		    // extra small response style
		    $top_header1_1exsmall_device = geoport_get_option( 'top_header1_1exsmall_device' );
		    if (!empty($top_header1_1exsmall_device)) {
		      $top_header1_1exsmall_device = 'inline-block';
		    } else {
		      $top_header1_1exsmall_device = 'none';
		    }

		    $top_header1_2exsmall_device = geoport_get_option( 'top_header1_2exsmall_device' );
		    if (!empty($top_header1_2exsmall_device)) {
		      $top_header1_2exsmall_device = 'inline-block';
		    } else {
		      $top_header1_2exsmall_device = 'none';
		    }

		    $top_header1_3exsmall_device = geoport_get_option( 'top_header1_3exsmall_device' );
		    if (!empty($top_header1_3exsmall_device)) {
		      $top_header1_3exsmall_device = 'inline-block';
		    } else {
		      $top_header1_3exsmall_device = 'none';
		    }


		    $menu_lang1_1medium_device = geoport_get_option( 'menu_lang1_1medium_device' );
		    if (!empty($menu_lang1_1medium_device)) {
		      $menu_lang1_1medium_device = 'inline-block';
		    } else {
		      $menu_lang1_1medium_device = 'none';
		    }

		    $menu_track1_1medium_device = geoport_get_option( 'menu_track1_1medium_device' );
		    if (!empty($menu_track1_1medium_device)) {
		      $menu_track1_1medium_device = 'inline-block';
		    } else {
		      $menu_track1_1medium_device = 'none';
		    }

		    $menu_lang1_1small_device = geoport_get_option( 'menu_lang1_1small_device' );
		    if (!empty($menu_lang1_1small_device)) {
		      $menu_lang1_1small_device = 'inline-block';
		    } else {
		      $menu_lang1_1small_device = 'none';
		    }

		    $menu_lang1_1exsmall_device = geoport_get_option( 'menu_lang1_1exsmall_device' );
		    if (!empty($menu_lang1_1exsmall_device)) {
		      $menu_lang1_1exsmall_device = 'inline-block';
		    } else {
		      $menu_lang1_1exsmall_device = 'none';
		    }
		    
		    $menu_track1_1small_device = geoport_get_option( 'menu_track1_1small_device' );
		    if (!empty($menu_track1_1small_device)) {
		      $menu_track1_1small_device = 'inline-block';
		    } else {
		      $menu_track1_1small_device = 'none';
		    }
		    
		    $menu_track1_1exsmall_device = geoport_get_option( 'menu_track1_1exsmall_device' );
		    if (!empty($menu_track1_1exsmall_device)) {
		      $menu_track1_1exsmall_device = 'inline-block';
		    } else {
		      $menu_track1_1exsmall_device = 'none';
		    }



		    echo "<style>
				/* = Header 1 Top Color = */
				.default-header .header-top-area .header-social a,
				.default-header .header-top-area ul li a {
				    color: $h1top_font_color;
				}
				.default-header .header-top-area {
					$padding;
					background-color: $h1top_bg_color;
					border-color: $h1top_border_color;
				}
				.default-header .header-top-area .header-social a:hover,
				.default-header .header-top-area ul li a:hover {
					color: $h1top_hover_font_color;
				}


				@media (max-width: 767px) {
					.default-header-top-left {
					    display: $top_header1_1medium_device;
					}
					.default-header-top-right .header-top-link {
					    display: $top_header1_2medium_device;
					}
					.default-header-top-right .header-social {
					    display: $top_header1_3medium_device;
					}
					.transparent-header.default-header .header-top-area.h1-320.h1-767 {
					    display: none;
					}
					.transparent-header.default-header .header-top-area.h1-767 {
					    display: none;
					}
					.transparent-header.default-header .header-top-area.h1-320.h1-480 {
					    display: block;
					}
					.transparent-header.default-header .header-top-area.h1-320.h1-480.h1-767 {
					    display: none;
					}
					.transparent-header.default-header .header-top-area.h1-320 {
					    display: block;
					}
					.transparent-header.default-header .header-top-area.h1-480 {
					    display: block;
					}
					.transparent-header.default-header .header-top-area.h1-480.h1-767 {
					    display: none;
					}
					.header3-menu-area .header3-trackorder-area .header-language {
					    display: $menu_lang1_1medium_device;
					}
					.header3-menu-area .header3-trackorder-area .header-btn {
					    display: $menu_track1_1medium_device;
					}
					

				}

				@media (max-width: 480px) {
					.default-header-top-left {
					    display: $top_header1_1small_device;
					}
					.default-header-top-right .header-top-link {
					    display: $top_header1_2small_device;
					}
					.default-header-top-right .header-social {
					    display: $top_header1_3small_device;
					}
					.transparent-header.default-header .header-top-area.h1-320.h1-767 {
					    display: block;
					}
					.transparent-header.default-header .header-top-area.h1-767 {
					    display: block;
					}
					.transparent-header.default-header .header-top-area.h1-320.h1-480 {
					    display: none;
					}
					.transparent-header.default-header .header-top-area.h1-480 {
					    display: none;
					}
					.transparent-header.default-header .header-top-area.h1-480.h1-767 {
					    display: none;
					}
					.transparent-header.default-header .header-top-area.h1-320 {
					    display: block;
					}
					.header3-menu-area .header3-trackorder-area .header-language {
					    display: $menu_lang1_1small_device;
					}
					.header3-menu-area .header3-trackorder-area .header-btn {
					    display: $menu_track1_1small_device;
					}

				}

				@media (max-width: 320px) {
					.default-header-top-left {
					    display: $top_header1_1exsmall_device;
					}
					.default-header-top-right .header-top-link {
					    display: $top_header1_2exsmall_device;
					}
					.default-header-top-right .header-social {
					    display: $top_header1_3exsmall_device;
					}
					.transparent-header.default-header .header-top-area.h1-320.h1-767 {
					    display: none;
					}
					.transparent-header.default-header .header-top-area.h1-767 {
					    display: block;
					}
					.transparent-header.default-header .header-top-area.h1-320.h1-480 {
					    display: none;
					}
					.transparent-header.default-header .header-top-area.h1-480.h1-767 {
					    display: block;
					}
					.transparent-header.default-header .header-top-area.h1-320 {
					    display: none;
					}
					.transparent-header.default-header .header-top-area.h1-480 {
					    display: block;
					}
					.header3-menu-area .header3-trackorder-area .header-language {
					    display: $menu_lang1_1exsmall_device;
					}
					.header3-menu-area .header3-trackorder-area .header-btn {
					    display: $menu_track1_1exsmall_device;
					}
				}

				@media (max-width: 375px) {
					.header3-menu-area .header3-trackorder-area .header-language {
					    display: $menu_lang1_1exsmall_device;
					}
					.header3-menu-area .header3-trackorder-area .header-btn {
					    display: $menu_track1_1exsmall_device;
					}
				}

				@media (max-width: 425px) {
					.header3-menu-area .header3-trackorder-area .header-language {
					    display: $menu_lang1_1exsmall_device;
					}
					.header3-menu-area .header3-trackorder-area .header-btn {
					    display: $menu_track1_1exsmall_device;
					}
				}

		    </style>";
  		}		
	}



	/* =================================================================
    = Header 2 Top Part
    ====================================================================*/
	public function Header2_Top_Color() {

  		if(function_exists( 'geoport_framework_init' ) ) {

		    $h2top_font_color = geoport_get_option( 'h2top_font_color' );
		    if ( !empty($h2top_font_color )) {
		    	$h2top_font_color = $h2top_font_color;
		    } else {
		    	$h2top_font_color = '#ffffff';
		    }
		    $h2top_bg_color = geoport_get_option( 'h2top_bg_color' );
		    if ( !empty($h2top_bg_color )) {
		    	$h2top_bg_color = $h2top_bg_color;
		    } else {
		    	$h2top_bg_color = '#001d67';
		    }
		    $h2top_hover_font_color = geoport_get_option( 'h2top_hover_font_color' );
		    if ( !empty($h2top_hover_font_color )) {
		    	$h2top_hover_font_color = $h2top_hover_font_color;
		    } else {
		    	$h2top_hover_font_color = '#ff5e14';
		    }


		    // medium response style
		    $top_header2_1medium_device = geoport_get_option( 'top_header2_1medium_device' );
		    if (!empty($top_header2_1medium_device)) {
		      $top_header2_1medium_device = 'inline-block';
		    } else {
		      $top_header2_1medium_device = 'none';
		    }

		    $top_header2_2medium_device = geoport_get_option( 'top_header2_2medium_device' );
		    if (!empty($top_header2_2medium_device)) {
		      $top_header2_2medium_device = 'inline-block';
		    } else {
		      $top_header2_2medium_device = 'none';
		    }

		    $top_header2_3medium_device = geoport_get_option( 'top_header2_3medium_device' );
		    if (!empty($top_header2_3medium_device)) {
		      $top_header2_3medium_device = 'inline-block';
		    } else {
		      $top_header2_3medium_device = 'none';
		    }

		    // small response style
		    $top_header2_1small_device = geoport_get_option( 'top_header2_1small_device' );
		    if (!empty($top_header2_1small_device)) {
		      $top_header2_1small_device = 'inline-block';
		    } else {
		      $top_header2_1small_device = 'none';
		    }

		    $top_header2_2small_device = geoport_get_option( 'top_header2_2small_device' );
		    if (!empty($top_header2_2small_device)) {
		      $top_header2_2small_device = 'inline-block';
		    } else {
		      $top_header2_2small_device = 'none';
		    }

		    $top_header2_3small_device = geoport_get_option( 'top_header2_3small_device' );
		    if (!empty($top_header2_3small_device)) {
		      $top_header2_3small_device = 'inline-block';
		    } else {
		      $top_header2_3small_device = 'none';
		    }

		    // extra small response style
		    $top_header2_1exsmall_device = geoport_get_option( 'top_header2_1exsmall_device' );
		    if (!empty($top_header2_1exsmall_device)) {
		      $top_header2_1exsmall_device = 'inline-block';
		    } else {
		      $top_header2_1exsmall_device = 'none';
		    }

		    $top_header2_2exsmall_device = geoport_get_option( 'top_header2_2exsmall_device' );
		    if (!empty($top_header2_2exsmall_device)) {
		      $top_header2_2exsmall_device = 'inline-block';
		    } else {
		      $top_header2_2exsmall_device = 'none';
		    }

		    $top_header2_3exsmall_device = geoport_get_option( 'top_header2_3exsmall_device' );
		    if (!empty($top_header2_3exsmall_device)) {
		      $top_header2_3exsmall_device = 'inline-block';
		    } else {
		      $top_header2_3exsmall_device = 'none';
		    }


		    $menu_lang1_1medium_device = geoport_get_option( 'menu_lang1_1medium_device' );
		    if (!empty($menu_lang1_1medium_device)) {
		      $menu_lang1_1medium_device = 'inline-block';
		    } else {
		      $menu_lang1_1medium_device = 'none';
		    }
		    $menu_track2_1medium_device = geoport_get_option( 'menu_track2_1medium_device' );
		    if (!empty($menu_track2_1medium_device)) {
		      $menu_track2_1medium_device = 'inline-block';
		    } else {
		      $menu_track2_1medium_device = 'none';
		    }

		    $menu_lang1_1small_device = geoport_get_option( 'menu_lang1_1small_device' );
		    if (!empty($menu_lang1_1small_device)) {
		      $menu_lang1_1small_device = 'inline-block';
		    } else {
		      $menu_lang1_1small_device = 'none';
		    }

		    $menu_lang1_1exsmall_device = geoport_get_option( 'menu_lang1_1exsmall_device' );
		    if (!empty($menu_lang1_1exsmall_device)) {
		      $menu_lang1_1exsmall_device = 'inline-block';
		    } else {
		      $menu_lang1_1exsmall_device = 'none';
		    }
		    
		    $menu_track2_1small_device = geoport_get_option( 'menu_track2_1small_device' );
		    if (!empty($menu_track2_1small_device)) {
		      $menu_track2_1small_device = 'inline-block';
		    } else {
		      $menu_track2_1small_device = 'none';
		    }
		    
		    $menu_track2_1exsmall_device = geoport_get_option( 'menu_track2_1exsmall_device' );
		    if (!empty($menu_track2_1exsmall_device)) {
		      $menu_track2_1exsmall_device = 'inline-block';
		    } else {
		      $menu_track2_1exsmall_device = 'none';
		    }



		    echo "<style>
				/* = Header 2 Top Color = */
				.header-style-two .header-top-area .header-social a,
				.header-style-two .header-top-area ul li a {
				    color: $h2top_font_color;
				}
				.header-style-two .header-top-area {
					background-color: $h2top_bg_color;
				}
				.header-style-two .header-top-area .header-social a:hover,
				.header-style-two .header-top-area ul li a:hover {
					color: $h2top_hover_font_color;
				}


				@media (max-width: 767px) {
					.header-style-two .header2-top-left-area {
					    display: $top_header2_1medium_device;
					}
					.header-style-two .header2-top-right .header-top-link {
					    display: $top_header2_2medium_device;
					}
					.header-style-two .header2-top-right .header-social {
					    display: $top_header2_3medium_device;
					}
					.transparent-header.header-style-two .header-top-area.h2-320.h2-767 {
					    display: none;
					}
					.transparent-header.header-style-two .header-top-area.h2-767 {
					    display: none;
					}
					.transparent-header.header-style-two .header-top-area.h2-320.h2-480 {
					    display: block;
					}
					.transparent-header.header-style-two .header-top-area.h2-320.h2-480.h2-767 {
					    display: none;
					}
					.transparent-header.header-style-two .header-top-area.h2-320 {
					    display: block;
					}
					.transparent-header.header-style-two .header-top-area.h2-480 {
					    display: block;
					}
					.transparent-header.header-style-two .header-top-area.h2-480.h2-767 {
					    display: none;
					}

					.header2-menu-area .header2-trackorder-area .header-language {
					    display: $menu_lang1_1medium_device;
					}
					.header2-menu-area .header2-trackorder-area .header-btn {
					    display: $menu_track2_1medium_device;
					}

				}

				@media (max-width: 480px) {
					.header-style-two .header2-top-left-area {
					    display: $top_header2_1small_device;
					}
					.header-style-two .header2-top-right .header-top-link {
					    display: $top_header2_2small_device;
					}
					.header-style-two .header2-top-right .header-social {
					    display: $top_header2_3small_device;
					}
					.transparent-header.header-style-two .header-top-area.h2-320.h2-767 {
					    display: block;
					}
					.transparent-header.header-style-two .header-top-area.h2-767 {
					    display: block;
					}
					.transparent-header.header-style-two .header-top-area.h2-320.h2-480 {
					    display: none;
					}
					.transparent-header.header-style-two .header-top-area.h2-480 {
					    display: none;
					}
					.transparent-header.header-style-two .header-top-area.h2-480.h2-767 {
					    display: none;
					}
					.transparent-header.header-style-two .header-top-area.h2-320 {
					    display: block;
					}
					.header2-menu-area .header2-trackorder-area .header-language {
					    display: $menu_lang1_1small_device;
					}
					.header2-menu-area .header2-trackorder-area .header-btn {
					    display: $menu_track2_1small_device;
					}
				}

				@media (max-width: 320px) {
					.header-style-two .header2-top-left-area {
					    display: $top_header2_1exsmall_device;
					}
					.header-style-two .header2-top-right .header-top-link {
					    display: $top_header2_2exsmall_device;
					}
					.header-style-two .header2-top-right .header-social {
					    display: $top_header2_3exsmall_device;
					}
					.transparent-header.header-style-two .header-top-area.h2-320.h2-767 {
					    display: none;
					}
					.transparent-header.header-style-two .header-top-area.h2-767 {
					    display: block;
					}
					.transparent-header.header-style-two .header-top-area.h2-320.h2-480 {
					    display: none;
					}
					.transparent-header.header-style-two .header-top-area.h2-480.h2-767 {
					    display: block;
					}
					.transparent-header.header-style-two .header-top-area.h2-320 {
					    display: none;
					}
					.transparent-header.header-style-two .header-top-area.h2-480 {
					    display: block;
					}

					.header2-menu-area .header2-trackorder-area .header-btn {
					    display: $menu_track2_1exsmall_device;
					}
				}


				@media (max-width: 375px) {
					.header2-menu-area .header2-trackorder-area .header-language {
					    display: $menu_lang1_1exsmall_device;
					}
					.header2-menu-area .header2-trackorder-area .header-btn {
					    display: $menu_track2_1exsmall_device;
					}
				}

				@media (max-width: 425px) {
					.header2-menu-area .header2-trackorder-area .header-language {
					    display: $menu_lang1_1exsmall_device;
					}
					.header2-menu-area .header2-trackorder-area .header-btn {
					    display: $menu_track2_1exsmall_device;
					}
				}

		    </style>";
  		}		
	}



	/* =================================================================
    = Breadcrumb settings
    ====================================================================*/
	public function Breadcrumb_Settings() {

  		if(function_exists( 'geoport_framework_init' ) ) {
  			// Breadcrumb settings
		    $breadcrumb_bg_condition = geoport_get_option( 'breadcrumb_bg_condition' );

		    $breadcrumb_bg_color = geoport_get_option( 'breadcrumb_bg_color' );
		    if (!empty($breadcrumb_bg_color)) {
		      $breadcrumb_bg_color = $breadcrumb_bg_color;
		    } else {
		      $breadcrumb_bg_color = '#000e30';
		    }

		    $breadcrumb_font_color = geoport_get_option( 'breadcrumb_font_color' );
		    if (!empty($breadcrumb_font_color)) {
		      $breadcrumb_font_color = $breadcrumb_font_color;
		    } else {
		      $breadcrumb_font_color = '#fff';
		    }
		    $breadcrumb_hover_link_color = geoport_get_option( 'breadcrumb_hover_link_color' );
		    if (!empty($breadcrumb_hover_link_color)) {
		      $breadcrumb_hover_link_color = $breadcrumb_hover_link_color;
		    } else {
		      $breadcrumb_hover_link_color = '#ff566e';
		    }
		    
		    $breadcrumb_pt = geoport_get_option( 'breadcrumb_pt' );
		    if (!empty($breadcrumb_pt)) {
		      $breadcrumb_pt = $breadcrumb_pt;
		    } else {
		      $breadcrumb_pt = '140px';
		    }
		    $breadcrumb_pb = geoport_get_option( 'breadcrumb_pb' );
		    if (!empty($breadcrumb_pb)) {
		      $breadcrumb_pb = $breadcrumb_pb;
		    } else {
		      $breadcrumb_pb = '75px';
		    }
		    
		    $breadcrumb_overlay_color = geoport_get_option( 'breadcrumb_overlay_color' );
		    if (!empty($breadcrumb_overlay_color)) {
		      $breadcrumb_overlay_color = $breadcrumb_overlay_color;
		    } else {
		      $breadcrumb_overlay_color = '#000927';
		    }
		   	
		    $breadcrumb_bg_img_opacity = geoport_get_option( 'breadcrumb_bg_img_opacity' );
		    if (!empty($breadcrumb_bg_img_opacity)) {
		      $breadcrumb_bg_img_opacity = $breadcrumb_bg_img_opacity;
		    } else {
		      $breadcrumb_bg_img_opacity = '.7';
		    }

		    $page_breadcrumb_color_data = get_post_meta( get_the_ID(), '_custom_page_options', true );

		    if (!empty($page_breadcrumb_color_data['page_breadcrumb_switch'])) {
		        if (!empty($page_breadcrumb_color_data['page_breadcrumb_bg_color'])) {
		          $breadcrumb_overlay_color = $page_breadcrumb_color_data['page_breadcrumb_bg_color'];
		        } else {
		          $breadcrumb_overlay_color = $breadcrumb_overlay_color;
		        }
		        if (!empty($page_breadcrumb_color_data['breadcrumb_bg_img_opacity'])) {
		          $breadcrumb_bg_img_opacity = $page_breadcrumb_color_data['breadcrumb_bg_img_opacity'];
		        } else {
		          $breadcrumb_bg_img_opacity = $breadcrumb_bg_img_opacity;
		        }
		        if (!empty($page_breadcrumb_color_data['breadcrumb_pt'])) {
		          $breadcrumb_pt = $page_breadcrumb_color_data['breadcrumb_pt'];
		        } else {
		          $breadcrumb_pt = $breadcrumb_pt;
		        }
		        if (!empty($page_breadcrumb_color_data['breadcrumb_pb'])) {
		          $breadcrumb_pb = $page_breadcrumb_color_data['breadcrumb_pb'];
		        } else {
		          $breadcrumb_pb = $breadcrumb_pb;
		        }
		        if (!empty($page_breadcrumb_color_data['breadcrumb_font_color'])) {
		          $breadcrumb_font_color = $page_breadcrumb_color_data['breadcrumb_font_color'];
		        } else {
		          $breadcrumb_font_color = $breadcrumb_font_color;
		        }
		        if (!empty($page_breadcrumb_color_data['breadcrumb_hover_link_color'])) {
		          $breadcrumb_hover_link_color = $page_breadcrumb_color_data['breadcrumb_hover_link_color'];
		        } else {
		          $breadcrumb_hover_link_color = $breadcrumb_hover_link_color;
		        }
		    } else {
		        $breadcrumb_pt = $breadcrumb_pt;
		        $breadcrumb_pb = $breadcrumb_pb;
		        $breadcrumb_font_color = $breadcrumb_font_color;
		        $breadcrumb_overlay_color = $breadcrumb_overlay_color;
		        $breadcrumb_bg_img_opacity = $breadcrumb_bg_img_opacity;
		        $breadcrumb_hover_link_color = $breadcrumb_hover_link_color;
		    }

		    if ( $breadcrumb_bg_condition != 'image' ) {
		      $breadcrumb_area = ".breadcrumb-area {
		        padding-top: $breadcrumb_pt;
		        margin-bottom: $breadcrumb_pb;
		        background: $breadcrumb_bg_color;
		      }";
		    } else {
		       $breadcrumb_area = ".breadcrumb-content {
		        padding-top: $breadcrumb_pt;
		        margin-bottom: $breadcrumb_pb;
		      }";
		    }

		    if ( $breadcrumb_bg_condition != 'image' ) {
		      $breadcrumb_area = ".breadcrumb-area {
		        padding-top: $breadcrumb_pt;
		        margin-bottom: $breadcrumb_pb;
		        background: $breadcrumb_bg_color;
		      }";
		    } else {
		       $breadcrumb_area = ".breadcrumb-content {
		        padding-top: $breadcrumb_pt;
		        margin-bottom: $breadcrumb_pb;
		      }";
		    }

		    $breadcrumb_title_font = geoport_get_option( 'breadcrumb_title_font' );
		    if (!empty($breadcrumb_title_font)) {
		      $breadcrumb_title_font = $breadcrumb_title_font;
		    } else {
		      $breadcrumb_title_font = '36px';
		    }

		    $breadcrumb_m_pt = geoport_get_option( 'breadcrumb_m_pt' );
		    if (!empty($breadcrumb_m_pt)) {
		      $breadcrumb_m_pt = $breadcrumb_m_pt;
		    } else {
		      $breadcrumb_m_pt = '200px';
		    }
		    $breadcrumb_m_pb = geoport_get_option( 'breadcrumb_m_pb' );
		    if (!empty($breadcrumb_m_pb)) {
		      $breadcrumb_m_pb = $breadcrumb_m_pb;
		    } else {
		      $breadcrumb_m_pb = '75px';
		    }

		    $breadcrumb_m_title_font = geoport_get_option( 'breadcrumb_m_title_font' );
		    if (!empty($breadcrumb_m_title_font)) {
		      $breadcrumb_m_title_font = $breadcrumb_m_title_font;
		    } else {
		      $breadcrumb_m_title_font = '32px';
		    }

		    $geoport_breadcrumb_switch = geoport_get_option( 'geoport_breadcrumb_switch' );
		    if($geoport_breadcrumb_switch == 'true'){
		    	$hide_breadcrumbtab = "";
		    }else {
		    	$hide_breadcrumbtab = "display: none";
		    }

		    $geoport_breadcrumb_text_transform = geoport_get_option( 'geoport_breadcrumb_text_transform' );
		    if (!empty($geoport_breadcrumb_text_transform)) {
		      $geoport_breadcrumb_text_transform = $geoport_breadcrumb_text_transform;
		    } else {
		      $geoport_breadcrumb_text_transform = 'capitalize';
		    }

		    $geoport_breadcrumb_font_weight = geoport_get_option( 'geoport_breadcrumb_font_weight' );
		    if (!empty($geoport_breadcrumb_font_weight)) {
		      $geoport_breadcrumb_font_weight = $geoport_breadcrumb_font_weight;
		    } else {
		      $geoport_breadcrumb_font_weight = '700';
		    }



		    echo "<style>
				/* = Breadcrumb Color = */
				$breadcrumb_area
				.breadcrumb-area.breadcrumb_height .breadcrumb-item + .breadcrumb-item::before,
				.breadcrumb-area.breadcrumb_height .breadcrumb-wrap h2,
				.breadcrumb-area.breadcrumb_height .breadcrumb li a, 
				.breadcrumb-area.breadcrumb_height .breadcrumb li,
				.breadcrumb-item + .breadcrumb-item::before {
					color: $breadcrumb_font_color;
				}
				.image-overlay:before {
					opacity: $breadcrumb_bg_img_opacity;
					background-color: $breadcrumb_overlay_color;
				}
				.breadcrumb li a:hover {
					color: $breadcrumb_hover_link_color !important;
				}
				.breadcrumb-content h2 {
					font-size: $breadcrumb_title_font;
					font-weight: $geoport_breadcrumb_font_weight;
					text-transform: $geoport_breadcrumb_text_transform;
				}
				.breadcrumb-area .breadcrumb-content h2,
				.breadcrumb-area .breadcrumb-content nav{
					$hide_breadcrumbtab;
				}

				@media (max-width: 767px) {
					.breadcrumb-content {
					    padding-top: $breadcrumb_m_pt;
					    margin-bottom: $breadcrumb_m_pb;
					}
					.breadcrumb-content h2 {
						font-size: $breadcrumb_m_title_font;
					}
				}


		    </style>";

  		}		
	}	


	/* =================================================================
    = Theme base color settings
    ====================================================================*/
	public function Theme_Base_Color_Settings() {

  		if(function_exists( 'geoport_framework_init' ) ) {
  			/* Color theme options */
		    $base_color = geoport_get_option( 'geoport_base_color' );
		    if (!empty($base_color)) {
		      $base_color = $base_color;
		    } else {
		      $base_color = '#ff5e14';
		    }

		    $geoport_sidebar_widgets_color = geoport_get_option( 'geoport_sidebar_widgets_color' );
		    if (!empty($geoport_sidebar_widgets_color)) {
		      $geoport_sidebar_widgets_color = $geoport_sidebar_widgets_color;
		    } else {
		      $geoport_sidebar_widgets_color = '#001d67';
		    }

		    $geoport_sidebar_widgets_text_color = geoport_get_option( 'geoport_sidebar_widgets_text_color' );
		    if (!empty($geoport_sidebar_widgets_text_color)) {
		      $geoport_sidebar_widgets_text_color = $geoport_sidebar_widgets_text_color;
		    } else {
		      $geoport_sidebar_widgets_text_color = '#001d67';
		    }

		    $geoport_blog_heading_text_color = geoport_get_option( 'geoport_blog_heading_text_color' );
		    if (!empty($geoport_blog_heading_text_color)) {
		      $geoport_blog_heading_text_color = $geoport_blog_heading_text_color;
		    } else {
		      $geoport_blog_heading_text_color = '#001d67';
		    }

		    $geoport_brochures_widgets_bg_color = geoport_get_option( 'geoport_brochures_widgets_bg_color' );
		    if (!empty($geoport_brochures_widgets_bg_color)) {
		      $geoport_brochures_widgets_bg_color = $geoport_brochures_widgets_bg_color;
		    } else {
		      $geoport_brochures_widgets_bg_color = '#ff8400';
		    }
		    $geoport_brochures_widgets_title_color = geoport_get_option( 'geoport_brochures_widgets_title_color' );
		    if (!empty($geoport_brochures_widgets_title_color)) {
		      $geoport_brochures_widgets_title_color = $geoport_brochures_widgets_title_color;
		    } else {
		      $geoport_brochures_widgets_title_color = '#fff';
		    }
		    $geoport_brochures_widgets_subtitle_color = geoport_get_option( 'geoport_brochures_widgets_subtitle_color' );
		    if (!empty($geoport_brochures_widgets_subtitle_color)) {
		      $geoport_brochures_widgets_subtitle_color = $geoport_brochures_widgets_subtitle_color;
		    } else {
		      $geoport_brochures_widgets_subtitle_color = '#fff';
		    }
		    $geoport_brochures_widgets_btnbg_color = geoport_get_option( 'geoport_brochures_widgets_btnbg_color' );
		    if (!empty($geoport_brochures_widgets_btnbg_color)) {
		      $geoport_brochures_widgets_btnbg_color = $geoport_brochures_widgets_btnbg_color;
		    } else {
		      $geoport_brochures_widgets_btnbg_color = '#f3f9ff';
		    }
		    $geoport_brochures_widgets_btntext_color = geoport_get_option( 'geoport_brochures_widgets_btntext_color' );
		    if (!empty($geoport_brochures_widgets_btntext_color)) {
		      $geoport_brochures_widgets_btntext_color = $geoport_brochures_widgets_btntext_color;
		    } else {
		      $geoport_brochures_widgets_btntext_color = '#001d67';
		    }
		    $geoport_brochures_widgets_btnicon_color = geoport_get_option( 'geoport_brochures_widgets_btnicon_color' );
		    if (!empty($geoport_brochures_widgets_btnicon_color)) {
		      $geoport_brochures_widgets_btnicon_color = $geoport_brochures_widgets_btnicon_color;
		    } else {
		      $geoport_brochures_widgets_btnicon_color = '#ff8400';
		    }
		    $geoport_brochures_widgets_btnarrow_color = geoport_get_option( 'geoport_brochures_widgets_btnarrow_color' );
		    if (!empty($geoport_brochures_widgets_btnarrow_color)) {
		      $geoport_brochures_widgets_btnarrow_color = $geoport_brochures_widgets_btnarrow_color;
		    } else {
		      $geoport_brochures_widgets_btnarrow_color = '#c4cde3';
		    }
		    $geoport_brochures_widgets_btnhover_color = geoport_get_option( 'geoport_brochures_widgets_btnhover_color' );
		    if (!empty($geoport_brochures_widgets_btnhover_color)) {
		      $geoport_brochures_widgets_btnhover_color = $geoport_brochures_widgets_btnhover_color;
		    } else {
		      $geoport_brochures_widgets_btnhover_color = '#001d67';
		    }
		    $geoport_brochures_widgets_btnhover_text_color = geoport_get_option( 'geoport_brochures_widgets_btnhover_text_color' );
		    if (!empty($geoport_brochures_widgets_btnhover_text_color)) {
		      $geoport_brochures_widgets_btnhover_text_color = $geoport_brochures_widgets_btnhover_text_color;
		    } else {
		      $geoport_brochures_widgets_btnhover_text_color = '#ffffff';
		    }

		    $geoport_touch_widgets_bg_color = geoport_get_option( 'geoport_touch_widgets_bg_color' );
		    if (!empty($geoport_touch_widgets_bg_color)) {
		      $geoport_touch_widgets_bg_color = $geoport_touch_widgets_bg_color;
		    } else {
		      $geoport_touch_widgets_bg_color = '#001d67';
		    }

		    $geoport_touch_widgets_title_color = geoport_get_option( 'geoport_touch_widgets_title_color' );
		    if (!empty($geoport_touch_widgets_title_color)) {
		      $geoport_touch_widgets_title_color = $geoport_touch_widgets_title_color;
		    } else {
		      $geoport_touch_widgets_title_color = '#ffffff';
		    }

		    $geoport_touch_widgets_subtitle_color = geoport_get_option( 'geoport_touch_widgets_subtitle_color' );
		    if (!empty($geoport_touch_widgets_subtitle_color)) {
		      $geoport_touch_widgets_subtitle_color = $geoport_touch_widgets_subtitle_color;
		    } else {
		      $geoport_touch_widgets_subtitle_color = '#ff8400';
		    }

		    $geoport_touch_widgets_btntext_color = geoport_get_option( 'geoport_touch_widgets_btntext_color' );
		    if (!empty($geoport_touch_widgets_btntext_color)) {
		      $geoport_touch_widgets_btntext_color = $geoport_touch_widgets_btntext_color;
		    } else {
		      $geoport_touch_widgets_btntext_color = '#ffffff';
		    }

		    $geoport_touch_widgets_btnbg_color = geoport_get_option( 'geoport_touch_widgets_btnbg_color' );
		    if (!empty($geoport_touch_widgets_btnbg_color)) {
		      $geoport_touch_widgets_btnbg_color = $geoport_touch_widgets_btnbg_color;
		    } else {
		      $geoport_touch_widgets_btnbg_color = '#a8b6d9';
		    }

		    $geoport_touch_widgets_btnhover_color = geoport_get_option( 'geoport_touch_widgets_btnhover_color' );
		    if (!empty($geoport_touch_widgets_btnhover_color)) {
		      $geoport_touch_widgets_btnhover_color = $geoport_touch_widgets_btnhover_color;
		    } else {
		      $geoport_touch_widgets_btnhover_color = '#ff8400';
		    }

		    $geoport_touch_widgets_btnhovertext_color = geoport_get_option( 'geoport_touch_widgets_btnhovertext_color' );
		    if (!empty($geoport_touch_widgets_btnhovertext_color)) {
		      $geoport_touch_widgets_btnhovertext_color = $geoport_touch_widgets_btnhovertext_color;
		    } else {
		      $geoport_touch_widgets_btnhovertext_color = '#ffffff';
		    }

		    $shop_base_color = geoport_get_option( 'shop_base_color' );
		    if (!empty($shop_base_color)) {
		      $shop_base_color = $shop_base_color;
		    } else {
		      $shop_base_color = '#ff5e14';
		    }

		    $shop_pagination_color = geoport_get_option( 'shop_pagination_color' );
		    if (!empty($shop_pagination_color)) {
		      $shop_pagination_color = $shop_pagination_color;
		    } else {
		      $shop_pagination_color = '#ffffff';
		    }

		    $shop_pagination_text_color = geoport_get_option( 'shop_pagination_text_color' );
		    if (!empty($shop_pagination_text_color)) {
		      $shop_pagination_text_color = $shop_pagination_text_color;
		    } else {
		      $shop_pagination_text_color = '#001d67';
		    }

		    $shop_pagination_active_color = geoport_get_option( 'shop_pagination_active_color' );
		    if (!empty($shop_pagination_active_color)) {
		      $shop_pagination_active_color = $shop_pagination_active_color;
		    } else {
		      $shop_pagination_active_color = '#ff5e14';
		    }

		    $shop_pagination_active_text_color = geoport_get_option( 'shop_pagination_active_text_color' );
		    if (!empty($shop_pagination_active_text_color)) {
		      $shop_pagination_active_text_color = $shop_pagination_active_text_color;
		    } else {
		      $shop_pagination_active_text_color = '#ffffff';
		    }

		    $shop_pagination_hover_color = geoport_get_option( 'shop_pagination_hover_color' );
		    if (!empty($shop_pagination_hover_color)) {
		      $shop_pagination_hover_color = $shop_pagination_hover_color;
		    } else {
		      $shop_pagination_hover_color = '#ff5e14';
		    }

		    $shop_pagination_hover_text_color = geoport_get_option( 'shop_pagination_hover_text_color' );
		    if (!empty($shop_pagination_hover_text_color)) {
		      $shop_pagination_hover_text_color = $shop_pagination_hover_text_color;
		    } else {
		      $shop_pagination_hover_text_color = '#ffffff';
		    }

		    $shop_btnbg_color = geoport_get_option( 'shop_btnbg_color' );
		    if (!empty($shop_btnbg_color)) {
		      $shop_btnbg_color = $shop_btnbg_color;
		    } else {
		      $shop_btnbg_color = '#ff5e14';
		    }

		    $shop_btn_text_color = geoport_get_option( 'shop_btn_text_color' );
		    if (!empty($shop_btn_text_color)) {
		      $shop_btn_text_color = $shop_btn_text_color;
		    } else {
		      $shop_btn_text_color = '#ffffff';
		    }

		    $shop_btnbg_hover_color = geoport_get_option( 'shop_btnbg_hover_color' );
		    if (!empty($shop_btnbg_hover_color)) {
		      $shop_btnbg_hover_color = $shop_btnbg_hover_color;
		    } else {
		      $shop_btnbg_hover_color = '#ff5e14';
		    }
		    
		    $shop_btnbg_hover_text_color = geoport_get_option( 'shop_btnbg_hover_text_color' );
		    if (!empty($shop_btnbg_hover_text_color)) {
		      $shop_btnbg_hover_text_color = $shop_btnbg_hover_text_color;
		    } else {
		      $shop_btnbg_hover_text_color = '#ffffff';
		    }



		    
		    $geoport_page_base_btn = geoport_get_option( 'geoport_page_base_btn' );
		    if (!empty($geoport_page_base_btn)) {
		      $geoport_page_base_btn = $geoport_page_base_btn;
		    } else {
		      $geoport_page_base_btn = '#34ccff';
		    }
		    $geoport_page_base_btn_text = geoport_get_option( 'geoport_page_base_btn_text' );
		    if (!empty($geoport_page_base_btn_text)) {
		      $geoport_page_base_btn_text = $geoport_page_base_btn_text;
		    } else {
		      $geoport_page_base_btn_text = '#fff';
		    }
		    $geoport_page_base_btn_icon_color = geoport_get_option( 'geoport_page_base_btn_icon_color' );
		    if (!empty($geoport_page_base_btn_icon_color)) {
		      $geoport_page_base_btn_icon_color = $geoport_page_base_btn_icon_color;
		    } else {
		      $geoport_page_base_btn_icon_color = '#fff';
		    }
		    $geoport_page_base_btn_hover_bg = geoport_get_option( 'geoport_page_base_btn_hover_bg' );
		    if (!empty($geoport_page_base_btn_hover_bg)) {
		      $geoport_page_base_btn_hover_bg = $geoport_page_base_btn_hover_bg;
		    } else {
		      $geoport_page_base_btn_hover_bg = '#34ccff';
		    }
		    $geoport_page_base_btn_hover_text = geoport_get_option( 'geoport_page_base_btn_hover_text' );
		    if (!empty($geoport_page_base_btn_hover_text)) {
		      $geoport_page_base_btn_hover_text = $geoport_page_base_btn_hover_text;
		    } else {
		      $geoport_page_base_btn_hover_text = '#34ccff';
		    }
		    $geoport_page_base_btn_hover_icon_color = geoport_get_option( 'geoport_page_base_btn_hover_icon_color' );
		    if (!empty($geoport_page_base_btn_hover_icon_color)) {
		      $geoport_page_base_btn_hover_icon_color = $geoport_page_base_btn_hover_icon_color;
		    } else {
		      $geoport_page_base_btn_hover_icon_color = '#fff';
		    }



		    $geoport_slider_btn_one_bg = geoport_get_option( 'geoport_slider_btn_one_bg' );
		    if (!empty($geoport_slider_btn_one_bg)) {
		      $geoport_slider_btn_one_bg = $geoport_slider_btn_one_bg;
		    } else {
		      $geoport_slider_btn_one_bg = '#d00c27';
		    }
		    $geoport_slider_btn_one_hover_bg = geoport_get_option( 'geoport_slider_btn_one_hover_bg' );
		    if (!empty($geoport_slider_btn_one_hover_bg)) {
		      $geoport_slider_btn_one_hover_bg = $geoport_slider_btn_one_hover_bg;
		    } else {
		      $geoport_slider_btn_one_hover_bg = '#cee2ff';
		    }
		    $geoport_slider_btn_one_text = geoport_get_option( 'geoport_slider_btn_one_text' );
		    if (!empty($geoport_slider_btn_one_text)) {
		      $geoport_slider_btn_one_text = $geoport_slider_btn_one_text;
		    } else {
		      $geoport_slider_btn_one_text = '#fff';
		    }
		    $geoport_slider_btn_one_hover_text = geoport_get_option( 'geoport_slider_btn_one_hover_text' );
		    if (!empty($geoport_slider_btn_one_hover_text)) {
		      $geoport_slider_btn_one_hover_text = $geoport_slider_btn_one_hover_text;
		    } else {
		      $geoport_slider_btn_one_hover_text = '#001d67';
		    }
		    $geoport_slider_btn_two_bg = geoport_get_option( 'geoport_slider_btn_two_bg' );
		    if (!empty($geoport_slider_btn_two_bg)) {
		      $geoport_slider_btn_two_bg = $geoport_slider_btn_two_bg;
		    } else {
		      $geoport_slider_btn_two_bg = '#cee2ff';
		    }
		    $geoport_slider_btn_two_hover_bg = geoport_get_option( 'geoport_slider_btn_two_hover_bg' );
		    if (!empty($geoport_slider_btn_two_hover_bg)) {
		      $geoport_slider_btn_two_hover_bg = $geoport_slider_btn_two_hover_bg;
		    } else {
		      $geoport_slider_btn_two_hover_bg = '#d00c27';
		    }
		    $geoport_slider_btn_two_bg_text = geoport_get_option( 'geoport_slider_btn_two_bg_text' );
		    if (!empty($geoport_slider_btn_two_bg_text)) {
		      $geoport_slider_btn_two_bg_text = $geoport_slider_btn_two_bg_text;
		    } else {
		      $geoport_slider_btn_two_bg_text = '#001d67';
		    }
		    $geoport_slider_btn_two_hover_bg_text = geoport_get_option( 'geoport_slider_btn_two_hover_bg_text' );
		    if (!empty($geoport_slider_btn_two_hover_bg_text)) {
		      $geoport_slider_btn_two_hover_bg_text = $geoport_slider_btn_two_hover_bg_text;
		    } else {
		      $geoport_slider_btn_two_hover_bg_text = '#fff';
		    }


		    $related_products = geoport_get_option( 'related_products' );
		    if($related_products == true ){
				$showhiderlt = 'block';
		    }else{
				$showhiderlt = 'none';		    	
		    }

		    echo "<style>
				/* = Theme Base Color = */
				footer .widget_nav_menu ul li:hover> a,
				.bpost-meta a:hover,
				.bpost-meta ul li i,
				p.logged-in-as a,
				.b-readmore a,
				.b-details-content .the-content a,
				blockquote a, code,
				.rc-post-content h5 a:hover,
				.team-overlay-content h4 a:hover,
				.history-list-content span,
				.b-about-social a,
				.c-form-group i,
				.f-group i,
				p.logged-in-as a {
					color: $base_color;
				}
				sup.meta-featured-post,
				.widget .widget-title span::before,
				.widget .widget-title span,
				.widget_search .ws-input button,
				section.no-results.not-found .search-none-search-bar .ws-input button,
				.bpost-content .wp-block-quote cite::before,
				section.error-area.error-bg .error-content a.btn.orange-btn,
				.bpost-content .b-tag a,
				.comment-form button,
				span.designation:before,
				.team-details-social ul li a,
				.history-list-content span::before,
				.single-history-wrap::after,
				.wp-block-button .wp-block-button__link:not(.has-background),
				.d-post-tag ul li a:hover {
					background-color: $base_color;
				}
				.comment-text .avatar-name span,
				.single-comment a,
				.team-details-content span,
				.team-details-content .info-list ul li i.fa,
				dd a,
				footer.entry-footer span.screen-reader-text, footer.entry-footer a.post-edit-link, .page .bdetails-content ol li a,
				.bpost-navigation .prev-link a:hover h4, .bpost-navigation .next-link a:hover h4 {
					color: $base_color;
				}


				.slider-btn a.btn.red-btn {
					background: $geoport_slider_btn_one_bg !important;
					color: $geoport_slider_btn_one_text !important;
				}
				.slider-btn a.btn.red-btn:hover {
					background: $geoport_slider_btn_one_hover_bg !important;
					color: $geoport_slider_btn_one_hover_text !important;
				}
				.slider-btn a.btn.gray-btn {
					background: $geoport_slider_btn_two_bg !important;
					color: $geoport_slider_btn_two_bg_text !important;
				}
				.slider-btn a.btn.gray-btn:hover {
					background: $geoport_slider_btn_two_hover_bg !important;
					color: $geoport_slider_btn_two_hover_bg_text !important;
				}


				

				p button.btn {
					background: $geoport_page_base_btn;
					color: $geoport_page_base_btn_text;
				}
				p button.btn i{
					color: $geoport_page_base_btn_icon_color;
				}
				p button.btn:hover {
					background: $geoport_page_base_btn_hover_bg;
					color: $geoport_page_base_btn_hover_text;
				}
				p button.btn:hover i{
					color: $geoport_page_base_btn_hover_icon_color;
				}


				.bpost-content h2.post-title {
					color: $geoport_blog_heading_text_color;
				}
				
				.team-active .slick-arrow:hover,
				.pagination li.page-item.active a.page-link,
				.comment-text .avatar-name .comment-reply-link:hover {
					background-color: $base_color;
					border-color: $base_color;
				}

				.pagination li.page-item:hover a.page-link{
					background-color: $base_color;
					border-color: $base_color;
				}
				
				aside.blog-sidebar.sidebar-default .widget.widget_block h2,
				aside.blog-sidebar.sidebar-default .widget.widget_block.widget_search .wp-block-search__label,
				.blog-sidebar.sidebar-default .widget .widget-title h4 {
					color: $geoport_sidebar_widgets_color;
				}
				
				.blog-sidebar.sidebar-default .widget ul li a {
					color: $geoport_sidebar_widgets_text_color;
				}
				.blog-sidebar.sidebar-default .sidebar-social a:hover,
				.blog-sidebar.sidebar-default .widget_tag_cloud a:hover {
					background-color: $base_color;
				}


				.services-sidebar .geoport_download_widget .services-pdf::before{
					background-color:$geoport_brochures_widgets_bg_color;
				}
				.services-sidebar .geoport_download_widget .services-pdf .service-widget-title h2{
					color:$geoport_brochures_widgets_title_color;
				}
				.services-sidebar .geoport_download_widget .services-pdf .service-widget-title span{
					color:$geoport_brochures_widgets_subtitle_color;
				}
				.services-sidebar .geoport_download_widget .services-pdf ul li a{
					background-color:$geoport_brochures_widgets_btnbg_color;
					color:$geoport_brochures_widgets_btntext_color;
				}
				.services-sidebar .geoport_download_widget .services-pdf ul li a i{
					color:$geoport_brochures_widgets_btnicon_color;
				}
				.services-sidebar .geoport_download_widget .services-pdf ul li a i:last-child{
					color:$geoport_brochures_widgets_btnarrow_color;
				}
				.services-sidebar .geoport_download_widget .services-pdf ul li a:hover{
					background-color:$geoport_brochures_widgets_btnhover_color;
					color:$geoport_brochures_widgets_btnhover_text_color;
				}
				.services-sidebar .geoport_download_widget .services-pdf ul li a:hover i{
					color:$geoport_brochures_widgets_btnhover_text_color;
				}

				.services-sidebar .sidebar-quote.blue-bg {
					background-color:$geoport_touch_widgets_bg_color;
				}
				.services-sidebar .sidebar-quote h2 {
					color:$geoport_touch_widgets_title_color;
				}
				.services-sidebar .sidebar-quote.blue-bg P,
				.services-sidebar .sidebar-quote.blue-bg span {
					color:$geoport_touch_widgets_subtitle_color;
				}
				.services-sidebar a.btn.yellow-btn{
					background:$geoport_touch_widgets_btnbg_color;
					color:$geoport_touch_widgets_btntext_color;
				}
				.services-sidebar a.btn.yellow-btn:hover{
					background:$geoport_touch_widgets_btnhover_color;
					color:$geoport_touch_widgets_btnhovertext_color;
				}

				section.related.products {
				    display: $showhiderlt;
				}

				.woocommerce span.onsale, .woocommerce ul.products li.product .onsale {
					background: $shop_base_color;
				}

				.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,
				.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button {
					background: $shop_btnbg_color;
					color: $shop_btn_text_color;
				}

				.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover{
					background: $shop_btnbg_hover_color !important;
					color: $shop_btnbg_hover_text_color !important;
				}

				.woocommerce-info, .woocommerce-message {
					border-color: $shop_base_color;
				}

				.woocommerce .cart_item td a,
				.woocommerce .cart_item a.remove{
					color: $shop_base_color !important;
				}

				a.about_paypal, p.lost_password a, span.posted_in a, .woocommerce-privacy-policy-text a, .woocommerce-info a, .woocommerce-message a, .woocommerce-info::before, .woocommerce-message::before,
				.woocommerce-tabs.wc-tabs-wrapper .comment-form-rating p.stars span a {
					color: $shop_base_color;
				}
				.woocommerce div.product .woocommerce-tabs ul.tabs li.active {
					border-color: $shop_base_color;
				}

				.woocommerce nav.woocommerce-pagination ul li a, 
				.woocommerce nav.woocommerce-pagination ul li span {
					background: $shop_pagination_color;
					color: $shop_pagination_text_color !important;
				}

				.woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current {
					background: $shop_pagination_hover_color;
					color: $shop_pagination_hover_text_color !important;
				}

				.woocommerce nav.woocommerce-pagination ul li span.current {
					background: $shop_pagination_active_color;
					color: $shop_pagination_active_text_color !important;
				}


				.ws-input input:focus {
					outline-color: $base_color;
				}

				.ws-input input:focus {
					border-color: $base_color;
				}
				.widget_recent_entries ul li a:hover,
				.bpost-meta ul li a:hover,
				.widget_recent_comments ul li:hover::before, 
				.widget_recent_entries ul li:hover::before, 
				.widget_categories ul li:hover::before, 
				.widget_nav_menu ul li:hover::before, 
				.widget_archive ul li:hover::before, 
				.widget_pages ul li:hover::before, 
				.widget_meta ul li:hover::before,
				.widget_categories ul li a:hover,
				.blog-sidebar .widget ul li a:hover,
				.widget_archive ul li a:hover,
				.bavatar-info p a:hover,
				.bpost-content h2 a:hover,
				.team-details-content .info-list ul li a:hover,
				.btn.transparent-btn:hover {
					color: $base_color;
				}
		    </style>";

  		}		
	}



	/* =================================================================
    = Theme Preloader Color settings
    ====================================================================*/
	public function Theme_Pageloader_Settings() {

  		if(function_exists( 'geoport_framework_init' ) ) {
  			/* Spinner options */
		    $geoport_preloader_circle_color = geoport_get_option( 'geoport_preloader_circle_color' );
		    if (!empty($geoport_preloader_circle_color)) {
		      $geoport_preloader_circle_color = $geoport_preloader_circle_color;
		    } else {
		      $geoport_preloader_circle_color = 'rgba(0, 0, 0, 0.2)';
		    }

		     $geoport_preloader_circle_spine_color = geoport_get_option( 'geoport_preloader_circle_spine_color' );
		    if (!empty($geoport_preloader_circle_spine_color)) {
		      $geoport_preloader_circle_spine_color = $geoport_preloader_circle_spine_color;
		    } else {
		      $geoport_preloader_circle_spine_color = '#ff5e14';
		    }

		    /* Text options */
		    $preloader_color = geoport_get_option( 'geoport_preloader_color' );
		    if (!empty($preloader_color)) {
		      $preloader_color = $preloader_color;
		    } else {
		      $preloader_color = '#000000';
		    }
		    $geoport_preloader_watermark_color = geoport_get_option( 'geoport_preloader_watermark_color' );
		    if (!empty($geoport_preloader_watermark_color)) {
		      $geoport_preloader_watermark_color = $geoport_preloader_watermark_color;
		    } else {
		      $geoport_preloader_watermark_color = 'rgba(0, 0, 0, 0.2)';
		    }
		    $geoport_preloader_bg_color = geoport_get_option( 'geoport_preloader_bg_color' );
		    if (!empty($geoport_preloader_bg_color)) {
		      $geoport_preloader_bg_color = $geoport_preloader_bg_color;
		    } else {
		      $geoport_preloader_bg_color = '#ffffff';
		    }

		    echo "<style>
				/* = Preloader Color = */
				.ctn-preloader .animation-preloader .spinner {
					border-color: $geoport_preloader_circle_color;
					border-top-color: $geoport_preloader_circle_spine_color;
				}
				.ctn-preloader .loader .loader-section .bg {
		        	background-color: $geoport_preloader_bg_color;
		      	}
		      	.ctn-preloader .animation-preloader .txt-loading .letters-loading {
		      		color: $geoport_preloader_watermark_color;
		      	}
		      	.ctn-preloader .animation-preloader .txt-loading .letters-loading:before {
		        	color: $preloader_color;
		      	}
		    </style>";

  		}		
	}	



	/* =================================================================
    = Theme Scrollup Color settings
    ====================================================================*/
	public function Theme_scrollup_Settings() {

  		if(function_exists( 'geoport_framework_init' ) ) {

  			$geoport_scroll_top_bg_color = geoport_get_option( 'geoport_scroll_top_bg_color' );
		    if (!empty($geoport_scroll_top_bg_color)) {
		      $geoport_scroll_top_bg_color = $geoport_scroll_top_bg_color;
		    } else {
		      $geoport_scroll_top_bg_color = '#39bdb2';
		    }
		    $geoport_scroll_top_font_color = geoport_get_option( 'geoport_scroll_top_font_color' );
		    if (!empty($geoport_scroll_top_font_color)) {
		      $geoport_scroll_top_font_color = $geoport_scroll_top_font_color;
		    } else {
		      $geoport_scroll_top_font_color = '#ffffff';
		    }
		    $geoport_scroll_top_border_radius = geoport_get_option( 'geoport_scroll_top_border_radius' );
		    if (!empty($geoport_scroll_top_border_radius)) {
		      $geoport_scroll_top_border_radius = $geoport_scroll_top_border_radius.'%';
		    } else {
		      $geoport_scroll_top_border_radius = '50'. '%';
		    }


		    echo "<style>
				/* = Scrollup Color = */
				#scroller {
			        color: $geoport_scroll_top_font_color;
			        background-color: $geoport_scroll_top_bg_color;
			        border-radius: $geoport_scroll_top_border_radius;
			    }
		    </style>";

  		}		
	}	




	/* =================================================================
    = Theme Footer Settings
    ====================================================================*/
	public function Theme_Footer_Settings() {

  		if(function_exists( 'geoport_framework_init' ) ) {

			$footer_background_color = geoport_get_option( 'footer_background_color' );
		    if (!empty($footer_background_color)) {
		      $footer_background_color = $footer_background_color;
		    } else {
		      $footer_background_color = '#001447';
		    }

			$ft_fonts_color = geoport_get_option( 'ft_fonts_color' );
		    if (!empty($ft_fonts_color)) {
		      $ft_fonts_color = $ft_fonts_color;
		    } else {
		      $ft_fonts_color = '#ffffff';
		    }

		    $ft_fonts_size = geoport_get_option( 'ft_fonts_size' );
		    if (!empty($ft_fonts_size)) {
		      $ft_fonts_size = $ft_fonts_size;
		    } else {
		      $ft_fonts_size = '34px';
		    }
  			
		    $footer_fonts_color = geoport_get_option( 'footer_fonts_color' );
		    if (!empty($footer_fonts_color)) {
		      $footer_fonts_color = $footer_fonts_color;
		    } else {
		      $footer_fonts_color = '';
		    }

		    $footer_copyright_background_color = geoport_get_option( 'footer_copyright_background_color' );
		    if (!empty($footer_copyright_background_color)) {
		      $footer_copyright_background_color = $footer_copyright_background_color;
		    } else {
		      $footer_copyright_background_color = '#001d67';
		    }

		    $footer_copyright_text_color = geoport_get_option( 'footer_copyright_text_color' );
		    if (!empty($footer_copyright_text_color)) {
		      $footer_copyright_text_color = $footer_copyright_text_color;
		    } else {
		      $footer_copyright_text_color = '#a7b6d3';
		    }

		    $footer_copyright_link_color = geoport_get_option( 'footer_copyright_link_color' );
		    if (!empty($footer_copyright_link_color)) {
		      $footer_copyright_link_color = $footer_copyright_link_color;
		    } else {
		      $footer_copyright_link_color = '#ff5e14';
		    }
		    
		    $footer_copyright_linkhv_color = geoport_get_option( 'footer_copyright_linkhv_color' );
		    if (!empty($footer_copyright_linkhv_color)) {
		      $footer_copyright_linkhv_color = $footer_copyright_linkhv_color;
		    } else {
		      $footer_copyright_linkhv_color = '#ff5e14';
		    }
		   
		    $footer_hover_link_color = geoport_get_option( 'footer_hover_link_color' );
		    if (!empty($footer_hover_link_color)) {
		      $footer_hover_link_color = $footer_hover_link_color;
		    } else {
		      $footer_hover_link_color = '';
		    }

		    // Footer Social
			$footer_left_social_font_color = geoport_get_option( 'footer_left_social_font_color' );
		    if (!empty($footer_left_social_font_color)) {
		      $footer_left_social_font_color = $footer_left_social_font_color;
		    } else {
		      $footer_left_social_font_color = '#ffffff';
		    }

		    $footer_left_social_bg_color = geoport_get_option( 'footer_left_social_bg_color' );
		    if (!empty($footer_left_social_bg_color)) {
		      $footer_left_social_bg_color = $footer_left_social_bg_color;
		    } else {
		      $footer_left_social_bg_color = 'rgb(255, 255, 255, 0.102)';
		    }

		    $footer_left_social_h_font_color = geoport_get_option( 'footer_left_social_h_font_color' );
		    if (!empty($footer_left_social_h_font_color)) {
		      $footer_left_social_h_font_color = $footer_left_social_h_font_color;
		    } else {
		      $footer_left_social_h_font_color = '#ffffff';
		    }

		    $footer_left_social_h_bg_color = geoport_get_option( 'footer_left_social_h_bg_color' );
		    if (!empty($footer_left_social_h_bg_color)) {
		      $footer_left_social_h_bg_color = $footer_left_social_h_bg_color;
		    } else {
		      $footer_left_social_h_bg_color = '#34ccff';
		    }



		    // Footer 2
		    $footer2_background_color = geoport_get_option( 'footer2_background_color' );
		    if (!empty($footer2_background_color)) {
		      $footer2_background_color = $footer2_background_color;
		    } else {
		      $footer2_background_color = '#001447';
		    }

			$ft2_fonts_color = geoport_get_option( 'ft2_fonts_color' );
		    if (!empty($ft2_fonts_color)) {
		      $ft2_fonts_color = $ft2_fonts_color;
		    } else {
		      $ft2_fonts_color = '#ffffff';
		    }

		    $ft2_fonts_size = geoport_get_option( 'ft2_fonts_size' );
		    if (!empty($ft2_fonts_size)) {
		      $ft2_fonts_size = $ft2_fonts_size;
		    } else {
		      $ft2_fonts_size = '34px';
		    }
  			
		    $footer2_fonts_color = geoport_get_option( 'footer2_fonts_color' );
		    if (!empty($footer2_fonts_color)) {
		      $footer2_fonts_color = $footer2_fonts_color;
		    } else {
		      $footer2_fonts_color = '';
		    }

		    $footer2_hover_link_color = geoport_get_option( 'footer2_hover_link_color' );
		    if (!empty($footer2_hover_link_color)) {
		      $footer2_hover_link_color = $footer2_hover_link_color;
		    } else {
		      $footer2_hover_link_color = '';
		    }

		   // Footer Social
			$footer2_left_social_font_color = geoport_get_option( 'footer2_left_social_font_color' );
		   if (!empty($footer2_left_social_font_color)) {
		      $footer2_left_social_font_color = $footer2_left_social_font_color;
		   } else {
		      $footer2_left_social_font_color = '#ffffff';
		   }

		    $footer2_left_social_bg_color = geoport_get_option( 'footer2_left_social_bg_color' );
		    if (!empty($footer2_left_social_bg_color)) {
		      $footer2_left_social_bg_color = $footer2_left_social_bg_color;
		    } else {
		      $footer2_left_social_bg_color = 'rgb(255, 255, 255, 0.102)';
		    }

		    $footer2_left_social_h_font_color = geoport_get_option( 'footer2_left_social_h_font_color' );
		    if (!empty($footer2_left_social_h_font_color)) {
		      $footer2_left_social_h_font_color = $footer2_left_social_h_font_color;
		    } else {
		      $footer2_left_social_h_font_color = '#ffffff';
		    }

		    $footer2_left_social_h_bg_color = geoport_get_option( 'footer2_left_social_h_bg_color' );
		    if (!empty($footer2_left_social_h_bg_color)) {
		      $footer2_left_social_h_bg_color = $footer2_left_social_h_bg_color;
		    } else {
		      $footer2_left_social_h_bg_color = '#34ccff';
		    }

		    echo "<style>
				/* = Footer Color = */
				.footer-bg {
			        color: $footer_fonts_color;
			        background-color: $footer_background_color;
			    }
			    footer .geoport_rp_widget .widget-title h4,
			    .footer-widget-title h4 {
					color: $ft_fonts_color;
					font-size: $ft_fonts_size;
			    }
			    footer .widget_nav_menu ul li:before,
			    .footer-work-hour-content p span,
			    footer .widget_nav_menu ul li a,
			    .footer-work-hour-content p,
			    .footer-work-hour-content a,
			    .footer-work-hour ul li{
			        color: $footer_fonts_color;
			    }
			    footer .widget_nav_menu ul li a:hover,
			    .footer-work-hour-content a:hover{
			        color: $footer_hover_link_color;
			    }

			    .copyright-text {
			    	background-color: $footer_copyright_background_color;
			    }
			    .copyright-text p {
			        color: $footer_copyright_text_color;
			    }
			    .copyright-text p a {
			        color: $footer_copyright_link_color;
			    }
			    .copyright-text p a:hover {
			        color: $footer_copyright_linkhv_color;
			    }

			    /* = Footer Color = */
			    footer .geoport_rp_widget.footer-widget .rc-post-content h5,
			    .footer-text p {
			    	color: $footer_fonts_color;
			    }
			    .footer-social ul li a {
					color: $footer_left_social_font_color;
					background-color: $footer_left_social_bg_color;
			    }
			    .footer-social ul li a:hover {
					color: $footer_left_social_h_font_color;
					background-color: $footer_left_social_h_bg_color;
			    }

			    /* = Footer 2 Color = */
				.footer-bg2 {
			        color: $footer2_fonts_color;
			        background-color: $footer2_background_color;
			    }
			    .footer-bg2 .geoport_rp_widget .widget-title h4,
			    .footer-bg2 .footer-widget-title h4 {
					color: $ft2_fonts_color;
					font-size: $ft2_fonts_size;
			    }
			    .footer-bg2 .widget_nav_menu ul li:before,
			    .footer-bg2 .footer-work-hour-content p span,
			    .footer-bg2 .widget_nav_menu ul li a,
			    .footer-bg2 .footer-work-hour-content p,
			    .footer-bg2 .footer-work-hour-content a,
			    .footer-bg2 .footer-work-hour ul li,
			    .footer-bg2 .footer-text p {
			        color: $footer2_fonts_color;
			    }
			    .footer-bg2 .widget_nav_menu ul li:hover:before,
			    .footer-bg2 .footer-work-hour-content a:hover,
			    .footer-bg2 .widget_nav_menu ul li a:hover {
			        color: $footer2_hover_link_color;
			    }

			    /* = Content Color = */
			    .footer-bg2 .footer-social ul li a {
					color: $footer2_left_social_font_color;
					background-color: $footer2_left_social_bg_color;
			    }
			    .footer-bg2 .footer-social ul li a:hover {
					color: $footer2_left_social_h_font_color;
					background-color: $footer2_left_social_h_bg_color;
			    }

		    </style>";

  		}		
	}	

	
} // end class

$GLOBALS['geoport_master_core'] = new Geoport_Master_Core;

function geoport_master_global_var(){
	global $geoport_master_core;
	return $geoport_master_core;
}