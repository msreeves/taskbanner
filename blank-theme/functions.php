<?php

require_once('inc/controllers/cpt.php');

	register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary menu', 'blank-theme' ),
				'footer'  => esc_html__( 'Secondary menu', 'blank-theme' ),
			)
		);


