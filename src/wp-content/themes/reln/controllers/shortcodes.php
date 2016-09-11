<?php
class TBK_Shortcodes extends Base_Factory {
	function __construct() {
		if ( function_exists( 'vc_map' ) ) {
			$this->custom_bake();
			$dir = get_stylesheet_directory() . '/views/vc-templates';
			vc_set_shortcodes_templates_dir( $dir );
		}
		add_action( 'after_setup_theme', array( &$this, 'setup_shortcodes' ), 100 );
	}
	public function setup_shortcodes() {
		$this->register( 'hours', false );
		$this->register( 'phone', false );
		$this->register( 'email', false );
		$this->register( 'address', false );
		
		$this->register( 'form-sample', false );
		$this->register( 'frontend-tool', false );
		$this->register( 'security-monitor-navbar', true );
		$this->register( 'security-monitor-content-list', true ); 
		//styling elements
		$this->register( 'style-guide', array(
			'category' => 'tbk styles',
		) );
		$this->register( 'wptest-io', array(
			'name' => 'wptest.io Formatting',
			'category' => 'tbk styles',
		) );
		
		$this->register( 'hero-banner', array(
			'show_settings_on_create' => true,
			'params' => array(
				array(
					'heading' => 'Image',
					'param_name' => 'image',
					'type' => 'attach_image',
				),
				array(
					'type' => 'textfield',
					'heading' => 'Heading',
					'param_name' => 'heading',
				),
                array(
					'type' => 'textfield',
					'heading' => 'Copy',
					'param_name' => 'copy',
				),
			),
		));
		
		 $this->register( 'product-feature', array(
			'show_settings_on_create' => true,
			'params' => array(
				array(
					'heading' => 'Background Image',
					'param_name' => 'bg_image',
					'type' => 'attach_image',
				),
				array(
					'heading' => 'Product Image',
					'param_name' => 'product_image',
					'type' => 'attach_image',
				),
				array(
					'type' => 'textfield',
					'heading' => 'Heading',
					'param_name' => 'heading',
				),
                array(
					'type' => 'textfield',
					'heading' => 'Copy',
					'param_name' => 'copy',
				),
				array(
					'type' => 'textfield',
					'heading' => 'Classes',
					'param_name' => 'classes',
				),
			),
		));
		
		$this->register( 'product-solution', array(
			'show_settings_on_create' => true,
			'params' => array(				
				array(
					'heading' => 'Image',
					'param_name' => 'image',
					'type' => 'attach_image',
				),
				array(
					'type' => 'textfield',
					'heading' => 'Heading',
					'param_name' => 'heading',
				),
                array(
					'type' => 'textfield',
					'heading' => 'Link',
					'param_name' => 'link',
				),
				array(
					'type' => 'textfield',
					'heading' => 'Classes',
					'param_name' => 'classes',
				),
			),
		));
		
		$this->register( 'product-advantage', array(
			'show_settings_on_create' => true,
			'params' => array(				
				array(
					'heading' => 'Image',
					'param_name' => 'image',
					'type' => 'attach_image',
				),
				array(
					'type' => 'textfield',
					'heading' => 'Heading',
					'param_name' => 'heading',
				),
                array(
					'type' => 'textfield',
					'heading' => 'Copy',
					'param_name' => 'copy',
				),
				array(
					'type' => 'textfield',
					'heading' => 'Classes',
					'param_name' => 'classes',
				),
			),
		));
		
		$this->register( 'product-info', array(
			'show_settings_on_create' => true,
			'params' => array(
				array(
					'heading' => 'Image',
					'param_name' => 'image',
					'type' => 'attach_image',
				),
				array(
					'type' => 'textfield',
					'heading' => 'Heading',
					'param_name' => 'heading',
				),
                array(
					'type' => 'textfield',
					'heading' => 'Copy',
					'param_name' => 'copy',
				),
				array(
					'type' => 'textfield',
					'heading' => 'Classes',
					'param_name' => 'classes',
				),
			),
		));
		
		$this->register( 'reln-way-content', array(
			'show_settings_on_create' => true,
			'params' => array(
				array(
					'heading' => 'Image',
					'param_name' => 'image',
					'type' => 'attach_image',
				),
				array(
					'type' => 'textfield',
					'heading' => 'Heading',
					'param_name' => 'heading',
				),
				array(
					'heading' => 'Logo',
					'param_name' => 'logo',
					'type' => 'attach_image',
				),
                array(
					'type' => 'textfield',
					'heading' => 'Copy',
					'param_name' => 'copy',
				),
			),
		));
		
		$this->register( 'checklist-item', array(
			'show_settings_on_create' => true,
			'params' => array(
				array(
					'heading' => 'Image',
					'param_name' => 'image',
					'type' => 'attach_image',
				),
				array(
					'type' => 'textfield',
					'heading' => 'List Item',
					'param_name' => 'list_item_copy',
				),
			),
		));
		
		$this->register( 'reln-cta-button', array(
			'show_settings_on_create' => true,
			'params' => array(				
				array(
					'type' => 'textfield',
					'heading' => 'Icon Class',
					'param_name' => 'icon_class',
				),
				array(
					'type' => 'textfield',
					'heading' => 'Link',
					'param_name' => 'link',
				),
				array(
					'type' => 'textfield',
					'heading' => 'Text',
					'param_name' => 'button_text',
				),
			),
		));
		
		$button_params = array(
			array(
				'type' => 'vc_link',
				'heading' => 'URL (Link)',
				'param_name' => 'link',
				'description' => 'Button link.',
			),
			array(
				'type' => 'textfield',
				'heading' => 'Text on the button',
				'holder' => 'button',
				'class' => 'vc_btn',
				'param_name' => 'title',
				'value' => 'Text on the button',
				'description' => 'Text on the button.',
			),
		);
		$this->register( 'image-bar', array(
			'show_settings_on_create' => true,
			'params' => array(
				array(
					'heading' => 'Images',
					'param_name' => 'images',
					'type' => 'attach_images',
				),
			),
		) );
		$this->register( 'button', array(
			'name' => 'Button',
			'base' => 'button',
			'description' => 'Eye catching button',
			'params' => array_merge( $button_params, array(
				array(
					'type' => 'textfield',
					'heading' => 'Leading Text',
					'param_name' => 'leading_title',
					'description' => 'Text on the button (smaller).',
				),
				array(
					'type' => 'dropdown',
					'heading' => 'Color',
					'param_name' => 'color',
					'value' => array(
						'blue',
						'yellow',
					),
					'description' => 'Button color',
				),
			) ),
		) );
        	
		$this->register( 'basic-container', array(
			'name' => 'Basic Container',
			'base' => 'basic_container',
			'as_parent' => array( 'except' => '' ),
			'is_container' => true,
			'content_element' => true,
			'show_settings_on_create' => false,
			'params' => array(
				array(
					'type' => 'textfield',
					'heading' => 'Classes',
					'param_name' => 'classes',
				),
			),
			'js_view' => 'VcColumnView',
		) );
        
		$this->register( 'basic-container-narrow', array(
			'name' => 'Basic Container (Narrow)',
			'base' => 'basic_container_narrow',
			'as_parent' => array( 'except' => '' ),
			'is_container' => true,
			'content_element' => true,
			'show_settings_on_create' => false,
			'params' => array(
				array(
					'type' => 'textfield',
					'heading' => 'Classes',
					'param_name' => 'classes',
				),
			),
			'js_view' => 'VcColumnView',
		) );
        
        $this->register( 'features-container', array(
			'name' => 'Features Container',
			'base' => 'features_container',
			'as_parent' => array( 'only' => 'product-feature' ),
			'is_container' => true,
			'content_element' => true,
			'show_settings_on_create' => true,
			'params' => array(
				array(
					'type' => 'textfield',
					'heading' => 'Classes',
					'param_name' => 'classes',
				),
				array(
					'type' => 'textfield',
					'heading' => 'Heading',
					'param_name' => 'heading',
				),
			),
			'js_view' => 'VcColumnView',
		) );
		
		$this->register( 'product-solution-container', array(
			'name' => 'Product Solution Container',
			'base' => 'product_solution_container',
			'as_parent' => array( 'only' => 'product-solution' ),
			'is_container' => true,
			'content_element' => true,
			'show_settings_on_create' => true,
			'params' => array(
				array(
					'type' => 'textfield',
					'heading' => 'Classes',
					'param_name' => 'classes',
				),
				array(
					'type' => 'textfield',
					'heading' => 'Heading',
					'param_name' => 'heading',
				),
			),
			'js_view' => 'VcColumnView',
		) );
		
		$this->register( 'product-advantages-container', array(
			'name' => 'Product Advantages Container',
			'base' => 'product_advantages_container',
			'as_parent' => array( 'only' => 'product-advantage' ),
			'is_container' => true,
			'content_element' => true,
			'show_settings_on_create' => true,
			'params' => array(
				array(
					'type' => 'textfield',
					'heading' => 'Classes',
					'param_name' => 'classes',
				),
				array(
					'type' => 'textfield',
					'heading' => 'Heading',
					'param_name' => 'heading',
				),
				array(
					'type' => 'textfield',
					'heading' => 'Tagline',
					'param_name' => 'tagline',
				),
				array(
					'heading' => 'Background Image',
					'param_name' => 'image',
					'type' => 'attach_images',
				),
			),
			'js_view' => 'VcColumnView',
		) );
		
		$this->register( 'checklist-cta-container', array(
			'name' => 'Checklist CTA Container',
			'base' => 'checklist_cta_container',
			'as_parent' => array( 'only' => 'checklist-item' ),
			'is_container' => true,
			'content_element' => true,
			'show_settings_on_create' => true,
			'params' => array(
				array(
					'type' => 'textfield',
					'heading' => 'Tagline',
					'param_name' => 'tagline',
				),
				array(
					'type' => 'textfield',
					'heading' => 'CTA Button Text',
					'param_name' => 'button_text',
				),
				array(
					'heading' => 'Image Left',
					'param_name' => 'image_left',
					'type' => 'attach_images',
				),
				array(
					'heading' => 'Image Right',
					'param_name' => 'image_right',
					'type' => 'attach_images',
				),
			),
			'js_view' => 'VcColumnView',
		) );
	}
	public function register( $tag, $vc_map = array() ) {
		add_shortcode( $tag, array( &$this, strtolower( str_replace( '-', '_', $tag ) ) ) );
		if ( function_exists( 'vc_map' ) && false !== $vc_map ) {
			$vc_map = shortcode_atts( array(
				'name' => humanize( $tag ),
				'base' => $tag,
				'category' => 'tbk',
				'show_settings_on_create' => false,
				'description' => null,
				'params' => array(),
				'js_view' => null,
				'as_parent' => null,
				'as_child' => null,
				'content_element' => null,
				'custom_markup' => null,
				'default_content' => null,
				'is_container' => false,
			), $vc_map );
			$vc_map = apply_filters( 'register_' . $tag, $vc_map );
			vc_map( $vc_map );
		}
	}
	function custom_bake() {
		//customize existing vc elements
		vc_remove_element( 'vc_button' );
	}
	
