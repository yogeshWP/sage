<?php 
$addtitle='';
if($data["property_location"]){

          if(isset($data["property_location"]["city"]) && isset($data["property_location"]["post_code"])){
             $addtitle=(($data["property_location"]["city"]) )?$data["property_location"]["city"].' | '. $data["property_location"]["post_code"]:'';
          }else{

             $addtitle=$data["property_location"]["city"];
          }

    }
$agent = get_property_agent(get_the_id());
?>
        <div class="rightwrp ">
        <div class="sidebar">
          <div class="mob-contactmodal-btn">
              modal
          </div>
          <div class="for-sale">
            <div class="for-sale-acc">
              <?php $status = property_status( $data["marketing_type"], $data["sale_status"] ); 
           if($status!=''){ ?><span class="<?php echo $status['value'];?>"><?php echo $status['label'];?></span><?php } ?>
              <h3><?php echo $addtitle;?></h3>
              <p><?php echo get_the_title();?></p>
            </div>
            <div class="forsale-acc-cnt">
          <?php $qualifier = get_field('qualifier');
          if ($qualifier) :
          //add space between captial letters and remove underscores
          $qualifier = preg_replace('/(?<!\s)(?<!^)(?=[A-Z])/', ' ', $qualifier);
          $qualifier = str_replace('_', ' ', $qualifier);
          ?>
          <div class="qualifier" style="text-transform: capitalize;"><strong><?php echo $qualifier; ?></strong></div>
          <?php endif; ?>
              <div class="pricetext">£<?php echo number_format( $data["price"]); ?></div>
              <ul>
                <li><img src="<?php echo get_stylesheet_directory_uri();?>/resources/images/bed.svg" /> <?php echo number_format( $data["bedrooms"]); ?> Bedrooms</li>
                <li><img src="<?php echo get_stylesheet_directory_uri();?>/resources/images/bath.svg" /> <?php echo number_format( $data["bathrooms"]); ?> Bathrooms</li>
              </ul>
            </div>
          </div>
        </div>
        <div  id="contactpopup" tabindex="-1" role="dialog" aria-labelledby="contactpopupLabel" aria-hidden="true" >
          <div class="modal-dialog" role="document">
            <div class="modal-content">
             <button type="button" class="close pro-close" data-dismiss="modal" aria-label="Close">
            </button>
            <div class="int-block">
              <h4>Interested in this property?</h4>
              <p>Contact our <?php echo get_branch_name(get_the_id()); ?> partner</p>
              <ul>
                <li>
                  <a href="tel:<?php echo $agent->data['telephone_number'] ?>"><img src="<?php echo get_stylesheet_directory_uri();?>/resources/images/phone.svg" /><?php echo $agent->data['telephone_number'] ?></a>
                </li>
                <li>
                  <a href="mailto:<?php echo $agent->data['email_address']; ?>"><img src="<?php echo get_stylesheet_directory_uri();?>/resources/images/email.svg" /><?php echo $agent->data['email_address']; ?></a>
                </li>
              </ul>
              <div class="reqbtn">
                <a href="#" class="action-btn secondary-btn">Request a Viewing</a>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    

  