<?php  
$videos = array();
if( !empty( $data['video_url'] ) ){
    $videos[] = $data['video_url'];
}
if( !empty( $data['video_url_2'] ) ){
    $videos[] = $data['video_url_2'];
}

if($videos){
?>
<div class="virtual-video-contain">
    <?php foreach( $videos as $video ):
        if( !empty($video) ):
            $ext = pathinfo($video, PATHINFO_EXTENSION); ?>           
            <div class="video-wrapper">    
                <?php if( $ext == 'mp4' ): ?>                
                    <video controls>
                        <source src="<?php echo $video; ?>" type="video/mp4">
                    </video>
                <?php else: ?>
                    <?php $embedUrl = generateVideoEmbedUrl($video);
                    if( !empty($embedUrl) ): ?>
                        <iframe width="955" height="600" src="<?php echo $embedUrl; ?>" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                        </iframe>
                    <?php endif; ?>
                <?php endif; ?>                        
            </div>
        <?php endif; ?>
    <?php endforeach; ?>

</div>
<?php } ?>