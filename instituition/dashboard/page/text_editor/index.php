<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Write logbook</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.6.0/flatly/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body><div id="jquery-script-menu">
<div class="jquery-script-center">
<div class="jquery-script-ads"><script type="text/javascript">
google_ad_client = "ca-pub-2783044520727903";
</script>
<script type="text/javascript" src="https://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
<div class="jquery-script-clear"></div>
</div>
</div>
<?php
include("../dbconnect.php");

$conn = DBconnect();

$id=$_GET['id'];
$gall=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM students WHERE id=$id"));
?>
<input type="hidden" name="" value="<?php echo $id; ?>" id="sid">
<input readonly id="filename-input" style="margin-left:1rem;outline:none;border:none;" value="<?php echo $gall['adm']."_logbook"; ?>">
<div class="row align-items-center justify-content-center">
    <div class="col-md-12">
			<div class="editor" id="editor-1">
      <div class="toolbar">
      <a href="#" data-command='download' id="pdf-btn" data-toggle="tooltip" data-placement="top" title="Download"><i class='fa fa-download'></i></a></div>
      <div id='editor' class="editorAria" contenteditable>
        
      </div>        
        </div>
				</div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<?php
include 'script.php';
include 'htmltopdf.php';
?>
<script>
  $(document).ready(function(){
  const sid=$('#sid').val();
  $.ajax({
			url : "save.php",
			method : "POST",
			data :{check:sid},
			success : function(data){
        $("#editor").html(data);
        }
      })
})
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script>
try {
  fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function(response) {
    return true;
  }).catch(function(e) {
    var carbonScript = document.createElement("script");
    carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
    carbonScript.id = "_carbonads_js";
    document.getElementById("carbon-block").appendChild(carbonScript);
  });
} catch (error) {
  console.log(error);
}
</script>
</body>
</html>
