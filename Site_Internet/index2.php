<!DOCTYPE html>
<html lang="fr">
    <?php include 'navbar.php'; ?>
    <header>
		 <img src="images/placeholder.jpg" style="position: relative; top: 0;">
	  </header>
      <div class="container" id="cta" style="display: inline-flex;
	padding-left: 22.5vw;
	margin-bottom: 3vh;"><section class="row col-12" id="facebook" style="margin-top: 3vh;">
            </section> <div><p class="text-uppercase" style="text-decoration: none; width: 22vw;margin-left: -10vw; margin-top: 23vh; padding: 1vh 0; color: rgba(119,28,24,0.90); font-family: 'Bebas Neue', cursive; font-weight: 500; font-size: 22px; border-radius: 15px; text-align: center; background-color: rgba(248,174,21,0.53);"> suivez l'actualité du club sur facebook !<br><a href="https://www.facebook.com/thorefootballclub/" target="_blank" style="color: rgba(255,255,255,0.90);
	font-family: 'Bebas Neue', cursive;
	font-weight: 400;
	font-size: 22px;
	background-color: rgba(119,28,24,0.90); 
	border-radius: 15px;
	padding-left: 1.5vw;
	padding-right: 1.5vw;"> J'y vais </a></p>
  </div></div>
	<script>
    let container=document.getElementById("facebook");
    let width = container.offsetWidth; let height = window.innerHeight*0.5;
    if(width > 500){
      width=500;
    }
    let facebook=`<div class="fb-page" data-href="https://www.facebook.com/thorefootballclub/" data-tabs="timeline" data-width="${width}" data-height="${height}" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/thorefootballclub/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/thorefootballclub/">Thoré Football Club 81</a></blockquote></div>`;
    container.innerHTML=facebook;
    </script>
</html>