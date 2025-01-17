<?php

/**
* Partial of the appearance settings
*
*
*
* @link       https://pdfcrowd.com/save-as-image-wordpress-plugin/
* @since      1.0.0
*
* @package    Save_As_Image_Pdfcrowd
* @subpackage Save_As_Image_Pdfcrowd/admin/partials
*/

function unfiltered_html_notice($option) {
    if(!current_user_can('unfiltered_html')) {
        echo '<div style="margin: 1rem 0;"><span class="notice notice-info" style="padding: 0.5rem">Only users with <code>unfiltered_html</code> capability can edit the '
             . esc_html($option) . ' option.</span></div>';
    }
}

?>

<div id="save-as-image-pdfcrowd-appearance">
  <div id="save-as-image-pdfcrowd-look"
       class="save-as-image-pdfcrowd-category-wrap">
    <div class="save-as-image-pdfcrowd-heading-wrap save-as-image-pdfcrowd-basic-heading-wrap">
      <h2>Button Look</h2>
    </div>

    <table class="form-table">
        <tbody>
          <tr class="save-as-image-pdfcrowd-set-group"
              data-default="1">
                <th>
                  Show Button on
                </th>
                <td>
                  <input
                    type="checkbox"
                    id="save-as-image-pdfcrowd-button-on-home"
                    name="save-as-image-pdfcrowd[button_on_home]"
                    value="1" <?php checked( $button_on_home, 1 ); ?>
                    autocomplete="off" />
                    <label for="save-as-image-pdfcrowd-button-on-home">
                        Home page<br/>
                    </label>
                    <input type="checkbox" id="save-as-image-pdfcrowd-button-on-front" name="save-as-image-pdfcrowd[button_on_front]" value="1" <?php checked( $button_on_front, 1 ); ?> autocomplete="off" />
                    <label for="save-as-image-pdfcrowd-button-on-front">
                        Front page<br/>
                    </label>
                    <input type="checkbox" id="save-as-image-pdfcrowd-button-on-pages" name="save-as-image-pdfcrowd[button_on_pages]" value="1" <?php checked( $button_on_pages, 1 ); ?> autocomplete="off" />
                    <label for="save-as-image-pdfcrowd-button-on-pages">
                        Other pages<br/>
                    </label>
                    <input type="checkbox" id="save-as-image-pdfcrowd-button-on-posts" name="save-as-image-pdfcrowd[button_on_posts]" value="1" <?php checked( $button_on_posts, 1 ); ?> autocomplete="off" />
                    <label for="save-as-image-pdfcrowd-button-on-posts">
                        Posts<br/>
                    </label>
                    <input type="checkbox" id="save-as-image-pdfcrowd-button-on-categories" name="save-as-image-pdfcrowd[button_on_categories]" value="1" <?php checked( $button_on_categories, 1 ); ?> autocomplete="off" />
                    <label for="save-as-image-pdfcrowd-button-on-categories">
                        Category pages<br/>
                    </label>
                    <input type="checkbox" id="save-as-image-pdfcrowd-button-on-taxonomies" name="save-as-image-pdfcrowd[button_on_taxonomies]" value="1" <?php checked( $button_on_taxonomies, 1 ); ?> autocomplete="off" />
                    <label for="save-as-image-pdfcrowd-button-on-taxonomies">
                        Taxonomy pages<br/>
                    </label>
                    <div class="save-as-image-pdfcrowd-description">
                      <div>
    Choose where you want the button to appear automatically.
</div> <div>
    You can also manually add the
    <code>[save_as_image_pdfcrowd]</code>
    shortcode to your page to display the button, see
    <a href="https://pdfcrowd.com/save-as-image-wordpress-plugin/#shortcodes">
        details,
    </a>
    or add
    <code>create_save_as_image_pdfcrowd_button</code>
    the function call to your PHP code, see
    <a href="https://pdfcrowd.com/save-as-image-wordpress-plugin/#function">
        details.
    </a>
