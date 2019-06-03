<?php

class OSM_StaticMap extends ET_Builder_Module {

	public $slug       = 'osm_static_map';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => 'https://github.com/daday-andry/divi_osm',
		'author'     => 'DADAY Andry',
		'author_uri' => 'https://andrynirina.portfoliobox.net',
	);

	public function init() {
		$this->name = esc_html__( 'OSM static map', 'osm-divi_osm' );
	}

	public function get_fields() {
		return array(
			'title' => array(
				'label'           => esc_html__( 'Title', 'osm-divi_osm' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Content entered here will appear inside the module.', 'osm-divi_osm' ),
				'toggle_slug'     => 'main_content',
			),
		);
	}

	public function render( $attrs, $content = null, $render_slug ) {
		return sprintf( '<h1>%1$s</h1><hr><div id="map" style="height: 440px; border: 1px solid #AAA;"></div>', $this->props['title'] );
	}
}

new OSM_StaticMap;
