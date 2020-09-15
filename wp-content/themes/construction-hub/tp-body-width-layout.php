<?php

	$construction_hub_theme_lay = get_theme_mod( 'construction_hub_tp_body_layout_settings','Full');
    if($construction_hub_theme_lay == 'Container'){
		$construction_hub_tp_theme_css .='body{';
			$construction_hub_tp_theme_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$construction_hub_tp_theme_css .='}';
		$construction_hub_tp_theme_css .='.page-template-custom-home-page .home-page-header{';
			$construction_hub_tp_theme_css .='width: 97%;';
		$construction_hub_tp_theme_css .='}';
	}else if($construction_hub_theme_lay == 'Container Fluid'){
		$construction_hub_tp_theme_css .='body{';
			$construction_hub_tp_theme_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$construction_hub_tp_theme_css .='}';
	}else if($construction_hub_theme_lay == 'Full'){
		$construction_hub_tp_theme_css .='body{';
			$construction_hub_tp_theme_css .='max-width: 100%;';
		$construction_hub_tp_theme_css .='}';
	}