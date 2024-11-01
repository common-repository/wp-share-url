<?php
/*
Plugin Name: WP Share URL
Plugin URI: http://www.sooource.net/wordpress-share-url
Description: Displays a link to the code to insert a link to your site at the end of each blog entry. There is nothing specifically to do this is not necessary - just activate the plugin, that's all. In addition, the buttons are implemented in the add bookmark social networks.
Author URI: http://www.sooource.net
Author: Sooource.NET.
Version: 1.0.2
*/

$plugname = "WP Share URL";

function wpsu_code_add_admin() {
  global $plugname;
  add_options_page(__('Settings').': '.$plugname, $plugname, 'edit_themes', basename(__FILE__), 'wpsu_code_to_admin');
}

function wpsu_code_to_admin() {
  global $plugname;
?>

<div class="wrap">
	<?php screen_icon(); ?>
	<h2><?php echo __('Settings'); ?>: <?php echo $plugname; ?></h2>
  <?php
    if (isset($_POST['wpsu_save'])) {
      $yashare = '';

      if (isset($_POST['wpsu_yablogger']))
        $yashare .= " 'blogger'";
      if (isset($_POST['wpsu_yadigg']))
        $yashare .= " 'digg'";
      if (isset($_POST['wpsu_yaevernote']))
        $yashare .= " 'evernote'";
      if (isset($_POST['wpsu_yadelicious']))
        $yashare .= " 'delicious'";
      if (isset($_POST['wpsu_yadiary']))
        $yashare .= " 'diary'";
      if (isset($_POST['wpsu_yafacebook']))
        $yashare .= " 'facebook'";
      if (isset($_POST['wpsu_yafriendfeed']))
        $yashare .= " 'friendfeed'";
      if (isset($_POST['wpsu_yagplus']))
        $yashare .= " 'gplus'";
      if (isset($_POST['wpsu_yajuick']))
        $yashare .= " 'juick'";
      if (isset($_POST['wpsu_yaliveinternet']))
        $yashare .= " 'liveinternet'";
      if (isset($_POST['wpsu_yalinkedin']))
        $yashare .= " 'linkedin'";
      if (isset($_POST['wpsu_yalj']))
        $yashare .= " 'lj'";
      if (isset($_POST['wpsu_yamoikrug']))
        $yashare .= " 'moikrug'";
      if (isset($_POST['wpsu_yamoimir']))
        $yashare .= " 'moimir'";
      if (isset($_POST['wpsu_yamyspace']))
        $yashare .= " 'myspace'";
      if (isset($_POST['wpsu_yaodnoklassniki']))
        $yashare .= " 'odnoklassniki'";
      if (isset($_POST['wpsu_yatutby']))
        $yashare .= " 'tutby'";
      if (isset($_POST['wpsu_yatwitter']))
        $yashare .= " 'twitter'";
      if (isset($_POST['wpsu_yavkontakte']))
        $yashare .= " 'vkontakte'";
      if (isset($_POST['wpsu_yayaru']))
        $yashare .= " 'yaru'";
      if (isset($_POST['wpsu_yayazakladki']))
        $yashare .= " 'yazakladki'";

      update_option('wpsu_yashare', $yashare);
      echo '<div id="setting-error-settings_updated" class="updated settings-error"><p><b>'.__('Settings saved.').'</b></p></div>';
    }

    $yashare = get_option('wpsu_yashare');
  ?>
  <form method="post">
    <table class="form-table">
      <tr valign="top">
        <th scope="row">Yandex <?php echo __('Bookmarks'); ?>:</th>
        <td>
          <fieldset><label><input type="checkbox" name="wpsu_yablogger" value="wpsu_yablogger" <?php if(strpos($yashare,'blogger')!== false) { echo 'checked="checked"'; } ?> >
blogger - <a href="http://blogger.com" target="_blank">http://blogger.com</a></label></fieldset>

          <fieldset><label><input type="checkbox" name="wpsu_yadigg" value="wpsu_yadigg" <?php if(strpos($yashare,'digg')!== false) { echo 'checked="checked"'; } ?> >
digg - <a href="http://digg.com" target="_blank">http://digg.com</a></label></fieldset>

          <fieldset><label><input type="checkbox" name="wpsu_yaevernote" value="wpsu_yaevernote" <?php if(strpos($yashare,'evernote')!== false) { echo 'checked="checked"'; } ?> >
evernote - <a href="http://evernote.com" target="_blank">http://evernote.com</a></label></fieldset>

          <fieldset><label><input type="checkbox" name="wpsu_yadelicious" value="wpsu_yadelicious" <?php if(strpos($yashare,'delicious')!== false) { echo 'checked="checked"'; } ?> >
delicious - <a href="http://www.delicious.com" target="_blank">http://www.delicious.com</a></label></fieldset>

          <fieldset><label><input type="checkbox" name="wpsu_yadiary" value="wpsu_yadiary" <?php if(strpos($yashare,'diary')!== false) { echo 'checked="checked"'; } ?> >
diary - <a href="http://www.diary.ru" target="_blank">http://www.diary.ru</a></label></fieldset>

          <fieldset><label><input type="checkbox" name="wpsu_yafacebook" value="wpsu_yafacebook" <?php if(strpos($yashare,'facebook')!== false) { echo 'checked="checked"'; } ?> >
facebook - <a href="http://www.facebook.com" target="_blank">http://www.facebook.com</a></label></fieldset>

          <fieldset><label><input type="checkbox" name="wpsu_yafriendfeed" value="wpsu_yafriendfeed" <?php if(strpos($yashare,'friendfeed')!== false) { echo 'checked="checked"'; } ?> >
friendfeed - <a href="https://friendfeed.com" target="_blank">https://friendfeed.com</a></label></fieldset>

          <fieldset><label><input type="checkbox" name="wpsu_yagplus" value="wpsu_yagplus" <?php if(strpos($yashare,'gplus')!== false) { echo 'checked="checked"'; } ?> >
gplus - <a href="https://plus.google.com" target="_blank">https://plus.google.com</a></label></fieldset>

          <fieldset><label><input type="checkbox" name="wpsu_yajuick" value="wpsu_yajuick" <?php if(strpos($yashare,'juick')!== false) { echo 'checked="checked"'; } ?> >
juick - <a href="http://juick.com" target="_blank">http://juick.com</a></label></fieldset>

          <fieldset><label><input type="checkbox" name="wpsu_yaliveinternet" value="wpsu_yaliveinternet" <?php if(strpos($yashare,'liveinternet')!== false) { echo 'checked="checked"'; } ?> >
liveinternet - <a href="http://www.liveinternet.ru" target="_blank">http://www.liveinternet.ru</a></label></fieldset>

          <fieldset><label><input type="checkbox" name="wpsu_yalinkedin" value="wpsu_yalinkedin" <?php if(strpos($yashare,'linkedin')!== false) { echo 'checked="checked"'; } ?> >
linkedin - <a href="http://www.linkedin.com" target="_blank">http://www.linkedin.com</a></label></fieldset>

          <fieldset><label><input type="checkbox" name="wpsu_yalj" value="wpsu_yalj" <?php if(strpos($yashare,'lj')!== false) { echo 'checked="checked"'; } ?> >
lj - <a href="http://www.livejournal.com" target="_blank">http://www.livejournal.com</a></label></fieldset>

          <fieldset><label><input type="checkbox" name="wpsu_yamoikrug" value="wpsu_yamoikrug" <?php if(strpos($yashare,'moikrug')!== false) { echo 'checked="checked"'; } ?> >
moikrug - <a href="http://moikrug.ru" target="_blank">http://moikrug.ru</a></label></fieldset>

          <fieldset><label><input type="checkbox" name="wpsu_yamoimir" value="wpsu_yamoimir" <?php if(strpos($yashare,'moimir')!== false) { echo 'checked="checked"'; } ?> >
moimir - <a href="http://my.mail.ru" target="_blank">http://my.mail.ru</a></label></fieldset>

          <fieldset><label><input type="checkbox" name="wpsu_yamyspace" value="wpsu_yamyspace" <?php if(strpos($yashare,'myspace')!== false) { echo 'checked="checked"'; } ?> >
myspace - <a href="http://www.myspace.com" target="_blank">http://www.myspace.com</a></label></fieldset>

          <fieldset><label><input type="checkbox" name="wpsu_yaodnoklassniki" value="wpsu_yaodnoklassniki" <?php if(strpos($yashare,'odnoklassniki')!== false) { echo 'checked="checked"'; } ?> >
odnoklassniki - <a href="http://odnoklassniki.ru" target="_blank">http://odnoklassniki.ru</a></label></fieldset>

          <fieldset><label><input type="checkbox" name="wpsu_yatutby" value="wpsu_yatutby" <?php if(strpos($yashare,'tutby')!== false) { echo 'checked="checked"'; } ?> >
tutby - <a href="http://i.tut.by" target="_blank">http://i.tut.by</a></label></fieldset>

          <fieldset><label><input type="checkbox" name="wpsu_yatwitter" value="wpsu_yatwitter" <?php if(strpos($yashare,'twitter')!== false) { echo 'checked="checked"'; } ?> >
twitter - <a href="http://twitter.com" target="_blank">http://twitter.com</a></label></fieldset>

          <fieldset><label><input type="checkbox" name="wpsu_yavkontakte" value="wpsu_yavkontakte" <?php if(strpos($yashare,'vkontakte')!== false) { echo 'checked="checked"'; } ?> >
vkontakte - <a href="http://vk.com" target="_blank">http://vk.com</a></label></fieldset>

          <fieldset><label><input type="checkbox" name="wpsu_yayaru" value="wpsu_yayaru" <?php if(strpos($yashare,'yaru')!== false) { echo 'checked="checked"'; } ?> >
yaru - <a href="http://my.ya.ru" target="_blank">http://my.ya.ru</a></label></fieldset>

          <fieldset><label><input type="checkbox" name="wpsu_yayazakladki" value="wpsu_yayazakladki" <?php if(strpos($yashare,'yazakladki')!== false) { echo 'checked="checked"'; } ?> >
yazakladki - <a href="http://zakladki.yandex.ru" target="_blank">http://zakladki.yandex.ru</a></label></fieldset>

        </td>
      </tr>
    </table>
  <div class="submit">
	  <input name="wpsu_save" type="submit" class="button-primary" value="<?php echo __('Save Draft'); ?>" />
  </div>
</form>

</div>
<?php
}

