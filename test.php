<?php
$output = shell_exec('scihub2pdf 10.1038/s41524-017-0032-0');
sleep(10);
echo "<pre>$output</pre>";
?>