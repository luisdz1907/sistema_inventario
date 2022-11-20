<?php

session_destroy();
$_SESSION["login"] = false;
echo "
<Script>
window.location.reload();
</Script>
";
