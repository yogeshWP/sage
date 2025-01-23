<?php if($data["floor_plans"]){?>
<div class="floor-plans-info-wrap">
   <?php 
    foreach ($data["floor_plans"] as $floor_plan) :
        $image_id = $floor_plan["image"]["ID"];
        ?>
         <div class="floor-plan-imgwrp">
            <span class="floor-name"><?php echo $floor_plan["label"]; ?></span>
           
                <?php echo wp_get_attachment_image( $image_id, 'large' ); ?>
        </div>
        <?php
    endforeach; ?>
   <div class="floor-plan-info">
      <p>For illustrative purpose only - not to scale The position & size of doors, windows, appliances and other features are approximate only. Denotes restricted head height. © ehouse. Unauthorised reproduction prohibited.</p>
   </div>
</div>
<?php } ?>
<div class="modal fade floorplan-modal-maincls" id="floorplan_images_modal" tabindex="-1" role="dialog" aria-labelledby="virtourLabel" aria-hidden="true">
                <span data-dismiss="modal" aria-label="Close" class="close genericon genericon-close-alt">&#x2715;</span>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-body">
                <div class="section d-flex justify-content-center embed-responsive embed-responsive-16by9">
                    <div id="owl-floorplan-model"class="owl-carousel owl-theme">
                      <?php 
                      foreach ($data["floor_plans"] as $floor_plan) :
                         $image_id = $floor_plan["image"]["ID"];
                         ?>
                         <div class="floor-plan-imgwrp">
                           <span class="floor-name"><?php echo $floor_plan["label"]; ?></span>
                             <?php echo wp_get_attachment_image( $image_id, 'large' ); ?>
                          </div>
                       <?php
                    endforeach; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>