	function hero_banner( $atts ) {
		$atts = shortcode_atts( array(
			'image' => null,
			'heading' => null,
			'copy' => null,
		), $atts );

		if( ! empty( $atts['image'] ) ) {
			$atts['image'] = TBK_Theme::get_attachment_image_url( $atts['image'], 'hero-banner' );
		}

		return TBK_Render::shortcode_view( 'hero-banner', $atts );
	}
	
	function product_feature( $atts ) {
		$atts = shortcode_atts( array(
			'bg_image' => null,
			'product_image' => null,
			'heading' => null,
			'copy' => null,
			'classes' => null,
		), $atts );

		if( ! empty( $atts['bg_image'] ) ) {
			$atts['bg_image'] = TBK_Theme::get_attachment_image_url( $atts['bg_image'], 'product-feature' );
		}
		
		if( ! empty( $atts['product_image'] ) ) {			
			$atts['product_image'] = TBK_Theme::get_attachment_image_url( $atts['product_image'], 'product-feature' );
		}

		return TBK_Render::shortcode_view( 'product-feature', $atts );
		
	}
	
	function reln_way_content( $atts ) {
		$atts = shortcode_atts( array(
			'image' => null,
			'logo' => null,
			'heading' => null,
			'copy' => null,
		), $atts );

		if( ! empty( $atts['image'] ) ) {
			$atts['image'] = TBK_Theme::get_attachment_image_url( $atts['image'], 'reln-way-content' );
		}
		
		if( ! empty( $atts['logo'] ) ) {			
			$atts['logo'] = TBK_Theme::get_attachment_image_url( $atts['logo'], 'reln-way-content' );
		}

		return TBK_Render::shortcode_view( 'reln-way-content', $atts );
		
	}
	