add_action('admin_menu', 'wpsu_code_add_admin');

if (function_exists('register_uninstall_hook'))
  register_uninstall_hook(__FILE__, 'wpsu_deinstall');
  
function wpsu_deinstall() {
  delete_option('wpsu_yashare');
}

if (function_exists('add_filter')) {
  class widget_shareurl {
    function widget_shareurl() {
      add_filter('the_content', array(&$this, shareurl_code));
    }
    function shareurl_code($content) {
      if ( is_single() ) {
        $u = get_permalink();
        $t = get_the_title();

        $yashare = str_replace(' ',',',trim(get_option('wpsu_yashare')));

        if(strlen($yashare)>1) {
          $content .='<script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
                      <script type="text/javascript">'.
                      "new Ya.share({
                        element: 'YaShare',
                        elementStyle: {
                          'type': 'none',
                          'border': false,
                          'quickServices': [" . $yashare . "]
                        }
                      });
                      </script>".
                      '<span id="YaShare"></span>';
        }
        $content .='<p><span style="font-weight:bold;">URL</span>:<textarea rows="1" cols="50" name="text" style="width:99%" onClick="this.select()">'.$u.'</textarea></p>'.
                   '<p><span style="font-weight:bold;">bbCode</span>:<textarea rows="2" cols="50" name="text" style="width:99%" onClick="this.select()">[url='.$u.']'.$t.'[/url]</textarea></p>'.
                   '<p><span style="font-weight:bold;">HTML</span>:<textarea rows="3" cols="50" name="text" style="width:99%" onClick="this.select()"><a href="'.$u.'" title="'.$t.'" target="_blank">'.$t.'</a></textarea></p>'.
                   '<p style="font-size:11px;">&copy; Плагин &laquo;<a href="http://wordpress-theming.ru" title="Спонсор создания плагина: темы WordPress">Share URL</a>&raquo;.</p>';
      }
      return 
        $content; 
    }
  }
  $widget &= new widget_shareurl();
}
?>
