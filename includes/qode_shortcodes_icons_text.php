<?php
$full_path = __FILE__;
$path = explode('wp-content', $full_path);
require_once( $path[0] . '/wp-load.php' );
?>

<div id="qode_shortcode_form_wrapper">
    <form id="qode_shortcode_form" name="qode_shortcode_form" method="post" action="">
        <div class="input">
            <label>Box type</label>
            <select name="box_type" id="box_type">
                <option value="normal">Normal</option>
                <option value="icon_in_a_box'">Icon in a box</option>
            </select>
        </div>
        <div class="input">
            <label>Box Border</label>
            <select name="box_border" id="box_border">
                <option value="yes">Yes</option>
                <option value="no'">No</option>
            </select>
        </div>
        <div class="input">
            <label>Box Border Color</label>
            <div class="colorSelector"><div style=""></div></div>
            <input name="box_border_color" id="box_border_color" value="" maxlength="10" size="10" />
        </div>
        <div class="input">
            <label>Box Backround Color (only for icon in a box type)</label>
            <div class="colorSelector"><div style=""></div></div>
            <input name="box_background_color" id="box_background_color" value="" maxlength="10" size="10" />
        </div>
        <div class="input">
            <div class="input">
                <label>Icon</label>
                <select id="icon" name="icon">
                    <option value=""></option>
                    <?php
                    $fa_icons = getFontAwesomeIconArray();
                    print_r($fa_icons);
                    foreach ($fa_icons as $key => $value) {
                        ?>
                        <option value="<?php echo $key; ?>"><?php echo $key; ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <div class="input">
                <label>Icon Type</label>
                <select name="icon_type" id="icon_type">
                    <option value="normal">Normal</option>
                    <option value="circle">Circle</option>
                    <option value="square">Square</option>
                </select>
            </div>
            <label>Icon Size</label>
            <select name="icon_size" id="icon_size">
                <option value="icon-large">Tiny</option>
                <option value="icon-2x">Small</option>
                <option value="icon-3x">Medium</option>
                <option value="icon-4x">Large</option>
            </select>
        </div>
        <div class="input">
            <label>Custom Icon Size (px)</label>
            <input name="custom_icon_size" id="custom_icon_size" value="" maxlength="10" size="10" />
        </div>

        <div class="input">
            <label>Image</label>
            <input id="image" type="text" name="image" class="popup_image" id="image" value="" size="55" />
            <input class="upload_button" type="button" value="Upload file" id="popup_image_button">
        </div>
        <div class="input">
            <label>Icon Position (only for normal box type)</label>
            <select name="icon_position" id="icon_position">
                <option value="top">Top</option>
                <option value="left">Left</option>
            </select>
        </div>
        <div class="input">
            <label>Icon Border</label>
            <select name="icon_border" id="icon_border">
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
        </div>
        <div class="input">
            <label>Icon Border Color (Only for Square type)</label>
            <div class="colorSelector"><div style=""></div></div>
            <input type="text" name="icon_border_color" id="icon_border_color" value="" size="12" maxlength="12" />
        </div>
        <div class="input">
            <label>Icon Color</label>
            <div class="colorSelector"><div style=""></div></div>
            <input name="icon_color" id="icon_color" value="" maxlength="12" size="12" />
        </div>
        <div class="input">
            <label>Icon Background Color (only for square and circle icon type)</label>
            <div class="colorSelector"><div style=""></div></div>
            <input name="icon_background_color" id="icon_background_color" value="" maxlength="12" size="12" />
        </div>
        <div class="input">
            <label>Title</label>
            <input name="title" id="title" value="" maxlength="100" size="12" />
        </div>
        <div class="input">
            <label>Text</label>
            <input name="text" id="text" value="" />
        </div>
        <div class="input">
            <label>Title color</label>
            <div class="colorSelector"><div style=""></div></div>
            <input name="title_color" id="title_color" value="" maxlength="100" size="12" />
        </div>
        <div class="input">
            <label>Text color</label>
            <div class="colorSelector"><div style=""></div></div>
            <input name="text_color" id="text_color" value="" />
        </div>
        <div class="input">
            <input type="submit" name="Insert" id="qode_insert_shortcode_button" value="Submit" />
        </div>
    </form>

</div>