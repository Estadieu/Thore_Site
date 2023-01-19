<!DOCTYPE html>
<html lang="en"> 
<?php include 'inclure/head.php'; ?>
<body>
<?php include 'inclure/navbar.php'; ?>
<div class="jumbotron nomdeclasse" style="margin-top: 0; margin-bottom: 0vh;">
		 <div id="last-results" class="container-fluid">
        	<div id="label">
          		<p>Notre dernier résultat</p>
        	</div>
		</div>
        <div class="container" id="results">
          <div class="row">
             <section class="row col-12 col-sm-12">
        <h3 class="col-md-4 col-sm-12 offset-md-4 text-center">{{ match.dateMatch }}</h3>
        <div class="col-md-3 col-sm-2 offset-md-2 text-center">
          <img src="{{club.logo}}" alt="logo club">
          
        </div>
       
        <div class="col-md-3  col-sm-2 text-center">
          <img src="{{adver.logo}}" alt="logo club">
      
        </div>
    </section>
          </div>
        </div>
      </div>
      <?php include 'inclure/footer.php'; ?>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v6.0"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>