	function checklist_item( $atts ) {
		$atts = shortcode_atts( array(
			'image' => null,
			'list_item_copy' => null,
		), $atts );

		if( ! empty( $atts['image'] ) ) {
			$atts['image'] = TBK_Theme::get_attachment_image_url( $atts['image'], 'checklist-item' );
		}

		return TBK_Render::shortcode_view( 'checklist-item', $atts );
		
	}
	
	function reln_cta_button( $atts ) {
		$atts = shortcode_atts( array(
			'icon_class' => null,
			'button_text' => null,
			'link' => null,
		), $atts );

		return TBK_Render::shortcode_view( 'reln-cta-button', $atts );
	}
	
	function product_solution( $atts ) {
		$atts = shortcode_atts( array(
			'image' => null,			
			'heading' => null,
			'link' => null,
			'classes' => null,
		), $atts );

		if( ! empty( $atts['image'] ) ) {
			$atts['image'] = TBK_Theme::get_attachment_image_url( $atts['image'], 'product-solution' );
		}		

		return TBK_Render::shortcode_view( 'product-solution', $atts );
		
	}
	
	function product_advantage( $atts ) {
		$atts = shortcode_atts( array(
			'image' => null,			
			'heading' => null,
			'copy' => null,
			'classes' => null,
		), $atts );

		if( ! empty( $atts['image'] ) ) {
			$atts['image'] = TBK_Theme::get_attachment_image_url( $atts['image'], 'product-advantage' );
		}		

		return TBK_Render::shortcode_view( 'product-advantage', $atts );
		
	}
	
