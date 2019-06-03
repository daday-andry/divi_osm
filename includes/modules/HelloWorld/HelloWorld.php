<?php

class OSM_HelloWorld extends ET_Builder_Module {

	public $slug       = 'osm_hello_world';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => 'https://github.com/daday-andry/divi_osm',
		'author'     => 'DADAY Andry',
		'author_uri' => 'https://andrynirina.portfoliobox.net',
	);

	public function init() {
		$this->name = esc_html__( 'Hello World', 'osm-divi_osm' );
	}

	public function get_fields() {
		return array(
			'content' => array(
				'label'           => esc_html__( 'Content', 'osm-divi_osm' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Content entered here will appear inside the module.', 'osm-divi_osm' ),
				'toggle_slug'     => 'main_content',
			),
		);
	}

	public function render( $attrs, $content = null, $render_slug ) {
		return sprintf( '<h1>%1$s</h1>', $this->props['content'] );
	}
}

new OSM_HelloWorld;
