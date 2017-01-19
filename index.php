<!DOCTYPE html>
<html>

<head>
  <!-- Site made with Mobirise Website Builder v3.9.2, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v3.9.2, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">



</head>

<body>

  <section id="ext_menu-0">

    <nav class="navbar navbar-dropdown navbar-fixed-top" position="inherit">
      <div class="container">

        <div class="mbr-table">
          <div class="mbr-table-cell">

            <div class="navbar-brand">

              <a class="navbar-caption" href="">Pokedex</a>
            </div>

          </div>
          <div class="mbr-table-cell">

            <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

            <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
              <li class="nav-item"><a class="nav-link link" href="">OVERVIEW</a></li>
            </ul>
            <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

          </div>
        </div>

      </div>
    </nav>
  
  </section>

  <section class="engine"><a rel="external" href="https://mobirise.com">top website builder</a></section>
  <section class="mbr-section mbr-section-hero mbr-section-full mbr-section-with-arrow" id="header1-1" style="background-color: rgb(61, 142, 185);">



    <div class="mbr-table-cell">
<form method="post">
  <h1 align="center" position="fixed">
    Search a pokemon below and find out what its stats are.
  </h1>
      <div class="container">
        <input type="text" class="form-control" name="txtpokemon">
        <input type="submit" class="btn" name="btnsubmit" value="submit">
        <?php
        
        if(isset($_POST['btnsubmit'])){
        $name = $_POST['txtpokemon'];
$name = strtolower($name);
$image = "";
$filename = "pokemon".$name.".txt";
if (file_exists($filename)) {
    $data = file_get_contents($filename);
    $image = $name . ".jpg";
    
} else {
    $data = file_get_contents("http://pokeapi.co/api/v2/pokemon/".$name);
    if($data != ""){
      file_put_contents ( $filename , $data);
      $tempData = json_decode($data, true);
      $input = $tempData['sprites']['front_default'];
      $output = $name.'.jpg';
      file_put_contents($output, file_get_contents($input));
    }
}
    

    if($data != ""){
      $rData = json_decode($data, true);
      //Getting name and ID; Works
      if($image != ""){
        echo("<img src='". $image ."'></img><br />");
      }
      else{
        echo ("<img src='" . $rData['sprites']['front_default']."'></img><br />");
      }
      echo ("Found a pokemon with Name: " . $rData['name'] . "<br />");
      echo ("PokeDex entry number is : " . $rData['id'] . "<br />");
      echo ("<br />");
      //Method one to get types; Works
      echo ("Its types are : <br /><table>");
      $count = 0;
      while($count != count($rData['types'])){
        echo ("<tr><th>Type : </th><td> " . $rData['types'][$count]['type']['name'] . "</td></tr>");
        $count++;
      }
      
      echo ("</table><br />");
      //Getting base stats
      echo("Its base stats are : <br /><table>");
      echo ("<tr><th>Speed : </th><td> ".$rData['stats'][0]['base_stat']. "</td></tr>");
      echo ("<tr><th>Special-Defence : </th><td> ".$rData['stats'][1]['base_stat']. "</td></tr>");
      echo ("<tr><th>Special-Attack : </th><td> ".$rData['stats'][2]['base_stat']. "</td></tr>");
      echo ("<tr><th>Defence : </th><td> ".$rData['stats'][3]['base_stat']. "</td></tr>");
      echo ("<tr><th>Attack : </th><td> ".$rData['stats'][4]['base_stat']. "</td></tr>");
      echo ("<tr><th>HP : </th><td> ".$rData['stats'][0]['base_stat']. "</td></tr></table>");
      echo ("<br /><br />");
    }else{
      echo ("No pokemon found with that name.");
    }
        }
?>

        <div class="row">
          <div class="mbr-section col-md-10 col-md-offset-1 text-xs-center">

            <h1 class="mbr-section-title display-1"></h1>
            <p class="mbr-section-lead lead"></p>

          </div>
        </div>
      </div>
          </form>
    </div>

    <div class="mbr-arrow mbr-arrow-floating" aria-hidden="true"><a href="#footer1-2"><i class="mbr-arrow-icon"></i></a></div>

  </section>



  <footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-2" style="background-color: rgb(50, 50, 50); padding-top: 1.75rem; padding-bottom: 1.75rem;">

    <div class="container">
      <p class="text-xs-center">Copyright &COPY Tim Klomp</p>
    </div>
  </footer>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/viewportChecker/jquery.viewportchecker.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>


  <input name="animation" type="hidden">
</body>

</html>