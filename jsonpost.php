<?php /* Template Name: CustomPageT1 */ ?>
<?php

$json = get_template_directory_uri()."/lokapp.json";
//print_r($json);
//die();
$response = file_get_contents($json);
$mydecode = json_decode($response);

for ($i = 0; $i < 7; $i++) {
    $title = $mydecode->articles[$i]->title;
    $description = $mydecode->articles[$i]->content;
    $category = $mydecode->articles[$i]->category;
    if ($category === "articles") {
        // Check if already exists
        $get_page = get_the_title($title);
        if ($get_page == NULL) {
            // Insert post
            $new_post = array(
                'post_title' => $title,
                'post_content' => $description,
                'post_status' => 'draft',
                'post_author' => 1,
                'post_type' => 'post'
            );
            // Insert post
            $post_id = wp_insert_post($new_post);
            // Insert post meta if available  
            add_post_meta($post_id, 'meta_key', 'meta_value');

            // Uncomment to check if meta key is added
            // $get_meta_value = get_post_meta( $post_id, 'meta_key', true );        
            // echo "<pre>";
            // print_r($get_meta_value);
        }
    } else {
        // Update meta value
        update_post_meta($get_page->ID, 'my_key', 'meta_value');

        // Uncomment to check if meta key is added
        // $get_meta_value = get_post_meta( $get_page->ID, 'meta_key', true );        
        // echo "<pre>";
        // print_r($get_meta_value);
    }

    }

?>
