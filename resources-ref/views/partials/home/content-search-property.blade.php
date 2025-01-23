<?php global $post;
$pagename='';
if ($post) {
     $pagename=$post->post_name;
}
?>
 <section class="srch-prosale-sec">
     <div class="container">
        <div class="srch-pro-sale-wrp">
           <div class="srh-pro-heading">
              <h3 class="h4">Search Properties for sale</h3>
              <?php if($pagename!='property-search'){?>
              <a href="/property-search" class="view-all-btn">View All Properties</a>
           <?php } ?>
           </div>
           <div class="search-pro-form">
              <form action="/property-search"  method="get">
                 <div class="input-wrapper">
                    <label>Location</label>
                    <div class="location-input-wrap">
                       <input type="text" name="postcode"value="<?php echo !empty($_GET['postcode'])?$_GET['postcode']:''; ?>">
                       <div class="select-wrapper">
                          <select name="radius">
                           <option <?php echo ( !empty($_GET['radius']) && $_GET['radius'] == "5" )?'selected':''; ?> value="5">+5 miles</option>
                           <option <?php echo ( !empty($_GET['radius']) && $_GET['radius'] == "10" )?'selected':''; ?> value="10">+10 miles</option>
                           <option <?php echo ( !empty($_GET['radius']) && $_GET['radius'] == "15" )?'selected':''; ?> value="15">+15 miles</option>
                           <option <?php echo ( !empty($_GET['radius']) && $_GET['radius'] == "20" )?'selected':''; ?> value="20">+20 miles</option>
                           <option <?php echo ( !empty($_GET['radius']) && $_GET['radius'] == "30" )?'selected':''; ?> value="30">+30 miles</option>
                           <option <?php echo ( !empty($_GET['radius']) && $_GET['radius'] == "40" )?'selected':''; ?> value="40">+40 miles</option>
                           <option <?php echo ( !empty($_GET['radius']) && $_GET['radius'] == "50" )?'selected':''; ?> value="50">+50 miles</option>
                          </select>
                       </div>
                    </div>
                 </div>
                 <div class="input-wrapper">
                    <label>Minimum Price</label>
                    <div class="select-wrapper">
                       <select name="min-budget" placeholder="Min. Budget">
                        <option value="">No Minimum</option>
                        <option <?php echo ( !empty($_GET['min-budget']) && $_GET['min-budget'] == "800000" )?'selected':''; ?> value="800000">£800,000</option>
                        <option <?php echo ( !empty($_GET['min-budget']) && $_GET['min-budget'] == "1000000" )?'selected':''; ?> value="1000000">£1,000,000</option>
                        <option <?php echo ( !empty($_GET['min-budget']) && $_GET['min-budget'] == "1500000" )?'selected':''; ?> value="1500000">£1,500,000</option>
                        <option <?php echo ( !empty($_GET['min-budget']) && $_GET['min-budget'] == "2000000" )?'selected':''; ?> value="2000000">£2,000,000</option>
                        <option <?php echo ( !empty($_GET['min-budget']) && $_GET['min-budget'] == "3000000" )?'selected':''; ?> value="3000000">£3,000,000</option>
                        <option <?php echo ( !empty($_GET['min-budget']) && $_GET['min-budget'] == "4000000" )?'selected':''; ?> value="4000000">£4,000,000</option>
                       </select>
                    </div>
                 </div>
                 <div class="input-wrapper">
                    <label>Minimum Bedrooms</label>
                    <div class="select-wrapper">
                       <select name="min-bedrooms" placeholder="Min. Bedrooms">
                        <option value="">No Minimum</option>
                        <option <?php echo ( !empty($_GET['min-bedrooms']) && $_GET['min-bedrooms'] == "1" )?'selected':''; ?> value="1">1 Bed+</option>
                        <option <?php echo ( !empty($_GET['min-bedrooms']) && $_GET['min-bedrooms'] == "2" )?'selected':''; ?> value="2">2 Bed+</option>
                        <option <?php echo ( !empty($_GET['min-bedrooms']) && $_GET['min-bedrooms'] == "3" )?'selected':''; ?> value="3">3 Bed+</option>
                        <option <?php echo ( !empty($_GET['min-bedrooms']) && $_GET['min-bedrooms'] == "4" )?'selected':''; ?> value="4">4 Bed+</option>
                        <option <?php echo ( !empty($_GET['min-bedrooms']) && $_GET['min-bedrooms'] == "5" )?'selected':''; ?> value="5">5 Bed+</option>
                        <option <?php echo ( !empty($_GET['min-bedrooms']) && $_GET['min-bedrooms'] == "6" )?'selected':''; ?> value="6">6 Bed+</option>
                        <option <?php echo ( !empty($_GET['min-bedrooms']) && $_GET['min-bedrooms'] == "7" )?'selected':''; ?> value="7">7 Bed+</option>
                       </select>
                    </div>
                 </div>
                 <div class="search-btn-wrp">
                    <button class="action-btn secondary-btn" type="submit">Search</button>
                 </div>
              </form>
           </div>
        </div>
     </div>
  </section>