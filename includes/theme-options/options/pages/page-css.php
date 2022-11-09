<?php

/*-----------------------------------
    CUSTOM CSS SECTION
------------------------------------*/
CSF::createSection(
    EGNS_PAGE_META_ID,
    array(
        'title'  => esc_html__('Custom CSS', 'corelaw'),
        'parent' => 'page_meta_option',
        'fields' => array(
            array(
                'type'    => 'subheading',
                'content' => esc_html__('Page Custom Css', 'corelaw'),
            ),
            array(
                'id'       => 'page_css',
                'type'     => 'code_editor',
                'desc'     => esc_html__('Write custom css here with css selector. this css will be applied in this page.', 'corelaw'),
                'settings' => array(
                    'mode'        => 'css',
                    'theme'       => 'dracula',
                    'tabSize'     => 4,
                    'smartIndent' => true,
                    'autocorrect' => true,
                ),
            ),
        )
    )
);
