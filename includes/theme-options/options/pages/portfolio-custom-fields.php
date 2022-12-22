<?php 

//adding custom metabox to portfolio custom post

// Gallery metabox
CSF::createMetabox( 'xoon_portfolio_gallery', array(
  'title'     => 'Gallery Images',
  'post_type' => 'xoon-portfolio',
) );

//
// Create a section
CSF::createSection( 'xoon_portfolio_gallery', array(
  'fields' => array(

  // A gallery field
  array(
      'id'    => 'gallery_images',
      'type'  => 'gallery',
      'title' => 'Add Images',
  ),

  )
) );
//portfolio client name
CSF::createMetabox( 'portfolio_meta_info', array(
  'title'     => 'Portfolio Meta Info',
  'post_type' => 'xoon-portfolio',
) );
// Create a section
CSF::createSection('portfolio_meta_info', array(
  'title'  => 'Client Name',
  'fields' => array(

    // A text field
    array(
      'id'    => 'client_name',
      'type'  => 'text',
      'title' => 'Text',
      'default'=>'Brookyn Simmons',
    ),

  )
) );

// Create a section
CSF::createSection('portfolio_meta_info', array(
  'title'  => 'Venu/Location',
  'fields' => array(

    // A text field
    array(
      'id'    => 'venu_name',
      'type'  => 'text',
      'title' => 'Text',
      'default'=>'Leh & Ladakh',
    ),

  )
) );

//Booking Form Short Code
CSF::createMetabox( 'portfolio_booking_form', array(
    'title'     => 'Portfolio Booking Form',
    'post_type' => 'xoon-portfolio',
  ) );
  // Create a section
  CSF::createSection('portfolio_booking_form', array(
    'title'  => 'Form Short Code',
    'fields' => array(
  
      // A text field
      array(
        'id'    => 'booking_form_shortcode',
        'type'  => 'text',
        'title' => 'Short Code',
      ),
  
    )
  ) );

?>