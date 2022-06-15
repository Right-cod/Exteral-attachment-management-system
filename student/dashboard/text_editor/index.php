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
      <a href="#" data-command='download' id="pdf-btn" data-toggle="tooltip" data-placement="top" title="Download"><i class='fa fa-download'></i></a>
      <a href="#" data-toggle="tooltip" data-placement="top" id="saveme" get-data="editor-1" title="Save"><i class='fa fa-save'></i></a>
        <a href="#" data-command='undo' data-toggle="tooltip" data-placement="top" title="Undo"><i class='fa fa-undo'></i></a>
        <a href="#" data-command='redo' data-toggle="tooltip" data-placement="top" title="Redo"><i class='fa fa-redo '></i></a>
				<a href="#" data-command='removeFormat' data-toggle="tooltip" data-placement="top" title="Clear format"><i class='fa fa-times '></i></a>
        <div class="fore-wrapper"><i class='fa fa-font' data-toggle="tooltip" data-placement="top" title="text color" style='color:#C96;'></i>
          <div class="fore-palette">
          </div>
        </div>
        <div class="back-wrapper"><i class='fa fa-font'  data-toggle="tooltip" data-placement="top" title="Background color" style='background:#C96;'></i>
          <div class="back-palette">
          </div>
        </div>
        <a href="#" data-command='bold' data-toggle="tooltip" data-placement="top" title="Bold"><i class='fa fa-bold'></i></a>
        <a href="#" data-command='italic' data-toggle="tooltip" data-placement="top" title="Italic"><i class='fa fa-italic'></i></a>
        <a href="#" data-command='underline' data-toggle="tooltip" data-placement="top" title="Underline"><i class='fa fa-underline'></i></a>
        <a href="#" data-command='strikeThrough' data-toggle="tooltip" data-placement="top" title="Strike through"><i class='fa fa-strikethrough'></i></a>
        <a href="#" data-command='justifyLeft' data-toggle="tooltip" data-placement="top" title="Left align"><i class='fa fa-align-left'></i></a>
        <a href="#" data-command='justifyCenter'><i class='fa fa-align-center' data-toggle="tooltip" data-placement="top" title="Center align"></i></a>
        <a href="#" data-command='justifyRight' data-toggle="tooltip" data-placement="top" title="Right align"><i class='fa fa-align-right'></i></a>
        <a href="#" data-command='justifyFull' data-toggle="tooltip" data-placement="top" title="Justify"><i class='fa fa-align-justify'></i></a>
        <a href="#" data-command='indent' data-toggle="tooltip" data-placement="top" title="Indent"><i class='fa fa-indent'></i></a>
        <a href="#" data-command='outdent'  data-toggle="tooltip" data-placement="top" title="Outdent"><i class='fa fa-outdent'></i></a>
        <a href="#" data-command='insertUnorderedList'  data-toggle="tooltip" data-placement="top" title="Unordered list"><i class='fa fa-list-ul'></i></a>
        <a href="#" data-command='insertOrderedList' data-toggle="tooltip" data-placement="top" title="Ordered list"><i class='fa fa-list-ol'></i></a>
        <a href="#" data-command='h1' data-toggle="tooltip" data-placement="top" title="H1">H1</a>
        <a href="#" data-command='h2'  data-toggle="tooltip" data-placement="top" title="H2">H2</a>
        <a href="#" data-command='createlink' data-toggle="tooltip" data-placement="top" title="Insert link"><i class='fa fa-link'></i></a>
        <a href="#" data-command='unlink' data-toggle="tooltip" data-placement="top" title="Unlink"><i class='fa fa-unlink'></i></a>
        <a href="#" data-command='insertimage' data-toggle="tooltip" data-placement="top" title="Insert image"><i class='fa fa-image'></i></a>
        <a href="#" data-command='p' data-toggle="tooltip" data-placement="top" title="Paragraph">P</a>
        <a href="#" data-command='subscript' data-toggle="tooltip" data-placement="top" title="Subscript"><i class='fa fa-subscript'></i></a>
        <a href="#" data-command='superscript'  data-toggle="tooltip" data-placement="top" title="Superscript"><i class='fa fa-superscript'></i></a>
        <a  data-placement="top" id="text_status"  style="width:100px;border:none;" data-toggle="tooltip" data-placement="top" title="Document status">ready</a>
        <a href="#" id="complete" data-toggle="tooltip" data-placement="top" style="width:200px;height:35px;background:green;color:#fff;"  title="Submit logbook for assessment">Submit for assessment</a>
      </div>
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
    $('#saveme').on('click',function(){
        const html = $("#editor-1").find('.editorAria').html();
        const sid=$('#sid').val();
        $('#text_status').html('saving...')
          //save code
          $.ajax({
			url : "save.php",
			method : "POST",
			data :{sid:sid,html:html},
			success : function(data){
        alert (data)
        }
      })
            //
        setTimeout(function(){
          $('#text_status').html('ready')
        },3000)
  })
  //complete start
  $('#complete').on('click',function(){
        const html = $("#editor-1").find('.editorAria').html();
        const sid=$('#sid').val();
        $('#text_status').html('saving...')
          //save code
   if(confirm("Are you sure you want to submit your logbook for assessment? Note that this action is irreversible.")){
    $.ajax({
			url : "save.php",
			method : "POST",
			data :{sid:sid,html:html,complete:1},
			success : function(data){
        alert ("You have successfully submitted your logbook for assesment.")
        window.location.href="../submit.php"
        }
      })
   }else{
     //nothing hapens
   }
            //
        setTimeout(function(){
          $('#text_status').html('ready')
        },3000)
  })


  //
setInterval(saveme, 10000);
function saveme() {
  const html = $("#editor-1").find('.editorAria').html();
const sid=$('#sid').val();
  $('#text_status').html('saving...')
  //save code
  $.ajax({
			url : "save.php",
			method : "POST",
			data :{sid:sid,html:html},
			success : function(data){

        }
      })
        //
  setTimeout(function(){
    $('#text_status').html('ready')
  },3000)
}
 

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
