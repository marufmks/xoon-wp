<?php

//adding custom metabox to service custom post

// Service Icon
CSF::createMetabox( 'xoon_service_icon', array(
    'title'     => 'Service Icon',
    'post_type' => 'xoon-service',
) );

//
// Create a section
CSF::createSection( 'xoon_service_icon', array(
    'fields' => array(

    // A Icon field
    array(
        'id'    => 'svg_icon',
        'type'  => 'media',
        'title' => 'Add SVG',
    ),

    )
) );
// Gallery metabox
CSF::createMetabox( 'xoon_service_gallery', array(
    'title'     => 'Gallery Images',
    'post_type' => 'xoon-service',
) );

//
// Create a section
CSF::createSection( 'xoon_service_gallery', array(
    'fields' => array(

    // A gallery field
    array(
        'id'    => 'gallery_images',
        'type'  => 'gallery',
        'title' => 'Add Images',
    ),

    )
) );

//reuest Button metabox
CSF::createMetabox( 'service_request_button', array(
    'title'     => 'Request Button',
    'post_type' => 'xoon-service',
) );
  // Create a section
  CSF::createSection('service_request_button', array(
    'title'  => 'Button Text',
    'fields' => array(

      // A text field
      array(
        'id'    => 'req_button_text',
        'type'  => 'text',
        'title' => 'Text',
        'default'=>'Get A Request',
      ),

    )
  ) );
  // Create a section
  CSF::createSection('service_request_button', array(
    'title'  => 'Button Url',
    'fields' => array(

      // A url field
      array(
        'id'    => 'req_button_url',
        'type'  => 'link',
        'title' => 'Url',
      ),

    )
  ) );
//Intro Banner
CSF::createMetabox( 'intro_banner_section', array(
    'title'     => 'Intro Banner',
    'post_type' => 'xoon-service',
) );
  // Create a section
  CSF::createSection('intro_banner_section', array(
    'title'  => 'Banner Title',
    'fields' => array(

      // A text field
      array(
        'id'    => 'banner_title_text',
        'type'  => 'text',
        'title' => 'Text',
        'default'=>'DO YOU HAVE A PROJECT IN YOUR MIND',
      ),

    )
  ) );
  // Create a section
  CSF::createSection('intro_banner_section', array(
    'title'  => 'Banner Image',
    'fields' => array(

      // A url field
      array(
        'id'    => 'Intro_banner_image',
        'type'  => 'media',
        'title' => 'Image',
      ),

    )
  ) );

   // Create a section
   CSF::createSection('intro_banner_section', array(
    'title'  => 'Banner Button Text',
    'fields' => array(

      // A text field
      array(
        'id'    => 'banner_button_text',
        'type'  => 'text',
        'title' => 'Text',
      ),

    )
  ) );
   // Create a section
   CSF::createSection('intro_banner_section', array(
    'title'  => 'Banner Button url',
    'fields' => array(

      // A text field
      array(
        'id'    => 'banner_button_url',
        'type'  => 'link',
        'title' => 'Url',
      ),

    )
  ) );

  //Why choose Us
CSF::createMetabox( 'why_choose_us_section', array(
  'title'     => 'Why Choose Us',
  'post_type' => 'xoon-service',
) );
// Create a section
CSF::createSection('why_choose_us_section', array(
  'title'  => 'Subtitle',
  'fields' => array(

    // A text field
    array(
      'id'    => 'why_choose_us_subtitle',
      'type'  => 'text',
      'title' => 'Text',
      'default'=>'Why choose Us',
    ),

  )
) );
// Create a section
CSF::createSection('why_choose_us_section', array(
  'title'  => 'Title',
  'fields' => array(

    // A text field
    array(
      'id'    => 'why_choose_us_title',
      'type'  => 'text',
      'title' => 'Text',
      'default'=>'Create Your Own Photo Masterpiece...',
    ),

  )
) );
// Create a section
CSF::createSection('why_choose_us_section', array(
  'title'  => 'Description',
  'fields' => array(

    // A text field
    array(
      'id'    => 'why_choose_us_description',
      'type'  => 'textarea',
      'title' => 'Textarea',
      'default'=>'Lorem ipsum dolor sit amet, magna habemus ius ad, qui minim voluptaria in.
       Ad mei modus quodsi complectitur, postea verterem persecuti cu est, sea epicuri intellegam.',
    ),

  )
) );
// Create a section
CSF::createSection('why_choose_us_section', array(
  'title'  => 'Choose Us Info Items',
  'fields' => array(

    array(
      'id'     => 'choose_us_repeater',
      'type'   => 'repeater',
      'title'  => 'Repeater',
      'fields' => array(
    
        array(
          'id'    => 'choose_us_items',
          'type'  => 'text',
          'title' => 'Text',
        ),
    
      ),
    ),

  )
) );

CSF::createSection('why_choose_us_section', array(
  'title'  => 'Choose Us Image',
  'fields' => array(

    // A url field
    array(
      'id'    => 'choose_us_image',
      'type'  => 'media',
      'title' => 'Image',
    ),

  )
) );

   // Create a section
   CSF::createSection('why_choose_us_section', array(
    'title'  => 'Choose Us Button Text',
    'fields' => array(

      // A text field
      array(
        'id'    => 'choose_us_button_text',
        'type'  => 'text',
        'title' => 'Text',
        'default'=>'Read More',
      ),

    )
  ) );
   // Create a section
   CSF::createSection('why_choose_us_section', array(
    'title'  => 'Choose Us Button url',
    'fields' => array(

      // A text field
      array(
        'id'    => 'choose_us_button_url',
        'type'  => 'link',
        'title' => 'Url',
      ),

    )
  ) );

//Booking Form Short Code
CSF::createMetabox( 'service_booking_form', array(
  'title'     => 'Service Booking Form',
  'post_type' => 'xoon-service',
) );
// Create a section
CSF::createSection('service_booking_form', array(
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