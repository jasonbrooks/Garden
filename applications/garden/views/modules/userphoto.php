<?php if (!defined('APPLICATION')) exit();
// If the photo contains an http://, it is just an icon, don't show it here.
if ($this->User->Photo != '' && strtolower(substr($this->User->Photo, 0, 7)) != 'http://') {
   ?>
   <div class="Photo">
      <?php echo Img('uploads/p'.$this->User->Photo); ?>
   </div>
   <?php
}
