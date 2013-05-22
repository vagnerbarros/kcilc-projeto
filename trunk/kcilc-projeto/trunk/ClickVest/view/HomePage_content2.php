<div id="fb-root"></div>

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<script>
  $(function() {
    $( "#dialog" ).dialog();
  });
</script>

<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<style>

.corpo{
    width: 980px;
    margin: auto;
}

.img{
    width: 820px;
    margin: auto;
}
</style>

<div id="dialog" title="ClickVest">
  <p>Bem-vindo ao ClickVest, em breve novidades! Curta nossa Fan Page!</p>
</div>

<div class="corpo">
    <div class="img">
        <img src="template/css/img/logo.png" alt="ClickVest" width="820" height="360" />
    </div>
    <br/><br/>
    <center>
        <div class="fb-like" data-href="https://www.facebook.com/click.vest?fref=ts" data-send="true" data-width="480" data-show-faces="true" data-font="verdana"></div>
    </center>

</div>