	function product_info( $atts ) {
		$atts = shortcode_atts( array(
			'image' => null,
			'heading' => null,
			'copy' => null,
			'classes' => null,
		), $atts );

		if( ! empty( $atts['image'] ) ) {
			$atts['image'] = TBK_Theme::get_attachment_image_url( $atts['image'], 'product-info' );
		}

		return TBK_Render::shortcode_view( 'product-info', $atts );
	}
	
	function phone() {
		$phone = get_field( 'phone', 'options' );
		return '<a href="tel:' . $phone . '">' . $phone . '</a>';
	}
	function email() {
		$email = get_field( 'email', 'options' );
		return '<a href="' . antispambot( $email, 1 ) . '">' . antispambot( $email ) . '</a>';
	}
	function address() {
		return wpautop( get_field( 'address', 'options' ) );
	}
	function twitter() {
		return get_field( 'twitter', 'options' );
	}
	function facebook() {
		return get_field( 'facebook', 'options' );
	}
	function youtube() {
		return get_field( 'youtube', 'options' );
	}
	function hours() {
		return wpautop( get_field( 'hours', 'options' ) );
	}
	function style_guide() {
		return TBK_Render::shortcode_view( 'style-guide' );
	}
	function wptest_io() {
		return TBK_Render::shortcode_view( 'wptest-io.php' );
	}
	function button( $atts ) {
		$atts = shortcode_atts( array(
			'color' => 'blue',
			'link' => null,
			'title' => 'Learn More',
			'leading_title' => null,
		), $atts );
		if( ! empty($atts['link'])) {
			$atts['link'] = vc_build_link( $atts['link'] );
		}
		return TBK_Render::shortcode_view( 'button', $atts );
	}
	function image_bar( $atts ) {
		$atts = shortcode_atts( array(
			'images' => null,
		), $atts );
		if ( ! empty( $atts['images'] ) ) {
			$atts['images'] = explode( ',', $atts['images'] );
			return TBK_Render::shortcode_view( 'images-bar', $atts );
		}
		return false;
	}
    
    
    
