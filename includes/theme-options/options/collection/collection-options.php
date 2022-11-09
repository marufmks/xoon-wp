<?php

/*-----------------------------------------
	CONTROL CORE CLASSES FOR AVOID ERRORS
------------------------------------------*/
if (class_exists('CSF')) {

  /*-----------------------------------
	    PAGE METABOX SECTION
	------------------------------------*/
  CSF::createMetabox(
    EGNS_META_ID,
    array(
      'title'           => esc_html__('NFT Collection Settings', 'astrip'),
      'post_type'       => 'nft-collection',
      'context'         => 'normal',
      'priority'        => 'high',
      'show_restore'    => false,
      'enqueue_webfont' => true,
      'async_webfont'   => false,
      'output_css'      => false,
      'nav'             => 'normal',
      'theme'           => 'light',
      'id'              => 'nft_collection_meta_option',
    )
  );


  /*-----------------------------------
		REQUIRE META FILES
	------------------------------------*/

  CSF::createSection(
    EGNS_META_ID,
    array(
      //'title'  => esc_html__( 'General Information', 'xoon' ),
      'parent' => 'nft_collection_meta_option',
      'fields' => array(
        array(
          'id'      => 'collection_price',
          'type'    => 'text',
          'title'   => esc_html__('Price', 'xoon'),
        ),
        array(
          'id'    => 'collection_gallery_image',
          'type'  => 'gallery',
          'title'   => esc_html__('Collection Gallery Image', 'xoon'),
        ),
        array(
          'id'     => 'feature_list',
          'type'   => 'repeater',
          'title'   => esc_html__('Feature List', 'xoon'),
          'fields' => array(
            array(
              'id'    => 'feature_list_title',
              'type'  => 'text',
              'title'   => esc_html__('Title', 'xoon'),
            ),
          ),
        ),
        array(
          'id'     => 'opt-fieldset-1',
          'type'   => 'fieldset',
          'title'  => 'Fieldset',
          'fields' => array(
            array(
              'id'     => 'opt-repeater-1',
              'type'   => 'repeater',
              'title'  => 'Repeater',
              'fields' => array(

                array(
                  'id'          => 'opt-select-14',
                  'type'        => 'select',
                  'title'       => 'Selec with CPT (custom post type) category',
                  'placeholder' => 'Select a category',
                  'options'     => 'categories',
                  'query_args'  => array(
                    'taxonomy'  => 'collection-category',
                  ),
                ),

                array(
                  'id'    => 'opt-text',
                  'type'  => 'text',
                  'title' => 'Text'
                ),

              ),
            ),
          ),
        ),
        array(
          'id'            => 'nft_collection_button',
          'type'          => 'tabbed',
          'title'         => 'Button',
          'tabs'          => array(
            array(
              'title'     => esc_html__('OpenSea', 'xoon'),
              'icon'      => 'fa fa-link',
              'fields'    => array(
                array(
                  'id'    => 'nft_button_name',
                  'type'  => 'text',
                  'title' => esc_html__('OpenSea Name', 'xoon'),
                  'default' => 'OpenSea'
                ),
                array(
                  'id'    => 'nft_button_url',
                  'type'  => 'text',
                  'title' => esc_html__('Button URL', 'xoon'),
                ),
                array(
                  'id'         => 'url_target_enable_disable',
                  'type'       => 'button_set',
                  'title'      => 'URL Target Blank',
                  'options'    => array(
                    'enabled'  => 'Enabled',
                    'disabled' => 'Disabled',
                  ),
                  'default'    => 'enabled'
                ),
              )
            ),
            array(
              'title'     => esc_html__('Discord', 'xoon'),
              'icon'      => 'fa fa-link',
              'fields'    => array(
                array(
                  'id'    => 'nft_button_name_2',
                  'type'  => 'text',
                  'title' => esc_html__('Discord Name', 'xoon'),
                  'default' => 'Discord'
                ),
                array(
                  'id'    => 'nft_button_url_2',
                  'type'  => 'text',
                  'title' => esc_html__('Button URL', 'xoon'),
                ),
                array(
                  'id'         => 'url_target_enable_disable_2',
                  'type'       => 'button_set',
                  'title'      => 'URL Target Blank',
                  'options'    => array(
                    'enabled'  => 'Enabled',
                    'disabled' => 'Disabled',
                  ),
                  'default'    => 'enabled'
                ),
              )
            ),
            array(
              'title'     => esc_html__('Custom', 'xoon'),
              'icon'      => 'fa fa-link',
              'fields'    => array(
                array(
                  'id'    => 'nft_button_name_3',
                  'type'  => 'text',
                  'title' => esc_html__('Custom Name', 'xoon'),
                ),
                array(
                  'id'    => 'nft_button_url_3',
                  'type'  => 'text',
                  'title' => esc_html__('Button URL', 'xoon'),
                ),
                array(
                  'id'         => 'url_target_enable_disable_3',
                  'type'       => 'button_set',
                  'title'      => 'URL Target Blank',
                  'options'    => array(
                    'enabled'  => 'Enabled',
                    'disabled' => 'Disabled',
                  ),
                  'default'    => 'enabled'
                ),
              )
            ),
          )
        ),
      ),
    )
  );
}
