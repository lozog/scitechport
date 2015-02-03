<?php
setcookie(ID_my_site, "", time()-3600);
setcookie(Key_my_site, "", time()-3600);
session_destroy();
?>
<script type="text/javascript">
		window.location = "index.php"
		</script>