	function frontend_tool() {
		return TBK_Render::shortcode_view( 'frontend-tool' );
	}    
}

TBK_Shortcodes::instantiate();

function encode_array_for_sc( $array ) {
	return urlencode( serialize( $array ) );
}
function decode_array_for_sc( $array ) {
	return unserialize( urldecode( $array ) );
}

if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
	class TBKBakeryContainer extends WPBakeryShortCodesContainer {
		protected function content( $atts, $content = null, $view = null ) {
			extract( $atts );
			$output = false;
			if ( ! empty( $view ) ) {
				ob_start();
				include( locate_template( 'views/shortcodes/' . $view . '.php' ) );
				$output = ob_get_clean();
				$output = str_replace( '{content}', wpb_js_remove_wpautop( $content ), $output );
				//$output = $this->startRow( $el_position ) . $output . $this->endRow( $el_position );
			}
			return $output;
		}
	}
	/**
	 * Class WPBakeryShortCode_Basic_Container : A basic VC Container for containing things within
	 * a bootstrap .container.
	 */
	class WPBakeryShortCode_Basic_Container extends TBKBakeryContainer {
		protected function content( $atts = null, $content = null, $view = 'basic-container' ) {
			$atts = shortcode_atts( array(
				'classes' => null,
			), $atts );
			return parent::content( $atts, $content, $view );
		}
	}
	/**
	 * Class WPBakeryShortCode_Basic_Container_Narrow : A basic VC Container for containing things within
	 * a bootstrap .container but narrower.
	 */
	class WPBakeryShortCode_Basic_Container_Narrow extends TBKBakeryContainer {
		protected function content( $atts = null, $content = null, $view = 'basic-container-narrow' ) {
			$atts = shortcode_atts( array(
				'classes' => null,
			), $atts );
			return parent::content( $atts, $content, $view );
		}
	}
    
	class WPBakeryShortCode_Features_Container extends TBKBakeryContainer {
		protected function content( $atts = null, $content = null, $view = 'features-container' ) {
			$atts = shortcode_atts( array(
				'classes' => null,
				'heading' => null,
			), $atts );
			return parent::content( $atts, $content, $view );
		}
	}
	
	class WPBakeryShortCode_Product_Solution_Container extends TBKBakeryContainer {
		protected function content( $atts = null, $content = null, $view = 'product-solution-container' ) {
			$atts = shortcode_atts( array(
				'classes' => null,
				'heading' => null,
			), $atts );
			return parent::content( $atts, $content, $view );
		}
	}
	
	class WPBakeryShortCode_Product_Advantages_Container extends TBKBakeryContainer {
		protected function content( $atts = null, $content = null, $view = 'product-advantages-container' ) {
			$atts = shortcode_atts( array(
				'classes' => null,
				'heading' => null,
				'tagline' => null,
				'image' => null,
			), $atts );
			
			if( ! empty( $atts['image'] ) ) {
				$atts['image'] = TBK_Theme::get_attachment_image_url( $atts['image'], 'product-advantages-container' );
			}
			
			return parent::content( $atts, $content, $view );
		}
	}
	
	class WPBakeryShortCode_Checklist_Cta_Container extends TBKBakeryContainer {
		protected function content( $atts = null, $content = null, $view = 'checklist-cta-container' ) {
			$atts = shortcode_atts( array(
				'tagline' => null,
				'button_text' => null,
				'image_left' => null,
				'image_right' => null,
			), $atts );
			
			if( ! empty( $atts['image_left'] ) ) {
				$atts['image_left'] = TBK_Theme::get_attachment_image_url( $atts['image_left'], 'checklist-cta-container' );
			}
			
			if( ! empty( $atts['image_right'] ) ) {
				$atts['image_right'] = TBK_Theme::get_attachment_image_url( $atts['image_right'], 'checklist-cta-container' );
			}
			
			return parent::content( $atts, $content, $view );
		}
	}	
}