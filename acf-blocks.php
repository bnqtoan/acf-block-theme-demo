<?php

function create_block_acf_demo_block_block_init() {
    register_block_type( __DIR__ . '/blocks/wpe-acf-card' );
}

add_action( 'init', 'create_block_acf_demo_block_block_init' );
