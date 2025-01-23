<?php  $location = get_field('property_location');
$key = get_field( 'google_maps_api_key', 'options');
if($location){ ?>
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $key;?>&callback=initMap" async defer></script>
 <div class="property-section property-info__directions" data-section="directions">    
        <?php $location = get_field('property_location'); ?>
        <div class="google-map">
            <div class="marker" id="map" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
        </div>
        <?php if (!empty(get_field('directions_to_property_notes'))) : ?>
            <?php echo get_field('directions_to_property_notes'); ?>
        <?php endif;?>
        <a class="btn beige action-btn secondary-btn" href="https://www.google.com/maps/dir/<?php echo $location['address'] ?>" target="_new" title="Get Directions to this Property">Get Directions to the property</a>
    </div>

    <style>
      #map {
        height: 400px; 
        width: 100%;  
      }
    </style>

    <script>
     // Initialize and add the map
      function initMap() {
        // The location (latitude and longitude)
        const location = { lat: <?php echo $location['lat'];?>, lng: <?php echo $location['lng'];?>};
        
        // The map, centered at the location
        const map = new google.maps.Map(document.getElementById('map'), {
          zoom: 20,
          center: location,
        });
        
        // The marker, positioned at the location
        const marker = new google.maps.Marker({
          position: location,
          map: map,
        });
        
        var markerurl = "<?php echo get_stylesheet_directory_uri();?>/resources/images/map_marker.svg";

        // Add a custom marker
        const customMarker = new google.maps.Marker({
          position: location,
          map: map,
          icon: {
            url: markerurl,
            scaledSize: new google.maps.Size(50, 50),  // Adjust the size as needed
          },
        });

        // Create an InfoWindow
        const infoWindow = new google.maps.InfoWindow({
          content: '<div style="color: black;"><?php echo  str_replace(',','<br>',$location['address']);?></div>',  // Custom tooltip content
        });

        // Add a click event listener to the custom marker to open the InfoWindow
        customMarker.addListener('click', () => {
          infoWindow.open(map, customMarker);
        });
      }
    </script>
<?php } ?>


