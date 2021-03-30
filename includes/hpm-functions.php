<?php
/*
 * Add menu to the Admin Control Panel
 */
 
// Hook the 'admin_menu' action hook, run the function named 'hpm_Add_My_Admin_Link()'
add_action( 'admin_menu', 'hpm_Add_My_Admin_Link' );

// Add a new top level menu link to the ACP
function hpm_Add_My_Admin_Link()
{
      add_menu_page(
        'HOA Page Message', // Title of the page
        'HOA Page Message', // Text to show on the menu link
        'manage_options', // Capability requirement to see the link
        'HOA-Page-Message',
        'extra_post_info_page', // The 'slug' - file to display when clicking the link
        'send email address'
      );
    add_action( 'admin_init', 'update_extra_post_info' ); 
}

// Create function to register plugin settings in the database
function update_extra_post_info() {
    register_setting( 'extra-post-info-settings', 'extra_post_info' );
    register_setting( 'extra-post-info-settings', 'base_colour' );
    register_setting( 'extra-post-info-settings', 'button_colour' );
    register_setting( 'extra-post-info-settings', 'head_line' );  
    register_setting( 'extra-post-info-settings', 'send_address' ); 
    // register_setting( 'extra-post-info-settings', 'mail_who' ); 
  }
  
// Create WordPress plugin page
function extra_post_info_page(){
  ?>
      <h1>HOA Page Message Settings</h1>
      <form method="post" action="options.php">
        <?php settings_fields( 'extra-post-info-settings' ); ?>
        <?php do_settings_sections( 'extra-post-info-settings' ); ?>
        <table class="form-table" width="100%">
          <tr valign="top">
          <th scope="row">List page slugs for any pages/posts you wish to exclude from showing the plugin (each one needs to be on a new line):</th>
          <td><textarea type="text" name="extra_post_info" value="" style="min-height:200px; width:90%;" placeholder="example: '43058' or 'buying-home-coronavirus'"><?php echo get_option('extra_post_info'); ?></textarea></td>
          <th scope="row">widget colour - Should be a value that can be used in CSS, so HEX or a named colour "DeepPink" etc:</th>
          <td style="vertical-align: top;"><input type="text" name="base_colour" value="<?php echo get_option('base_colour'); ?>" placeholder="eg: #ec008c"/></td>
          </tr>
          <tr valign="top">
          <th scope="row">Headline for the form</th>
          <td><input type="text" name="head_line" value="<?php echo get_option('head_line'); ?>" placeholder="Headline text for form goes here"/></td>
          <th scope="row">Button Colour</th>
          <td style="vertical-align: top;"><input type="text" name="button_colour" value="<?php echo get_option('button_colour'); ?>" placeholder="eg: #4f145b"/></td>
          </tr>
          <tr valign="top">
          <th scope="row">Email</th>
          <td><input type="email" name="send_address" value="<?php echo get_option('send_address'); ?>" placeholder="Address for messages to go to"/></td>
        
          </tr>
        </table>

      <?php submit_button(); ?>
      </form>
    <?php
    }

    global $result;
$tagsList = get_option(esc_textarea('extra_post_info', ''));
$pageList = explode(PHP_EOL, $tagsList);
$result = $pageList;

    //Excludes plugin based on urls matched in array.
    function exclude_function()
    {
            include 'widget.php';
    }

    // Hook the WP action, runs the function that hides widget on specific page(s). 
    add_action('wp_enqueue_scripts', 'exclude_function');