</div>
                    </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
              data-default="1">
                <th>
                  <label for="save-as-image-pdfcrowd-button-hidden">
                      Hide Button in Output Image
                  </label>
                </th>
                <td>
                  <input
                    type="checkbox"
                    id="save-as-image-pdfcrowd-button-hidden"
                    name="save-as-image-pdfcrowd[button_hidden]" value="1" <?php checked( $button_hidden, 1 ); ?> autocomplete="off" />
                    <div class="save-as-image-pdfcrowd-description">
                        Choose whether to show the button in the output the image.
                    </div>
                    <div class='save-as-image-pdfcrowd-devi'>
                        Shortcode and function parameter: "<strong>button_hidden</strong>"<br>Possible values: 0, 1
                    </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group"
              data-default="image-text">
                <th scope="row">
                  Button Display Format
                </th>
                <td>
                    <div class='save-as-image-pdfcrowd-devi'>
                        Shortcode and function parameter: "<strong>button_format</strong>"<br>Possible values: "image-text", "text-image", "image", "text"
                    </div>
                    <fieldset>
                        <legend class="screen-reader-text">
                            <span>Button Display Format</span>
                        </legend>
                        <label for="save-as-image-pdfcrowd-bdf-image-text">
                          <input type="radio"
                                 id="save-as-image-pdfcrowd-bdf-image-text"
                                 name="save-as-image-pdfcrowd[button_format]"
                                 value="image-text" <?php checked( $button_format, "image-text" ); ?> autocomplete="off" />
                            Icon on the left and text
                        </label><br>
                        <label for="save-as-image-pdfcrowd-bdf-text-image">
                          <input type="radio"
                                 id="save-as-image-pdfcrowd-bdf-text-image"
                                 name="save-as-image-pdfcrowd[button_format]"
                                 value="text-image" <?php checked( $button_format, "text-image" ); ?> autocomplete="off" />
                            Text on the left and icon
                        </label><br>
                        <label for="save-as-image-pdfcrowd-bdf-image">
                          <input type="radio"
                                 id="save-as-image-pdfcrowd-bdf-image"
                                 name="save-as-image-pdfcrowd[button_format]"
                                 value="image" <?php checked( $button_format, "image" ); ?> autocomplete="off" />
                            Icon only
                        </label><br>
                        <label for="save-as-image-pdfcrowd-bdf-text">
                          <input type="radio"
                                 id="save-as-image-pdfcrowd-bdf-text"
                                 name="save-as-image-pdfcrowd[button_format]"
                                 value="text" <?php checked( $button_format, "text" ); ?> autocomplete="off" />
                            Text only
                        </label><br>
                    </fieldset>
                    <div class="save-as-image-pdfcrowd-description">
                      Choose the arrangement of icons and text within the button.
                    </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group"
              data-default="Save as Image">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-button-text">
                      Button Text
                    </label>
                </th>
                <td>
                  <input
                    type="text"
                    class="regular-text"
                    id="save-as-image-pdfcrowd-button-text"
                    name="save-as-image-pdfcrowd[button_text]"
                    data-empty-is-not-def="1"
                    value="<?php esc_attr_e($button_text); ?>"
                    placeholder="<?php esc_attr_e('Your text', $this->plugin_name); ?>" 
                    autocomplete="off" />
                    <div class="save-as-image-pdfcrowd-description">
                      The text to be displayed on the button.
                    </div>
                    <div class='save-as-image-pdfcrowd-devi'>
                        Shortcode and function parameter: "<strong>button_text</strong>"
                    </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
              data-default="">
                <th scope="row">
                  Button Text Translation
                </th>
                <td>
                  <div class="save-as-image-pdfcrowd-devi save-as-image-pdfcrowd-mb-2">
                    Shortcode and function parameter: "<strong>button_translation</strong>"<br>Possible values: "", "auto", "domain"
                  </div>

                    <fieldset>
                        <legend class="screen-reader-text">
                            <span>Button Translation</span>
                        </legend>
                        <label for="save-as-image-pdfcrowd-button-translation-">
                            <input type="radio" id="save-as-image-pdfcrowd-button-translation-" name="save-as-image-pdfcrowd[button_translation]" value="" <?php checked($button_translation, ""); ?> autocomplete="off" />
                            No translation
                              </label>
                        <br>
                        <label for="save-as-image-pdfcrowd-button-translation-auto">
                            <input type="radio" id="save-as-image-pdfcrowd-button-translation-auto" name="save-as-image-pdfcrowd[button_translation]" value="auto" <?php checked($button_translation, "auto"); ?> autocomplete="off" />
                            Automatic - look up in your internationalization files
                              </label>
                        <br>
                        <label for="save-as-image-pdfcrowd-button-translation-domain">
                            <input type="radio" id="save-as-image-pdfcrowd-button-translation-domain" name="save-as-image-pdfcrowd[button_translation]" value="domain" <?php checked($button_translation, "domain"); ?> autocomplete="off" />
                            Look up in the <a href="https://developer.wordpress.org/themes/functionality/internationalization/#text-domain">text domain</a>
                              <input
                                id="save-as-image-pdfcrowd-button-translation-domain"
                                type="text"
                                class="regular-text save-as-image-pdfcrowd-text-for-radio"
                                name="save-as-image-pdfcrowd[button_translation_domain]"
                                data-parent-opt="#save-as-image-pdfcrowd-button-translation-domain"
                                value="<?php esc_attr_e($button_translation_domain); ?>" placeholder="<?php esc_attr_e('default, the slug of your theme or plugin', $this->plugin_name);?>" autocomplete="off" />
                              </label>
                              <div class='save-as-image-pdfcrowd-devi save-as-image-pdfcrowd-nested-dsc'>
                                Shortcode and function parameter: "<strong>button_translation_domain</strong>"<br>Possible values: "default", the slug of your theme or plugin
                              </div>
                        <br>
                    </fieldset>
                  <div class="save-as-image-pdfcrowd-description">
                    Specify whether to translate the button text.
                  </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group"
              data-default="image1.svg">
                <th scope="row">
                  Button Image
                </th>
                <td id='save-as-image-pdfcrowd-images'>
                  <div class="save-as-image-pdfcrowd-devi save-as-image-pdfcrowd-mb-2">
                    Shortcode and function parameter: "<strong>button_image</strong>"<br>Possible values: "image1.svg", "image2.svg", "image3.svg", "image4.svg", "pdfcrowd.svg", "custom_image", "custom_html"
                  </div>
                    <fieldset>
                        <legend class="screen-reader-text">
                            <span>Button Image</span>
                        </legend>
                        <label for="save-as-image-pdfcrowd-image1-svg">
                            <input type="radio" id="save-as-image-pdfcrowd-image1-svg" name="save-as-image-pdfcrowd[button_image]" value="image1.svg" <?php checked( $button_image, "image1.svg" ); ?> autocomplete="off" />
                            <img src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzBweCIgaGVpZ2h0PSIzMHB4IiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHJlY3QgeD0iMS4zODA4IiB5PSIxLjI1NTIiIHdpZHRoPSIyNy42MTUiIGhlaWdodD0iMjYuMTA5IiBmaWxsPSIjZmZmIiBzdHJva2Utd2lkdGg9IjAiLz48cGF0aCBkPSJNMjkuOTI4LDI4LjU4M0gwVjBoMjkuOTI4VjI4LjU4MyBNMi44NzYsMjUuNzA3ICBIMjcuMDVWMi44NzZIMi44NzYgTTguMjE3LDcuMTA2YzEuNjExLDAsMi45MTYsMS4yMTYsMi45MTYsMi43MTZjMCwxLjUtMS4zMDUsMi43MTctMi45MTYsMi43MTdjLTEuNjEsMC0yLjkxNC0xLjIxNi0yLjkxNC0yLjcxNyAgQzUuMzAzLDguMzIyLDYuNjA3LDcuMTA2LDguMjE3LDcuMTA2eiBNNC4zNzQsMjEuMDIxbDQuMzItMy4yNGwyLjE5OSwxLjYwNWw4LjcxNS02LjQ1bDMuMjQsMi40MDhsMi4xOTgtMS42MDR2Ny4yODFINC4zNzR6IiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGZpbGw9IiM1QjJEOEQiIGZpbGwtcnVsZT0iZXZlbm9kZCIgb3BhY2l0eT0iLjg5OCIvPjwvc3ZnPgo='/>
                        </label>&nbsp;&nbsp;&nbsp;
                        <label for="save-as-image-pdfcrowd-image2-svg">
                            <input type="radio" id="save-as-image-pdfcrowd-image2-svg" name="save-as-image-pdfcrowd[button_image]" value="image2.svg" <?php checked( $button_image, "image2.svg" ); ?> autocomplete="off" />
                            <img src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzBweCIgaGVpZ2h0PSIzMHB4IiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHJlY3QgeD0iMS4zODA4IiB5PSIxLjI1NTIiIHdpZHRoPSIyNy42MTUiIGhlaWdodD0iMjYuMTA5IiBmaWxsPSIjZmZmIiBzdHJva2Utd2lkdGg9IjAiLz48cGF0aCBkPSJtMS42MjI1IDI0LjM0OXM0LjIxMzQtNS45OTc5IDUuODczMy02LjA2MzZjMS40OTA3LTAuMDU5MDMgMS43OCAxLjY1MDMgNC4xMDczIDEuNDE2NCAyLjI3MDktMC4yMjgzMSAxLjg4MDUtNS4yNTczIDUuNjUyOC01LjMwMTcgMy43NzI0LTAuMDQ0MzkgMy4zOTc3IDMuNjA1MyA0LjgzNzYgMy42MTE4IDAuOTY5MTggMC4wMDQ0IDUuNzQ4My0zLjEwMTYgNS43NDgzLTMuMTAxNmwwLjA4ODc2IDguNjg0MnoiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZmlsbD0iIzAwNjQwMCIgZmlsbC1ydWxlPSJldmVub2RkIiBvcGFjaXR5PSIuODk4IiBzdHJva2Utd2lkdGg9IjEuMDg5MyIvPjxwYXRoIGQ9Im05Ljg4MDkgNS4wMjAyYzIuMTM4MyAwIDMuODcwNSAxLjYxNCAzLjg3MDUgMy42MDUgMCAxLjk5MS0xLjczMjIgMy42MDYzLTMuODcwNSAzLjYwNjMtMi4xMzcgMC0zLjg2NzgtMS42MTQtMy44Njc4LTMuNjA2MyAwLTEuOTkxIDEuNzMwOC0zLjYwNSAzLjg2NzgtMy42MDV6IiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGZpbGw9IiNmZmE1MDAiIGZpbGwtcnVsZT0iZXZlbm9kZCIgb3BhY2l0eT0iLjg5OCIgc3Ryb2tlLXdpZHRoPSIxLjMyNzMiLz48cGF0aCBkPSJtMS45NTI3IDI0LjcxOXMyLjAzMTgtMS43MjA1IDMuMjg0MS0xLjk1MjdjMS41NDk1LTAuMjg3MyAzLjA4NTkgMC43MTk5NiA0LjY1OTggMC43OTg4MiAxLjI3MzcgMC4wNjM4MiAyLjU0MTQtMC4yNzY4MyAzLjgxNjYtMC4yNjYyNyAxLjIwMjcgMC4wMSAyLjM5NTcgMC40MDQ0NSAzLjU5NDcgMC4zMTA2NSAxLjM1MjEtMC4xMDU3NiAyLjYxMjktMC43NDc2OSAzLjk0OTctMC45NzYzNCAwLjkwODI2LTAuMTU1MzUgMS44Mzg2LTAuMzkxNDMgMi43NTE1LTAuMjY2MjggMS4xNzg1IDAuMTYxNTYgNC4wODI5IDEuNDY0NSA0LjA4MjkgMS40NjQ1bDFlLTYgMi45NzM0LTI2LjAwNi0wLjMxMDY1eiIgZmlsbD0iIzQwZTBkMCIvPjxwYXRoIGQ9Ik0gMjkuOTI4LDI4LjU4MyBIIDAgViAwIEggMjkuOTI4IFYgMjguNTgzIE0gMi44NzYsMjUuNzA3IEggMjcuMDUgViAyLjg3NiBIIDIuODc2IiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGZpbGw9IiM1YjJkOGQiIGZpbGwtcnVsZT0iZXZlbm9kZCIvPjwvc3ZnPgo='/>
                        </label>&nbsp;&nbsp;&nbsp;
                        <label for="save-as-image-pdfcrowd-image3-svg">
                            <input type="radio" id="save-as-image-pdfcrowd-image3-svg" name="save-as-image-pdfcrowd[button_image]" value="image3.svg" <?php checked( $button_image, "image3.svg" ); ?> autocomplete="off" />
                            <img src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzBweCIgaGVpZ2h0PSIzMHB4IiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGcgZmlsbD0iI2ZmZiIgc3Ryb2tlLXdpZHRoPSIwIj48cmVjdCB4PSIyMi4yOTIiIHk9IjkuMTQ2MyIgd2lkdGg9IjYuNjE0NCIgaGVpZ2h0PSIxOS4wNTYiLz48cmVjdCB4PSI3LjAzMTIiIHk9IjEuNTA2IiB3aWR0aD0iMTUuODMzIiBoZWlnaHQ9IjI2Ljc4NiIvPjxyZWN0IHg9Ii43ODEyNSIgeT0iNy41IiB3aWR0aD0iMTguNzUiIGhlaWdodD0iMTYuNTY3Ii8+PC9nPjxwb2x5bGluZSBwb2ludHM9IjIuOTU0IDIwLjMzMSA1Ljg2NyAxOC4xNDUgNy4zNTIgMTkuMjI5IDEzLjIzNiAxNC44NzUgMTUuNDIyIDE2LjUgMTYuOTA1IDE1LjQxNyAxNi45MDUgMjAuMzMxIDIuOTU0IDIwLjMzMSIgZmlsbD0iIzVCMkQ4RCIgb3BhY2l0eT0iLjg5OCIvPjxwYXRoIGQ9Im01LjU0NyAxMC45MzljMS4wODUgMCAxLjk2NyAwLjgyMiAxLjk2NyAxLjgzMyAwIDEuMDE0LTAuODgyIDEuODMzLTEuOTY3IDEuODMzLTEuMDg4IDAtMS45NjgtMC44MTktMS45NjgtMS44MzMgMC0xLjAxMSAwLjg4LTEuODMzIDEuOTY4LTEuODMzIiBmaWxsPSIjNUIyRDhEIiBvcGFjaXR5PSIuODk4Ii8+PHBhdGggZD0ibTI4LjY3NiA3LjU4LTUuNDU0LTYuMzI3LTEuMDgyLTEuMjUzaC0xMi44ODdjLTEuNzMxIDAtMy4xMzIgMS40MDEtMy4xMzIgMy4xMzJ2My45ODFoMS45NDFsLTFlLTMgLTMuMjE4YzRlLTMgLTAuOTc0IDAuNzg2LTEuNzYxIDEuNzU3LTEuNzYxbDExLjAyNC0wLjAxdjUuMjIyYzJlLTMgMS45NDUgMS41NzIgMy41MiAzLjUxOCAzLjUyaDMuODE2bC0wLjE4NiAxNS4wNjVjLTZlLTMgMC45NjktMC43ODggMS43NTEtMS43NTkgMS43NTlsLTE2LjU1Mi04ZS0zYy0wLjg4NiAwLTEuNTk4LTAuODctMS42MDQtMS45Mzl2LTEuMjc3aC0xLjk0NHYxLjkwMWMwIDEuOTE0IDEuMjggMy40NjUgMi44NTMgMy40NjVsMTcuODEyLTVlLTNjMS43MzIgMCAzLjEzNC0xLjQwNiAzLjEzNC0zLjEzNHYtMTcuNjU1bC0xLjI1NC0xLjQ1OCIgZmlsbD0iIzQzNDQ0MCIvPjxwYXRoIGQ9Ik0yMC4yMDEsMjUuNDM3SDBWNi4xNDNoMjAuMjAxVjI1LjQzNyBNMS45NCwyMy40OTRoMTYuMzE5VjguMDg1SDEuOTQiIGZpbGw9IiM1QjJEOEQiLz48L3N2Zz4K'/>
                        </label>&nbsp;&nbsp;&nbsp;
                        <label for="save-as-image-pdfcrowd-image4-svg">
                            <input type="radio" id="save-as-image-pdfcrowd-image4-svg" name="save-as-image-pdfcrowd[button_image]" value="image4.svg" <?php checked( $button_image, "image4.svg" ); ?> autocomplete="off" />
                            <img src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTkuNzE0IiBoZWlnaHQ9IjI3LjQwOCIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0xLjAwMDYgMSAxMi40NCAwLjA5NTg3OSA1LjI3MzMgNi40MjM5LTAuMDcxOTEgMTguODg4aC0xNy42NDJ6IiBmaWxsPSIjZmZmYWZhIi8+PHBhdGggZD0ibTEyLjY5OCAwLjkwNDA5IDAuMzM1NTggNi40NzE4IDUuODAwNyAwLjMzNTU4eiIgZmlsbD0iIzY5Njk2OSIvPjxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKC02Ljc2NTYgLTIuNzYzNykiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+PGcgZmlsbD0iIzkyOTI5MiI+PHBhdGggZD0ibTE5LjUgM2gtMTAuNDk3Yy0xLjEwNjEgMC0yLjAwMjggMC44OTgzNC0yLjAwMjggMi4wMDczdjIyLjk4NWMwIDEuMTA4NiAwLjg5MDkzIDIuMDA3MyAxLjk5NzQgMi4wMDczaDE1LjAwNWMxLjEwMzEgMCAxLjk5NzQtMC44OTgyMSAxLjk5NzQtMS45OTA4di0xOC4wMDlsLTYtN3ptLTAuNSAxaC0xMC4wMDRjLTAuNTQ5ODQgMC0wLjk5NTU4IDAuNDU1MjYtMC45OTU1OCAwLjk5NTQ2djIzLjAwOWMwIDAuNTQ5NzggMC40NTQ3MSAwLjk5NTQ2IDAuOTk5OTYgMC45OTU0NmgxNWMwLjU1MjI2IDAgMC45OTk5Ni0wLjQ0NDk1IDAuOTk5OTYtMC45OTM0di0xNy4wMDdoLTQuMDAyMWMtMS4xMDM0IDAtMS45OTc5LTAuODg2NTYtMS45OTc5LTIuMDA1OXptMSAwLjV2NC40OTEyYzAgMC41NTcxNCAwLjQ1MDY1IDEuMDA4OCAwLjk5Njc0IDEuMDA4OGgzLjcwMzJ6Ii8+PC9nPjxwYXRoIGQ9Im0yMS45NzYgMjMuMDM5di02LjA0NTdoLTExdjdsMi41LTIgMS40NTc5IDEuMjQ5NyAzLjYzNTEtMy4yNDk3em0tMTItNy4wNDU3djEwaDEzdi0xMHptNCA0YzAuNTUyMjggMCAxLTAuNDQ3NzIgMS0xcy0wLjQ0NzcyLTEtMS0xLTEgMC40NDc3Mi0xIDEgMC40NDc3MiAxIDEgMXoiIGZpbGw9IiM1YjJkOGQiLz48cGF0aCBkPSJtMTAgN2g3IiBzdHJva2U9IiM4MDgwODAiIHN0cm9rZS13aWR0aD0iMXB4Ii8+PHBhdGggZD0ibTEwIDEwaDUiIHN0cm9rZT0iIzgwODA4MCIgc3Ryb2tlLXdpZHRoPSIxcHgiLz48L2c+PC9zdmc+Cg=='/>
                        </label>&nbsp;&nbsp;&nbsp;
                        <label for="save-as-image-pdfcrowd-pdfcrowd-svg">
                            <input type="radio" id="save-as-image-pdfcrowd-pdfcrowd-svg" name="save-as-image-pdfcrowd[button_image]" value="pdfcrowd.svg" <?php checked( $button_image, "pdfcrowd.svg" ); ?> autocomplete="off" />
                            <img src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTkuMjI3IiBoZWlnaHQ9IjQzLjI1NiIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKC03My44MDIgLTM4Ni4wNikiPjxnIHRyYW5zZm9ybT0ibWF0cml4KDEuNzk0OCAwIDAgMS43OTQ4IC0yNjI2LjUgLTIxMi4wNikiIGZpbGw9IiNmZmYiIHN0cm9rZT0iI2ZmOTUwMCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCI+PHBhdGggZD0ibTE1MTQuNSAzMzUuODZjMC40NDI2IDAuMDU0IDEuMjM2Ni0wLjI0MzM2IDEuMDAwMiAwLjQ4OTY1djE4LjUxMWMtMC40NDI2LTAuMDU0LTEuMjM2NiAwLjI0MzM3LTEuMDAwMi0wLjQ4OTY1di0xOC41MTF6IiBvcGFjaXR5PSIuOTkiIHN0cm9rZS13aWR0aD0iNC45OTk4Ii8+PHBhdGggZD0ibTE1MDYuMyAzNDQuNTRoMS40NzQ4djEwLjU1NWgtMS40NzQ4di0xMC41NTV6IiBvcGFjaXR5PSIuOTkiIHN0cm9rZS13aWR0aD0iNC41MjUxIi8+PHBhdGggZD0ibTE1MjIuNCAzMzkuNzhjMC4zNzU1IDAuMTIzMSAxLjI5ODYtMC4zMDEzMyAxLjE2OTQgMC4zMjY0M3YxNC44NDNjLTAuMzc1NS0wLjEyMzExLTEuMjk4NiAwLjMwMTMzLTEuMTY5NC0wLjMyNjQzdi0xNC44NDN6IiBvcGFjaXR5PSIuOTkiIHN0cm9rZS13aWR0aD0iNC44MzA2Ii8+PHBhdGggZD0ibTE1MzUuMSAzNTMuMjh2Mi4xNjQ5aC01LjE2NDl2LTIuMTY0OWg1LjE2NDl6IiBvcGFjaXR5PSIuOTkiIHN0cm9rZS13aWR0aD0iMy44MzUxIi8+PC9nPjwvZz48L3N2Zz4K'/>
                        </label>&nbsp;&nbsp;&nbsp;
                        <br/>
                        <label for="save-as-image-pdfcrowd-custom-image">
                          <input
                            type="radio"
                            id="save-as-image-pdfcrowd-custom-image"
                            name="save-as-image-pdfcrowd[button_image]"
                            value="custom_image" <?php checked( $button_image, "custom_image" ); ?>
                            autocomplete="off" />
                            Custom image URL
                            <input
                              id="save-as-image-pdfcrowd-custom-image-url"
                              type="text"
                              data-parent-opt="#save-as-image-pdfcrowd-custom-image"
                              class="clear regular-text save-as-image-pdfcrowd-text-for-radio" name="save-as-image-pdfcrowd[button_image_url]"
                              value="<?php esc_attr_e($button_image_url); ?>"  autocomplete="off" />
                        </label>
                        <div class="save-as-image-pdfcrowd-nested-dsc">
                          <div class="save-as-image-pdfcrowd-description">
                            <div>
                              Examples:
                              <ul>
                                <li>
                                  https://www.adobe.com/content/dam/acom/en/legal/images/badges/PDF_24.png
                                </li>
                                <li>
                                  /wp/wp-content/uploads/save_as_image.png
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="save-as-image-pdfcrowd-devi save-as-image-pdfcrowd-mb-2">
                            Shortcode and function parameter: "<strong>button_image_url</strong>"
                          </div>
                        </div>
                        <input
                          type="radio"
                          id="save-as-image-pdfcrowd-custom-image-h"
                          name="save-as-image-pdfcrowd[button_image]"
                          value="custom_html" <?php checked( $button_image, "custom_html" ); ?>
                          autocomplete="off" />
                          <label for="save-as-image-pdfcrowd-custom-image-h">
                            Custom HTML
                          </label>
                          <div class="save-as-image-pdfcrowd-nested-dsc">
                            <?php unfiltered_html_notice('Custom HTML'); ?>
                            <textarea
                              class="save-as-image-pdfcrowd-text-for-radio"
                              id="save-as-image-pdfcrowd-custom-html"
                              name="save-as-image-pdfcrowd[button_custom_html]"
                              data-parent-opt="#save-as-image-pdfcrowd-custom-image-h"
                              data-empty-is-not-def="1"
                              rows=5
                              <?php if(!current_user_can('unfiltered_html')) echo 'readonly'; ?>
                              cols=60 autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false"><?php esc_html_e($button_custom_html); ?></textarea>
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            Examples:
                            <ul>
                              <li>
                                &lt;div style='width: 20pt; height: 20pt; background-color: red;'&gt;PDF&lt;/div&gt;
                              </li>
                              <li>
                                &lt;svg style='width: 20pt; height: 20pt;'&gt;&lt;rect style='fill:red;inline-size:20px;block-size:20px;' /&gt;&lt;/svg&gt;
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                          Shortcode and function parameter: "<strong>button_custom_html</strong>"
                        </div>
                        </div>
                    </fieldset>
                    <div class="save-as-image-pdfcrowd-description">
                      The image to be displayed on the button.
                    </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
              data-default="24">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-button-image-width">
                      Button Image Width
                    </label>
                </th>
                <td>
                  <input type="number" class="small-text" min="6" id="save-as-image-pdfcrowd-button-image-width" name="save-as-image-pdfcrowd[button_image_width]" value="<?php esc_attr_e($button_image_width); ?>" autocomplete="off" />px
                  <div class="save-as-image-pdfcrowd-description">
                    The width of the image on the button.
                  </div>
                    <div class='save-as-image-pdfcrowd-devi'>
                        Shortcode and function parameter: "<strong>button_image_width</strong>"<br>Possible values: any numeric value
                    </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
              data-default="24">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-button-image-height">
                        Button Image Height
                    </label>
                </th>
                <td>
                    <input type="number" class="small-text" min="6" id="save-as-image-pdfcrowd-button-image-height" name="save-as-image-pdfcrowd[button_image_height]" value="<?php esc_attr_e($button_image_height); ?>" autocomplete="off" />px
                  <div class="save-as-image-pdfcrowd-description">
                    The height of the image on the button.
                  </div>
                    <div class='save-as-image-pdfcrowd-devi'>
                        Shortcode and function parameter: "<strong>button_image_height</strong>"<br>Possible values: any numeric value
                    </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
              data-default="">
                <th scope="row">
                  <label for="save-as-image-pdfcrowd-button-id">
                    Button ID
                  </label>
                </th>
                <td>
                  <input type="text"
                         class="regular-text"
                         id="save-as-image-pdfcrowd-button-id"
                         name="save-as-image-pdfcrowd[button_id]"
                         value="<?php esc_attr_e($button_id); ?>"
                         placeholder="<?php esc_attr_e('Your id for the button', $this->plugin_name);?>"
                         autocomplete="off">
                    <div class="save-as-image-pdfcrowd-description">
                      The ID used for the button in HTML to be used for the custom button styling or JavaScript event handler.
                    </div>
                    <div class='save-as-image-pdfcrowd-devi'>
                        Shortcode and function parameter: "<strong>button_id</strong>"
                    </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
              data-default="">
                <th>
                    <label for="save-as-image-pdfcrowd-button-html-hidden">
                      Hide Button in HTML
                    </label>
                </th>
                <td>
                    <input type="checkbox" id="save-as-image-pdfcrowd-button-html-hidden" name="save-as-image-pdfcrowd[button_html_hidden]" value="1" <?php checked( $button_html_hidden, 1 ); ?> autocomplete="off">
                    <div class="save-as-image-pdfcrowd-description">
                      The ID used for the button in HTML to be used for the custom button styling or JavaScript event handler.
                    </div>
                    <div class='save-as-image-pdfcrowd-devi'>
                        Shortcode and function parameter: "<strong>button_html_hidden</strong>"<br>Possible values: 0, 1
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
  <div id="save-as-image-pdfcrowd-positioning"
       class="save-as-image-pdfcrowd-category-wrap">
  <div class="save-as-image-pdfcrowd-heading-wrap save-as-image-pdfcrowd-basic-heading-wrap">
    <h2>Button Positioning</h2>
  </div>
    <table class="form-table">
        <tbody>
            <tr class="save-as-image-pdfcrowd-set-group"
              data-default="below">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd[button_position]">
                      Destination
                    </label>
                </th>
                <td>
                    <select id="save-as-image-pdfcrowd[button_position]" name="save-as-image-pdfcrowd[button_position]" autocomplete="off">
                    <option value="below" <?php selected($button_position, 'below');?>>below content</option>
                    <option value="above" <?php selected($button_position, 'above');?>>above content</option>
                    <option value="left" <?php selected($button_position, 'left');?>>left to content</option>
                    <option value="right" <?php selected($button_position, 'right');?>>right to content</option>
                    <option value="inline" <?php selected($button_position, 'inline');?>>inline</option>
                    </select>
                    <div class="save-as-image-pdfcrowd-description">
                      The position of the button relative to the content.
                    </div>
                    <div class='save-as-image-pdfcrowd-devi'>
                        Shortcode and function parameter: "<strong>button_position</strong>"<br>Possible values: "below", "above", "left", "right", "inline"
                    </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
              data-default="center">
                <th scope="row">
                  <label for="save-as-image-pdfcrowd[button_alignment]">
                    Alignment
                  </label>
                </th>
                <td>
                    <select id="save-as-image-pdfcrowd[button_alignment]" name="save-as-image-pdfcrowd[button_alignment]" autocomplete="off">
                    <option value="" <?php selected($button_alignment, '');?>>-- unset --</option>
                    <option value="start" <?php selected($button_alignment, 'start');?>>start</option>
                    <option value="center" <?php selected($button_alignment, 'center');?>>center</option>
                    <option value="left" <?php selected($button_alignment, 'left');?>>left</option>
                    <option value="right" <?php selected($button_alignment, 'right');?>>right</option>
                    <option value="end" <?php selected($button_alignment, 'end');?>>end</option>
                    </select>
                    <div class="save-as-image-pdfcrowd-description">
                      The alignment of the button.
                    </div>
                    <div class='save-as-image-pdfcrowd-devi'>
                        Shortcode and function parameter: "<strong>button_alignment</strong>"<br>Possible values: "", "start", "center", "left", "right", "end"
                    </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input" data-default="6">
                <th scope="row">
                    Margin
                </th>
                <td style="margin-top: 0; margin-bottom: 0;">
                    <table class="save-as-image-pdfcrowd-inner-table">
                        <tr>
                            <td>
                                Top <input type="number" class="small-text" min="0" id="save-as-image-pdfcrowd-button-margin-top" name="save-as-image-pdfcrowd[button_margin_top]" value="<?php esc_attr_e($button_margin_top); ?>" autocomplete="off" />px
                            </td>
                            <td>
                                Right <input type="number" class="small-text" min="0" id="save-as-image-pdfcrowd-button-margin-right" name="save-as-image-pdfcrowd[button_margin_right]" value="<?php esc_attr_e($button_margin_right); ?>" autocomplete="off" />px
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Bottom <input type="number" class="small-text" min="0" id="save-as-image-pdfcrowd-button-margin-bottom" name="save-as-image-pdfcrowd[button_margin_bottom]" value="<?php esc_attr_e($button_margin_bottom); ?>" autocomplete="off" />px
                            </td>
                            <td>
                                Left <input type="number" class="small-text" min="0" id="save-as-image-pdfcrowd-button-margin-left" name="save-as-image-pdfcrowd[button_margin_left]" value="<?php esc_attr_e($button_margin_left); ?>" autocomplete="off" />px
                            </td>
                        </tr>
                    </table>
                    <div class="save-as-image-pdfcrowd-description">
                      Margins of the conversion button.
                    </div>
                    <div class='save-as-image-pdfcrowd-devi'>
                        Shortcode and function parameter: "<strong>button_margin_left", "button_margin_right", "button_margin_top", "button_margin_bottom</strong>"<br>Possible values: any numeric value
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
  <div id="save-as-image-pdfcrowd-styling"
       class="save-as-image-pdfcrowd-category-wrap">
  <div class="save-as-image-pdfcrowd-heading-wrap save-as-image-pdfcrowd-basic-heading-wrap">
    <h2>Button Styling</h2>
  </div>
    <table class="form-table">
        <tbody>
            <tr class="save-as-image-pdfcrowd-set-group"
              data-default="custom">
                <th scope="row">
                  Styling is
                </th>
                <td>
                    <fieldset>
                        <legend class="screen-reader-text">
                            <span>Button Styling</span>
                        </legend>
                        <label for="save-as-image-pdfcrowd-st-theme">
                            <input type="radio" id="save-as-image-pdfcrowd-st-theme" name="save-as-image-pdfcrowd[button_styling]" value="theme" <?php checked( $button_styling, "theme" ); ?> autocomplete="off" />
                            Defined by your theme
                        </label><br>
                        <label for="save-as-image-pdfcrowd-st-custom">
                            <input type="radio" id="save-as-image-pdfcrowd-st-custom" name="save-as-image-pdfcrowd[button_styling]" value="custom" <?php checked( $button_styling, "custom" ); ?> autocomplete="off" />
                            Custom
                        </label>
                    </fieldset>
                    <div class="save-as-image-pdfcrowd-description">
                      The style can also be changed using the <code>.save-as-image-pdfcrowd-button</code> CSS rule.
                      <br/>
                      For example, add the following line to your CSS
                      to italicize the button text.
                      <br/>
                      <pre>.save-as-image-pdfcrowd-button { font-style: italic; }</pre>
                    </div>
                    <div class='save-as-image-pdfcrowd-devi'>
                        Shortcode and function parameter: "<strong>button_styling</strong>"<br>Possible values: "theme", "custom"
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <div id="save-as-image-pdfcrowd-custom-button">
        <table class="form-table">
            <tbody>
                <tr class="save-as-image-pdfcrowd-set-group"
                    data-default="14">
                    <th scope="row">
                        <label for="save-as-image-pdfcrowd-button-text-size">
                            Text Size
                        </label>
                    </th>
                    <td>
                      <input type="number" class="small-text" min="0" id="save-as-image-pdfcrowd-button-text-size" name="save-as-image-pdfcrowd[button_text_size]" value="<?php esc_attr_e($button_text_size); ?>" autocomplete="off" />px
                      <div class="save-as-image-pdfcrowd-description">
                        The font size for the button.
                      </div>
                      <div class='save-as-image-pdfcrowd-devi'>
                        Shortcode and function parameter: "<strong>button_text_size</strong>"<br>Possible values: any numeric value
                      </div>
                    </td>
                </tr>
                <tr class="save-as-image-pdfcrowd-set-group"
                    data-default="bold">
                    <th scope="row">
                        <label for="save-as-image-pdfcrowd-button-text-weight">
                          Text Weight
                        </label>
                    </th>
                    <td>
                      <select
                        id="save-as-image-pdfcrowd-button-text-weight"
                        name="save-as-image-pdfcrowd[button_text_weight]" autocomplete="off">
                            <option value="normal" <?php selected($button_text_weight, 'normal');?>>normal</option>
                            <option value="bold" <?php selected($button_text_weight, 'bold');?>>bold</option>
                            <option value="bolder" <?php selected($button_text_weight, 'bolder');?>>bolder</option>
                            <option value="lighter" <?php selected($button_text_weight, 'lighter');?>>lighter</option>
                            <option value="100" <?php selected($button_text_weight, '100');?>>100</option>
                            <option value="200" <?php selected($button_text_weight, '200');?>>200</option>
                            <option value="300" <?php selected($button_text_weight, '300');?>>300</option>
                            <option value="400" <?php selected($button_text_weight, '400');?>>400</option>
                            <option value="500" <?php selected($button_text_weight, '500');?>>500</option>
                            <option value="600" <?php selected($button_text_weight, '600');?>>600</option>
                            <option value="700" <?php selected($button_text_weight, '700');?>>700</option>
                            <option value="800" <?php selected($button_text_weight, '800');?>>800</option>
                            <option value="900" <?php selected($button_text_weight, '900');?>>900</option>
                        </select>
                      <div class="save-as-image-pdfcrowd-description">
                        The font weight for the button.
                      </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>button_text_weight</strong>"<br>Possible values: any CSS font-weight
                        </div>
                    </td>
                </tr>
                <tr class="save-as-image-pdfcrowd-set-group"
                    data-default="#ffffff">
                    <th scope="row">
                      <label for="save-as-image-pdfcrowd-text-color">
                        Text Color
                      </label>
                    </th>
                    <td>
                      <input
                        type="text"
                        class="save-as-image-pdfcrowd-color-field"
                        id="save-as-image-pdfcrowd-button-text-color"
                        name="save-as-image-pdfcrowd[button_text_color]"
                        value="<?php esc_attr_e($button_text_color); ?>"
                        data-default-color="#ffffff" autocomplete="off" />
                      <div class="save-as-image-pdfcrowd-description">
                        The font color for the button.
                      </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>button_text_color</strong>"<br>Possible values: any HTML color code
                        </div>
                    </td>
                </tr>
                <tr class="save-as-image-pdfcrowd-set-group"
                    data-default="#007bff">
                    <th scope="row">
                        <label for="save-as-image-pdfcrowd-background-color">
                          Background Color
                        </label>
                    </th>
                    <td>
                        <input type="text" class="save-as-image-pdfcrowd-color-field" id="save-as-image-pdfcrowd-button-background-color" name="save-as-image-pdfcrowd[button_background_color]" value="<?php esc_attr_e($button_background_color); ?>" data-default-color="#007bff" autocomplete="off" />
                      <div class="save-as-image-pdfcrowd-description">
                        The background color of the button.
                      </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>button_background_color</strong>"<br>Possible values: any HTML color code
                        </div>
                    </td>
                </tr>
                <tr class="save-as-image-pdfcrowd-set-group"
                    data-default="#007bff">
                    <th scope="row">
                      <label for="save-as-image-pdfcrowd-border-color">
                        Border Color
                      </label>
                    </th>
                    <td>
                        <input type="text" class="save-as-image-pdfcrowd-color-field" id="save-as-image-pdfcrowd-button-border-color" name="save-as-image-pdfcrowd[button_border_color]" value="<?php esc_attr_e($button_border_color); ?>" data-default-color="#007bff" autocomplete="off" />
                      <div class="save-as-image-pdfcrowd-description">
                        The border color of the button.
                      </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>button_border_color</strong>"<br>Possible values: any HTML color code
                        </div>
                    </td>
                </tr>
                <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                    data-default="solid">
                    <th scope="row">
                      <label for="save-as-image-pdfcrowd-border-style">
                        Border Style
                      </label>
                    </th>
                    <td>
                      <select
                        id="save-as-image-pdfcrowd-button-border-style]"
                        name="save-as-image-pdfcrowd[button_border_style]"
                        autocomplete="off">
                            <option value="dotted" <?php selected($button_border_style, 'dotted');?>>dotted</option>
                            <option value="dashed" <?php selected($button_border_style, 'dashed');?>>dashed</option>
                            <option value="solid" <?php selected($button_border_style, 'solid');?>>solid</option>
                            <option value="double" <?php selected($button_border_style, 'double');?>>double</option>
                            <option value="groove" <?php selected($button_border_style, 'groove');?>>groove</option>
                            <option value="ridge" <?php selected($button_border_style, 'ridge');?>>ridge</option>
                            <option value="inset" <?php selected($button_border_style, 'inset');?>>inset</option>
                            <option value="outset" <?php selected($button_border_style, 'outset');?>>outset</option>
                            <option value="none" <?php selected($button_border_style, 'none');?>>none</option>
                            <option value="hidden" <?php selected($button_border_style, 'hidden');?>>hidden</option>
                      </select>
                      <div class="save-as-image-pdfcrowd-description">
                        The border style of the button.
                      </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>button_border_style</strong>"<br>Possible values: "dotted", "dashed", "solid", "double", "groove", "ridge", "inset", "outset", "none", "hidden"
                        </div>
                    </td>
                </tr>
                <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                    data-default="1">
                    <th scope="row">
                        <label for="save-as-image-pdfcrowd-button-border-width">
                          Button Border Width
                        </label>
                    </th>
                    <td>
                        <input type="number" class="small-text" min="0" id="save-as-image-pdfcrowd-button-border-width" name="save-as-image-pdfcrowd[button_border_width]" value="<?php esc_attr_e($button_border_width); ?>" autocomplete="off" />px
                      <div class="save-as-image-pdfcrowd-description">
                        The border width of the button.
                      </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>button_border_width</strong>"<br>Possible values: any numeric value
                        </div>
                    </td>
                </tr>
                <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                    data-default="6">
                    <th scope="row">
                        Padding
                    </th>
                    <td>
                        <table class="save-as-image-pdfcrowd-inner-table">
                            <tr>
                                <td>
                                    Top <input type="number" class="small-text" min="0" id="save-as-image-pdfcrowd-button-padding-top" name="save-as-image-pdfcrowd[button_padding_top]" value="<?php esc_attr_e($button_padding_top); ?>" autocomplete="off" />px
                                </td>
                                <td>
                                    Right <input type="number" class="small-text" min="0" id="save-as-image-pdfcrowd-button-padding-right" name="save-as-image-pdfcrowd[button_padding_right]" value="<?php esc_attr_e($button_padding_right); ?>" autocomplete="off" />px
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Bottom <input type="number" class="small-text" min="0" id="save-as-image-pdfcrowd-button-padding-bottom" name="save-as-image-pdfcrowd[button_padding_bottom]" value="<?php esc_attr_e($button_padding_bottom); ?>" autocomplete="off" />px
                                </td>
                                <td>
                                    Left <input type="number" class="small-text" min="0" id="save-as-image-pdfcrowd-button-padding-left" name="save-as-image-pdfcrowd[button_padding_left]" value="<?php esc_attr_e($button_padding_left); ?>" autocomplete="off" />px
                                </td>
                            </tr>
                        </table>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>button_padding_left", "button_padding_right", "button_padding_top", "button_padding_bottom</strong>"<br>Possible values: any numeric value
                        </div>
                    </td>
                </tr>
                <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                    data-default="3">
                    <th scope="row">
                        <label for="save-as-image-pdfcrowd-button-radius">
                          Radius
                        </label>
                    </th>
                    <td>
                        <input type="number" class="small-text" min="0" id="save-as-image-pdfcrowd-button-radius" name="save-as-image-pdfcrowd[button_radius]" value="<?php esc_attr_e($button_radius); ?>" autocomplete="off" />px
                      <div class="save-as-image-pdfcrowd-description">
                        The radius of the button.
                      </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>button_radius</strong>"<br>Possible values: any numeric value
                        </div>
                    </td>
                </tr>
                <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                    data-default="1">
                    <th>
                      Change on Mouse Over
                    </th>
                    <td>
                        <input type="checkbox" id="save-as-image-pdfcrowd-button-hover" name="save-as-image-pdfcrowd[button_hover]" value="1" <?php checked( $button_hover, 1 ); ?> autocomplete="off" />
                        <div class="save-as-image-pdfcrowd-description">
                          <div>
                            The mouse over style may be altered by your CSS rules <code>.save-as-image-pdfcrowd-button-hover</code>, <code>.save-as-image-pdfcrowd-has-indicator-func:hover</code>.
                            For example:
                          </div>
                        <pre>
