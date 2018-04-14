<?php
/**
 * Created by PhpStorm.
 * User: tnthien
 * Date: 4/14/2018
 * Time: 10:57 PM
 */
function sunset_tooltip($atts, $content = null){

    //get the attributes
    $atts = shortcode_atts(
        array(
            'placement' => 'top',
            'title' => '',
        ),
        $atts,
        'tootip'
    );

}

add_shortcode('tooltip','sunset_tooltip');

/*
 * [tooltip placement="top" title="This is the title"]This is the content[/tooltip]
 */