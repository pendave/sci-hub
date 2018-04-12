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
        <div class="container">

        <div class="content">
        <div class="columns">
        <div class="column title is-half">
        <h1> removing barriers in the way of science 👩‍🔬</h1>
  </div> </div>
  </div>
        <div class="container">
        <div class="column is-half">
        <form action="form.php" method="post">
      
       


        <div class="field">
  

<div class="field">
  <label class="label">Enter DOI or PMID or URL</label>
  <div class="control">
    <input class="input" type="text" name="url" placeholder="DOI or PMID or URL">
  </div>
</div>
<div class="field is-grouped">
  <div class="control">
    <button type="submit" class="button is-link">Submit</button>
    <a href="index.php" class="button is-danger">Alternate Method 1</a>

  </div>

</form>
  </div>
<h4>Please check if the paper you r lookin for is cached  then Download 🙂<br> reload to refresh files</h4>


<br>

 </div>


<br>
 


<br>
<table>

<tbody>
<?php 
 

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
<strong>Date uploaded: </strong>'.date("D dS M,Y h:i a", filectime($fname)).'<br>
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

      

       Donate bitcoin : 3HhxvvarBvYg9jaNzLvrpPYccmH6hkXERs 
       Donate ETH only: 0x5Ed4E4be33d66940E91580706bcedcf15035DAa8
       Donate ETH/Tokens : 0x6a29b4ce606f883697a70ce0b31e80d07af1b2d9
     
</body>
</html>
