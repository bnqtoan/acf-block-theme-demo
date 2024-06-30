<?php
$title = get_field('title') ?? 'Trust & Co.';
$description = get_field('description') ?? 'Fill out the form and the algorithm will offer the right team of experts';
$image = get_field('image') ?? 'https://images.unsplash.com/photo-1601049676869-702ea24cfd58?q=80&w=2073&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D';

$allowedBlocks = ['core/paragraph', 'core/heading'];

$template = [
    ['core/heading', ["placeholder"=> "This is the heading"]],
    ['core/paragraph', ["placeholder" =>  "Lorem Ipsum..."]],
];

?>
<section>
    <div class="container">
        <div class="card">
            <div class="card-inner" style="--clr:#fff;">
                <div class="box">
                    <div class="imgBox">
                        <img src="<?php echo $image; ?>"
                             alt="Trust & Co.">
                    </div>
                    <div class="icon">
                        <a href="#" class="iconBox"> <span class="material-symbols-outlined">
                arrow_outward
              </span></a>
                    </div>
                </div>
            </div>
            <div class="content">
                <InnerBlocks
                        template="<?php echo esc_attr( wp_json_encode( $template ) ) ?>"
                        allowedBlocks="<?php echo esc_attr( wp_json_encode( $allowedBlocks ) )  ?>"
                />
                <ul>
                    <li style="--clr-tag:#d3b19a;" class="branding">branding</li>
                    <li style="--clr-tag:#70b3b1;" class="packaging">packaging</li>
                </ul>
            </div>
        </div>
    </div>
</section>