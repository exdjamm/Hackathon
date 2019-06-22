<?php 
$url_do_arquivo = "https://docs.google.com/spreadsheets/d/e/2PACX-1vQ6h1RQM8ve9B9vB-cwH1lRyC95NwmB0b_28p51fZzOltMn_SttWeCUdH38B05ITvCC5Thpzh8zzIWm/pub?gid=2132884969&single=true&output=csv";
if (($identificador = fopen($url_do_arquivo, 'r')) !== FALSE) {
    $con = 1;
    while (($linha_do_arquivo = fgetcsv($identificador, 0, ",")) !== FALSE) {
        if($con !== 1 ){
        	echo "<div class='card hoverable'>
    <div class='card-image waves-effect waves-block waves-light'>
      <!-- Card Image -->
      <img class='activator' src='http://www.civimi.com/beta/civimi/img/basic-img/user.jpg'>
    </div>
    <div class='card-content activator' style='cursor:pointer'>
      <!-- Card Title -->
      <span class='card-title grey-text text-darken-4'>$linha_do_arquivo[1]</span>
    </div>
    <div class='card-reveal'>
      <!-- Card Reveal Content -->
      <span class='card-title grey-text text-darken-4'>$linha_do_arquivo[1]<i class='material-icons right'>close</i></span>

      <p>
        $linha_do_arquivo[3]
        </br> 
        $linha_do_arquivo[5] 
        </br>
        $linha_do_arquivo[6]
      </p>

      <p class='center'>
        <!-- Sample Button -->
        <a href='#' class='yellow darken-4 waves-effect waves-light btn'><i class='fa fa-cloud left'></i>Button</a>
        <br><br>
        Colors from:<br>
        <a class='orange-text text-darken-2' href='http://materializecss.com/color.html'>http://materializecss.com/color.html</a><br><br>
        Icons from:<br>
        <a class='orange-text text-darken-2' href='http://fortawesome.github.io/Font-Awesome/icons/''>http://fortawesome.github.io/Font-Awesome/icons/</a><br>
        <i class='fa fa-music' style='font-size:50pt'></i>
      </p>

    </div>
  </div>";

        	//echo " $linha_do_arquivo[1], $linha_do_arquivo[4], $linha_do_arquivo[5]";
		}
		$con += 1;       
    }
    fclose($identificador);
} else {
    echo 'Não foi possível abrir o arquivo';
}

?>