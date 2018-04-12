<!DOCTYPE html>
<html>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
        <script defer src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>
<title>Welcome to Sid's Server!</title>
<style>
    body {
        width: 35em;
        margin: 0 auto;
        font-family: Tahoma, Verdana, Arial, sans-serif;
    }
</style>
<style>
.ndfHFb-c4YZDc-i5oIFb.ndfHFb-c4YZDc-e1YmVc .ndfHFb-c4YZDc-Wrql6b {
    background: rgba(0,0,0,0.75);
    height: 40px;
    top: 12px;
    left: auto;
    padding: 0;
    display: none !important;
}
.button1 {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
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
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-3453540968742772",
          enable_page_level_ads: true
     });
</script>
</head>
<body>
</br>
<div class="content">
        <div class="columns">
        <h1> removing barriers in the way of science MK2 👩‍🔬</h1>
  </div> </div>
  </div>

</br>
 <?php echo $_POST["name"]; ?><br>
 
Your paper is: <?php echo $_POST["url"]; 

    $item=$_POST["url"];
 

$cmd = "/usr/bin/python  /var/www/html/scihub2.py -d $item -o /var/www/html/papers/";
$output = array();
$returnCode = -1;




exec(sprintf("/usr/bin/sudo -u root %s 2>&1", escapeshellcmd($cmd)), $output, $returnCode);

if ($returnCode != 0)
{
    echo sprintf("?", $returnCode);
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

echo "<br><li><a href=papers/$latest_filename>Latest File - $latest_filename</a></li><br>", PHP_EOL;
echo '</br><center><a href="http://link.bsid.io/st/?api=a70292e8a4e410ee94488ea4fd013159a0e1c666&url=https://paperdownloader.cf/papers/'.$latest_filename.'" class="button1">Download</a></center></br>';


echo "If Latest file is not yours, Please Please Try again later</br>";


echo '<iframe src="https://docs.google.com/gview?url=https://paperdownloader.cf/papers/'.$latest_filename.'&embedded=true" style="width:600px; height:500px;" frameborder="0">
    </iframe>'
    ?>
 



  
</body>
<script>
$(function(){
    $('#download').hide();
});
</script>

</html>