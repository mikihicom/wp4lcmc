<?php
/*
Plugin Name: lcmc_widghet
Plugin URI: non.com
Description: my plugin
Version: 0.1
Author: mikihicom
Author URI: non.com
License: GPL2
*/
?>
<?php
/*  Copyright 2014年 mikihiko murao (email : mikihicom@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
	published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
?>
class sns_links extends WP_Widget {
  function sns_links() {
    // widget actual processes
    
  }
  function form($instance) {
    // outputs the options form on admin
  }
  function update($new_instance, $old_instance) {
    // processes widget options to be saved
  }
  function widget($args, $instance) {
    // outputs the content of the widget
  }
}
register_widget('sns_links');


class CategoryListImageWidget extends WP_Widget {
  function CategoryListImageWidget() {
    $widget_ops = array(
      'description' => __('New posts with Images in the cagetory on your sidebars.', 'cliw')
    );
    $this->WP_Widget('cliw', __('Category List Image Widget', 'cliw'), $widget_ops);
    add_action('get_header', array(&$this, 'cliwCss')); //別で関数作成
    add_action('get_header', array(&$this, 'cliwJq')); //別で関数作成
  } // end -- function CategoryListImageWidget

}// end -- class