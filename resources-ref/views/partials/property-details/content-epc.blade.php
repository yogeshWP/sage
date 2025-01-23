<div class="epc-wrp">
    <?php if(!empty($data["epc"])){
        foreach( $data["epc"] as $image ){
            echo wp_get_attachment_image( $image['ID'], 'full' ); 
        }        
     } ?>
  </div>