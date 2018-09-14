<?php
/*
Plugin Name: Ví dụ Meta Box
Author: Thạch Phạm
Description: Hướng dẫn tạo meta box
Author URI: https://thachpham.com
*/

/**
 * Khai báo callback cho thachpham_meta_box()
 * @param $post là đối tượng WP_Post để nhận thông tin của post
 **/
function thachpham_thongtin_output($post)
{
    $concentration = get_post_meta($post->ID, 'concentration', true);
    $ingredient = get_post_meta($post->ID, 'ingredient', true);
    $origin = get_post_meta($post->ID, 'origin', true);
    // Tạo trường Link Download
    ?>
    <table class="tbl-ttsp" width="100%">
        <tr>
            <td style="width:15%"><label for="concentration"><?php _e("Nồng độ", "yokae") ?>: </label></td>
            <td style="width:70%"><input type="text" id="concentration" name="concentration"
                       value="<?php echo esc_attr($concentration) ?>"/></td>
        </tr>
        <tr>
            <td style="width:15%"><label for="ingredient"><?php _e("Thành phần", "yokae") ?>: </label></td>
            <td style="width:70%"><input type="text" id="ingredient" name="ingredient" value="<?php echo esc_attr($ingredient) ?>"/></td>
        </tr>
        <tr>
            <td style="width:15%"><label for="origin"><?php _e("Email", "yokae") ?>: </label></td>
            <td style="width:70%"><input type="text" id="origin" name="origin" value="<?php echo esc_attr($origin) ?>"/></td>
        </tr>
    </table>
    <style>.tbl-ttsp input{width: 100%;}</style>
    <?php
}

function thachpham_meta_box()
{
    add_meta_box('thong-tin', 'Thông tin sản phẩm', 'thachpham_thongtin_output', 'sanpham');
}

add_action('add_meta_boxes', 'thachpham_meta_box');

/**
 * Lưu dữ liệu meta box khi nhập vào
 * @param post_id là ID của post hiện tại
 **/
function thachpham_thongtin_save($post_id)
{
    if (isset($_POST['concentration'])) {
        $concentration = sanitize_text_field($_POST['concentration']);
        update_post_meta($post_id, 'concentration', $concentration);
    }
    if (isset($_POST['ingredient'])) {
        $ingredient = sanitize_text_field($_POST['ingredient']);
        update_post_meta($post_id, 'ingredient', $ingredient);
    }
    if (isset($_POST['origin'])) {
        $origin = sanitize_text_field($_POST['origin']);
        update_post_meta($post_id, 'origin', $origin);
    }
}

add_action('save_post', 'thachpham_thongtin_save');