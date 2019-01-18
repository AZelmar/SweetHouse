<footer id="pageFooter">
<span id="copyright"><?= footer::copyright ?></span>
<span id="localChoice"><span class="flag-icon flag-icon-fr" data-flag="fr"></span><span class="flag-icon flag-icon-gb" data-flag="en"></span></span>
</footer>
<style>
#pageFooter{
  position: fixed;
  left: 0;
  bottom: 0;
  height: 50px;
  width: 100%;
  background-color : #216583;
  color : white;
}
#copyright{
  position: fixed;
  left: 20px;
  line-height: 50px; 
  vertical-align: middle;
}
#localChoice
{
  float:right;
  margin-right: 20px;
}
.flag-icon{
  width: 50px;
  height: 50px;
  margin-left: 10px;
}
</style>
<script>
function htmlEntities(str) {
    return String(str).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;');
}
$(document).ready(function(){
  $('.flag-icon').click(function(){
    var page = $(location).attr('pathname').match(/\w+$/)[0];
    window.location.replace("<?= $basename?>/"+$(this).data("flag")+"/"+page);
  });
});
</script>