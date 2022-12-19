$store_name = $mydecode[$i]->offer_name;
    $coupon_type = $mydecode[$i]->coupon_type;
    $coupon_code = $mydecode[$i]->coupon_code;
    $link = $mydecode[$i]->link;
    $expiry_date = $mydecode[$i]->coupon_expiry;
    if( $coupon_type === "Coupon" ) {
        // Check if already exists
        $get_page = get_page_by_title( $title );
        if ($get_page == NULL){
            // Insert post
            $new_post = array(
                'post_title' => $title,
                'post_content' => $description,
                'post_status' => 'draft',
                'post_author' => 1,
                'post_type' => 'coupon'
            );
            // Insert post
            $post_id = wp_insert_post($new_post);
            // Insert post meta if available  
            add_post_meta( $post_id, 'meta_key', 'meta_value' );  

            // Uncomment to check if meta key is added
            // $get_meta_value = get_post_meta( $post_id, 'meta_key', true );        
            // echo "<pre>";
            // print_r($get_meta_value);
        }
    }else{
        // Update meta value
        update_post_meta($get_page->ID, 'my_key', 'meta_value');

        // Uncomment to check if meta key is added
        // $get_meta_value = get_post_meta( $get_page->ID, 'meta_key', true );        
        // echo "<pre>";
        // print_r($get_meta_value);
    }
