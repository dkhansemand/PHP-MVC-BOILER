<h1>Error 404! Page not found!</h1>
<?php $msg = $msg ?? new FlashMessages(); echo  @$msg->hasErrors() ? $msg->display() : null; ?>