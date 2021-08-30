<?php
function Image($data){
    $images = $data['features']['images'];
    if( !empty( $images ) ): ?>
    <section class="contener">
    <h2>Images</h2>
    <div class="separator"></div>
        <div id="lightgallery">
            <?php foreach( $images as $image ): ?>
                <a data-src="<?php echo esc_url($image['url']); ?>" data-lg-size="1600-2400">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </a>
            <?php endforeach; ?>
        </div>
    </section>
    <script type="text/javascript">
    lightGallery(document.getElementById('lightgallery'), {
        speed: 500,
        plugins: [lgZoom, lgThumbnail]
    });
    const openGallery = () => {
        const firstImage = document.querySelector("#lightgallery a:first-child > img");
        firstImage.click();
    };
    </script>
    <?php endif; 
}?>

