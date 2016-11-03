<p>
  <label>Title</label> 
  <input id="<?php echo $this->get_field_id('title'); ?>" class="widefat"name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
</p>
<p>
  <label>Copy</label> 
  <textarea id="<?php echo $this->get_field_id('copy'); ?>" class="widefat" rows="6" name="<?php echo $this->get_field_name('copy'); ?>"><?php echo $copy; ?></textarea>
</p>
<p>
  <label>URL</label> 
  <input id="<?php echo $this->get_field_id('url'); ?>" class="widefat" name="<?php echo $this->get_field_name('url'); ?>" type="text" value="<?php echo $url; ?>" />
</p>
<p>
  <label>URL Copy</label> 
  <input id="<?php echo $this->get_field_id('url_copy'); ?>" class="widefat" name="<?php echo $this->get_field_name('url_copy'); ?>" type="text" value="<?php echo $url_copy; ?>" />
</p>
<p>
  <label>Open URL In New Window?</label> 
  <input id="<?php echo $this->get_field_id('new_window'); ?>" type="checkbox" name="<?php echo $this->get_field_name('new_window'); ?>" value="1" <?php checked( $new_window, 1 ); ?> />
</p>
<p>
  <label>Special Class</label> 
  <input id="<?php echo $this->get_field_id('special_class'); ?>" class="widefat" name="<?php echo $this->get_field_name('special_class'); ?>" type="text" value="<?php echo $special_class; ?>" />
</p>