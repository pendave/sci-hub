<!DOCTYPE html>
<html>
<head>
<title>Scientific Paper downloader</title>
<meta name="Description" content="Free download Papers from IEEE, elsevier etc. SCI-Hub alternative. Sci-hub downloader free">
<meta name="Keywords" content="sci-hub,scihub,ieee downloader">

     <meta name="viewport" content="width=device-width, initial-scale=0.6">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
        <script defer src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script>
       function onSubmit(token) {
         document.getElementById("form").submit();
       }
       function validateRecaptcha() {
    var response = grecaptcha.getResponse();
    if (response.length === 0) {
        alert("Please verify you are not a Robot 🤖");
        return false;
    } else {
        alert("validated");
        return true;
    }
}
     </script>
   


<title>PaperDownloader.CF!</title>
<style>
    body {
        width: 35em;
        margin: 0 auto;
        font-family: Tahoma, Verdana, Arial, sans-serif;
    }
</style>
</head>


        <body>
        <div class="container">

        <div class="content">
        <div class="columns">
        <div class="column title is-half">
        <h1> removing barriers in the way of science MK2 👩‍🔬</h1>
  </div> </div>
  </div>
        <div class="container">
        <div class="column is-half">
        
        <form id='form' action="formalt.php" method="post" onsubmit="return validateRecaptcha();">
      
       


        <div class="field">
  

<div class="field">
  <label class="label">Enter DOI or PMID or URL</label>
  <div class="control">
    <input class="input" type="text" name="url" placeholder="DOI or PMID or URL">
  </div>
</div>
<div class="field is-grouped">
  <div class="control">
  <a onlick="ga('send', 'event', { eventCategory: 'Download', eventAction: 'button_click', eventLabel: 'Downloaded'});
"
class="g-recaptcha"
data-sitekey="6LeZjkYUAAAAAI1qDC5RDz-DQMAcEFim9_qsexqS"
data-callback="onSubmit" >
  </a>
    
  </div>

</form>

  </div>
  
<h4>If the paper doesnt load try after sometime :)<br> reload to refresh files</h4>


<br>

</div>


<br>



<br>
<table>

<tbody>
<div class="notification is-success">
  
  The access of students and researchers to the specialized and new archive of English articles has always been one of the issues for conducting projects and academic thesis. Many publishers of the articles allow access to the full text of the article only for the sake of receiving high fees, and universities are generally not able to purchase the entire archive of articles required by students. The paperdownloader.cf website is a comprehensive and simple solution to the problem of downloading the article. You can simply enter the page address of the 
  </div>
<?php 


$path = "papers"; 

// Open the folder  
$dir_handle = @opendir($path) or die("Unable to open $path");  

// Loop through the files  
while (false !== ($file = readdir($dir_handle))) { 
if(preg_match("/\.pdf$|\.mp3$/i", $file))  
{ 
 
$title = str_replace("_", " ", $file); 
$title = explode(".", $title); 
$title = $title[0]; 

$name = $file; 
$name = explode(".", $name); 
$name = $name[0]; 

$filename = $name.".txt";  
$fp = fopen($filename, "r" ); 
$description = fread( $fp, filesize( $filename ) ); 
$description = strip_tags($description, '<br><a>'); 
if(!$fp) 
{ 
$description =  "Sorry, there is no description for: ".$title."."; 

} 
 
$size = filesize($file); 

fclose($myFile); 

$fname = "papers/$file";




echo ' 
<tr><td>
<p> 

<span class="style8"><strong>Title: </strong>'.$title.'<br> 
<strong>Date uploaded: </strong>'.date("D dS M,Y h:i a", filemtime($fname)).'<br>
<strong>Download: </strong><a href="'.$fname.'" onMouseOver="MM_displayStatusMsg(\'Click to download: '.$file.'\');return document.MM_returnValue">'.$file.'</a><br> 
</span><br><hr color=white> 

</p> 
</tr></td>

';    
}  
}    
// Close  
closedir($dir_handle);  

?>



</tbody>
</table>  
Donate Via Affiliates
Please Bookmark the below amazon link to help us and shop using this link to help us
<?php 
echo '<a target="_blank" href="https://goo.gl/X5usi5">Amazon Link</a><img src="//ir-na.amazon-adsystem.com/e/ir?t=bsidio-20&l=ur2&o=1" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />';
?>
</br>
     
    
</body>
</html>
