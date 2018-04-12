<!DOCTYPE html>
<html>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
        <script defer src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>
<title>Welcome to Paperdownloader.cf</title>
<style>
    body {
        width: 35em;
        margin: 0 auto;
        font-family: Tahoma, Verdana, Arial, sans-serif;
    }
</style>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-88921104-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-88921104-3');
</script>

</head>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your url address is: <?php echo $_POST["url"]; 

    $item=$_POST["url"];
 

$cmd = "/usr/bin/python  /var/www/html/scihub2.py -d $item -o /var/www/html/papers/";
$output = array();
$returnCode = -1;




exec(sprintf("/usr/bin/sudo -u root %s 2>&1", escapeshellcmd($cmd)), $output, $returnCode);

if ($returnCode != 0)
{
    echo sprintf("WTF Dude?😅", $returnCode);
    return;
}

$path = "papers"; 

$latest_ctime = 0;
$latest_filename = '';    

$d = dir($path);
while (false !== ($entry = $d->read())) {
  $filepath = "{$path}/{$entry}";
  // could do also other checks than just checking whether the entry is a file
  if (is_file($filepath) && filectime($filepath) > $latest_ctime) {
    $latest_ctime = filectime($filepath);
    $latest_filename = $entry;
  }
}

echo "<br><li><a href=papers/$latest_filename>⬇️Latest File - $latest_filename</a></li><br>", PHP_EOL;

echo "If Latest file is not yours, Please Please Try again later😈";
echo '<embed src="papers/'.$latest_filename.'" width="500" height="375" type="application/pdf">' ;
?>



  
</body>
</html>