.save-as-image-pdfcrowd-button-hover, .save-as-image-pdfcrowd-has-indicator-func:hover {
    filter: invert(100%) !important;
}</pre>
                        </div>
                        <div class='save-as-image-pdfcrowd-devi'>
                            Shortcode and function parameter: "<strong>button_hover</strong>"<br>Possible values: 0, 1
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
  <div id="save-as-image-pdfcrowd-conv-indicator"
       class="save-as-image-pdfcrowd-category-wrap">
  <div class="save-as-image-pdfcrowd-heading-wrap">
    <h2>Conversion in Progress Button Indicator</h2>
  </div>
    <table class="form-table">
        <tbody>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="ellipsis">
                <th scope="row">
                  Type
                </th>
                <td>
                  <div class="save-as-image-pdfcrowd-devi save-as-image-pdfcrowd-mb-2">
                    Shortcode and function parameter: "<strong>button_indicator</strong>"<br>Possible values: "ellipsis", "ring", "dualRing", "html", "custom", ""
                  </div>
                    <fieldset>
                        <legend class="screen-reader-text">
                            <span>Indicator Type</span>
                        </legend>
                        <label>
                          <input
                            type="radio"
                            name="save-as-image-pdfcrowd[button_indicator]"
                            id="save-as-image-pdfcrowd-button-indicator-ellipsis"
                            value="ellipsis" <?php checked( $button_indicator, "ellipsis" ); ?>
                            autocomplete="off" />
                            Ellipsis
                        </label>
                        <br>
                        <label>
                          <input
                            type="radio"
                            name="save-as-image-pdfcrowd[button_indicator]"
                            id="save-as-image-pdfcrowd-button-indicator-ring"
                            value="ring" <?php checked( $button_indicator, "ring" ); ?>
                            autocomplete="off" />
                            Ring
                        </label>
                        <br>
                        <label>
                          <input
                            type="radio"
                            name="save-as-image-pdfcrowd[button_indicator]"
                            id="save-as-image-pdfcrowd-button-indicator-dualRing"
                            value="dualRing" <?php checked( $button_indicator, "dualRing" ); ?>
                            autocomplete="off" />
                            Dual ring
                        </label>
                        <br>
                        <label>
                          <input
                            type="radio"
                            name="save-as-image-pdfcrowd[button_indicator]"
                            id="save-as-image-pdfcrowd-button-indicator-html"
                            value="html" <?php checked( $button_indicator, "html" ); ?>
                            autocomplete="off" />
                            Custom HTML
                            <div class="save-as-image-pdfcrowd-nested-dsc">
                            <?php unfiltered_html_notice('Custom HTML'); ?>
                            <textarea
                              class="save-as-image-pdfcrowd-text-for-radio"
                              id="save-as-image-pdfcrowd-custom-indicator-html"
                              name="save-as-image-pdfcrowd[button_indicator_html]"
                              data-parent-opt="#save-as-image-pdfcrowd-button-indicator-html"
                              rows=3
                              <?php if(!current_user_can('unfiltered_html')) echo 'readonly'; ?>
                              cols=60 autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false"><?php esc_html_e($button_indicator_html); ?></textarea>
                              <div class="save-as-image-pdfcrowd-devi save-as-image-pdfcrowd-mb-2">
                                Shortcode and function parameter: "<strong>button_indicator_html</strong>"<br>Possible values: your HTML code
                              </div>
                            </div>
                        </label>
                        <br>
                        <label>
                          <input
                            type="radio"
                            name="save-as-image-pdfcrowd[button_indicator]"
                            id="save-as-image-pdfcrowd-button-indicator-custom"
                            value="custom" <?php checked( $button_indicator, "custom" ); ?>
                            autocomplete="off" />
                            Custom function
                              <input
                                type="text"
                                class="regular-text save-as-image-pdfcrowd-text-for-radio"
                                id="save-as-image-pdfcrowd-button-custom-indicator"
                                data-parent-opt="#save-as-image-pdfcrowd-button-indicator-custom"
                                name="save-as-image-pdfcrowd[button_custom_indicator]" value="<?php esc_attr_e($button_custom_indicator); ?>" placeholder="<?php esc_attr_e('Your JavaScript function name', $this->plugin_name);?>" autocomplete="off" />
                            <div class="save-as-image-pdfcrowd-nested-dsc">
                                <div class="save-as-image-pdfcrowd-description">
                                <div>
                                    The name of the function which will handle the appearance of the conversion indicator. The function must accept 2 parameters:
                                </div>
                                <ul>
                                    <li>isStart - true if the conversion has started, false if it has finished</li>
                                    <li>button - an HTML element representing the pressed button</li>
                                </ul>
                                <div>
                                    Example:
                                </div>
                                <pre>function mySaveAsImagePdfcrowdIndicator(isStart, button) {
    if(isStart) {
        button.textContent = 'running....';
        button.style.border = '4px dotted red';
        document.body.style.cursor = 'wait';
    } else {
        button.textContent = 'finished';
        button.style.border = '';
        document.body.style.cursor = 'auto';
    }
}</pre>
                                </div>
                                <div class="save-as-image-pdfcrowd-devi save-as-image-pdfcrowd-mb-2">
                                  Shortcode and function parameter: "<strong>button_custom_indicator</strong>"<br>Possible values: your JavaScript function name
                                </div>
                            </div>
                        </label>
                        <br>
                        <label>
                          <input
                            type="radio"
                            name="save-as-image-pdfcrowd[button_indicator]"
                            id="save-as-image-pdfcrowd-button-indicator-"
                            value="" <?php checked( $button_indicator, "" ); ?>
                            autocomplete="off" />
                            No indicator
                        </label>
                        <br>
                    </fieldset>
                    <div class="save-as-image-pdfcrowd-description">
                      The type of indicator that appears above the button while the conversion is in progress.
                    </div>
                </td>
            </tr>
            <tr class="save-as-image-pdfcrowd-set-group save-as-image-pdfcrowd-adv-input"
                data-default="60">
                <th scope="row">
                    <label for="save-as-image-pdfcrowd-button-text-size">
                      Indicator Timeout
                    </label>
                </th>
                <td>
                    <input type="number" class="small-text" min="0" id="save-as-image-pdfcrowd-button-indicator-timeout" name="save-as-image-pdfcrowd[button_indicator_timeout]" value="<?php esc_attr_e($button_indicator_timeout); ?>" autocomplete="off" /> seconds
                    <div class="save-as-image-pdfcrowd-description">
                      If the indicator remains active even after the conversion has finished, set a time limit on the conversion time of your typical document, e.g. 5 seconds. Otherwise, use the default value of 60 seconds.
                    </div>
                    <div class='save-as-image-pdfcrowd-devi'>
                        Shortcode and function parameter: "<strong>button_indicator_timeout</strong>"<br>Possible values: any numeric value
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
</div>
