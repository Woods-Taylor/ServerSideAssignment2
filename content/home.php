<article>
<?php getComic(); ?>
<?PHP
$a="hello";
?>
<script>
function echoComic(){
 alert("<?PHP getRandomComic(); ?>");
 }
</script>

<div>
  <button onclick="echoComic()">Random Comic</button>
</div>
<?php getRandomComic(); ?>
</article>
