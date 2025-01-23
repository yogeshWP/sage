<div class="book-consl-sec">
    <div class="container">
        <div class="book-consl-box">
            <h2><?php echo get_sub_field('ocs_title');?></h2>
            <p><?php echo get_sub_field('ocs_excerpt');?></p>
            <div class="btnwrp">
                <?php $ocs_button_link = get_sub_field('ocs_button_link'); 
                if($ocs_button_link){?>
                <a href="<?php echo $ocs_button_link['url'];?>" class="action-btn"><?php echo $ocs_button_link['title'];?></a>
                 <?php } ?>
                <p class="smltxt"><?php echo get_sub_field('ocs_button_side_text');?></p>
            </div>
        </div>
    </div>
</div>