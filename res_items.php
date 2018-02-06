<?php
   // include ("item.php");
    include ("calcs.php");
	$max = 7;
	$total =11;
	$niveles = '<table id="niveles">';
	$niveles .= '<tr>';
	$count = '';
	for ($x = 1; $x <= $max; $x++) {
		$niveles .= '<td class="nivel' . $x . '">' . 's<sub>' .$x. '</sub>'.  '</td>';		
	}
	$niveles .= '</tr>';
	$niveles .= '</table>';
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Filtros</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"><link href="https://file.myfontastic.com/VDXsxxmWcbZZG8xXax2UK4/icons.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="estilo_barra.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
		<script type="text/javascript" src="JS/jquery-1.12.4.js"></script>
		<script type="text/javascript" src="http://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
			
		<script type="text/javascript">
			
            //Filter for the Trim tool: Filters the data table according to the selected color (button).
			function fun(value){

				for (var x = 1; x < 7; x++) {
                    if (x < value) {
						$('#datos td.nivel' + x).parent('tr').addClass('oculto');
					} else {
							$('#datos td.nivel' + x).parent('tr').removeClass('oculto');
					}
                }
			}
            
            //
            function show_valueS(x)
				{
				 document.getElementById("CI").innerHTML=x;
				}
				function show_valueE(x)
				{
				 document.getElementById("EC").innerHTML=x;
				}

            // Filter visualization options: allows filtering according to the selected criteria.
            function hideColumns(sel){
               
                if (sel=="allInformation") {
                    for (i=3 ; i<=$('#tableDatosBody tr:last td').length ; i++){
                        $('.col_' + i).show();		
                    }	
                }else {
                    for (i=3 ; i<=6 ; i++){
                        if (i!=sel){
                            $('.col_'+sel).show();
                            $('.col_' + i).hide();		
                        }
                    }
                }
            }


            
		</script>

		<script type="text/javascript">
			$(document).ready(function() {
				var oTablaDatos = $('#datos').DataTable({
					"scrollResize": true,
	    			"scrollY": 450,
	    			"scrollCollapse": true,
	    			"paging": false,
					"order": [[0, "asc"]],
					"searching": false,
					"columnDefs": [
						{
							"targets": [1],
							"visible": true
						}
					]
				});
			});
		</script>
	</head>
	
	<body>
		<div class="menu_bar">
			<nav class = "menu">
				<ul>
					<li><a href="" title="">HOME</a></li>
					<li><a href="" title="">IMPORT</a></li>
					<li><a href="" title="">ABOUT US</a></li>
				</ul>
			</nav>
		</div>

			<!--<div class="encabezado">
				<img src= "images/A1.png" alt="Pages header" id="logos">
			</div>--> 

		<section>
			<br>
				<h1 id="title">2-tuple Linguistic Delphi Method to Validate a Questionnaire by Consensus for a Blended Enviroment</h1>
			<br>
		</section>

		<div class="options_bar">
			<table >
				<tr>
					<td>
						<div class="Visualization_select" id="consensus">
							<p> Visualization options: </p>
							<div class="styled-select semi-square">
							  <select onchange="hideColumns(this.value);">
							    <option value="allInformation">All information</option>
							    <option value="3">Collective Clarity</option>
							    <option value="4">Collective Writing</option>
							    <option value="5">Collective Presence</option>
							    <option value="6">Collective Answering Scale</option>
							    <option value="7">Average Relevance</option>
							    <option value="8">Consensus</option>
							  </select>
							</div>
						</div>
					</td>
					
					<td>
						<div class="options_bar" id="Consistency">
							<p> Trim Tool: visualizes crop items below the following label</p>	
					    <div class='btns'>
					      <label>
					        <input checked='' name='button-group' type='radio' value=1 class="bc" onclick="fun(this.value)">
					          <span class='btn first'>S<sub>0</sub></span>
					        </input>
					      </label>
					      <label>
					        <input name='button-group' type='radio' value=2 class="bc" onclick="fun(this.value)">
					          <span class='btn'>S<sub>1</sub></span>
					        </input>
					      </label>
					      <label>
					        <input name='button-group' type='radio' value=3 class="bc" onclick="fun(this.value)">
					          <span class='btn'>S<sub>2</sub></span>
					        </input>
					      </label>
					      <label>
					        <input name='button-group' type='radio' value='4' class="bc" onclick="fun(this.value)">
					          <span class='btn'>S<sub>3</sub></span>
					        </input>
					      </label>
					      <label>
					        <input name='button-group' type='radio' value='5' class="bc" onclick="fun(this.value)">
					          <span class='btn'>S<sub>4</sub></span>
					        </input>
					      </label>
					      <label>
					        <input name='button-group' type='radio' value='6' class="bc" onclick="fun(this.value)">
					          <span class='btn'>S<sub>5</sub></span>
					        </input>
					      </label>
					      <label>
					        <input name='button-group' type='radio' value='7' class="bc" onclick="fun(this.value)">
					          <span class='btn last'>S<sub>6</sub></span>
					        </input>
					      </label>
					    </div>
					  
						</div>
					</td>
					<td class="w10">
						<div class="options_bar" id = "Consistency_Index">
						  <p>Satisfiable Consensus Level: </p>
						   <input type="range" min="0" max="1"  step = ".1" value="0" class="slider" id="Consistency_Index" onchange="show_valueS(this.value);"><br>
                          
						   <label name="CI" id = "CI">0</label>
						</div>
					</td>
					<td class="w10">
						<div class="options_bar" id = "Panel_Expert">
						  <p>Expert Panel Confidence: </p>
						   <input type="range" min="0" max="1"  step = ".1" value="0" class="slider" id="expert_confidence" onchange="show_valueE(this.value);"><br>
						   <label name="EC" id = "EC">0</label>
						</div>
					</td>
					<td class="w20">
						<div class="options_bar" id="Total_score">
							<p> Questionnaire Total Score</p>
							<h3>(Very correct , -0.45 )</h3>
						</div>
					</td>
					<td>
						<div id="datos_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="datos"></label></div>
					</td>
				</tr>
			</table>
		</div>
		<div>
			
		
		<table id="datos" class="display" cellspacing="0" width="100%">
			<thead >
				<tr>
					<th class="col_1">Num</th>
					<th class="col_2">Item</th>
					<th class="col_3">Collective Clarity</th>
					<th class="col_4">Collective Writing</th>
					<th class="col_5">Collective Presence</th>
					<th class="col_6">Collective Scale</th>
					<th class="col_7">Score</th>
					<th class="col_8">Consensus</th>
					<th class="col_9">Total</th>
				</tr>
			</thead>

			<tbody id=tableDatosBody>
				<?php
				function randomFloat($min = 0, $max = 1) {
	 		    return $min + mt_rand() / mt_getrandmax() * ($max - $min);
				}

				$sClarity = [];
				$sPresence = [];

				$_2_tuplas = 0;
				$_2_tuplasC = 0;
				$_2_tuplasP = 0;
				$label_output="";
					for ($y = 1; $y <= $total; $y++) {
					

				?>
				<tr>
					<td class="col_1" > <?php echo $y; ?></td>
                    <td class="col_2" id="preguntas"> <?php ?></td>
					<td class="col_3" id="cClarity"><?php echo linguisticLabel('CC',$y-1);?></td>
					<td class="col_4" id="cWriting"><?php echo linguisticLabel('CW',$y-1);?></td>
					<td class="col_5" id="cPresence"><?php echo linguisticLabel('CP',$y-1);?></td>
					<td class="col_6" id="cScale"><?php echo linguisticLabel('CAS',$y-1); ?></td>
					<td class="col_7" id="score"> <?php echo linguisticLabel('SCORE',$y-1);?></td>
					
					<td class="col_8"> <?php
						if ($label_output=="Excelent" || $label_output=="Very Correct" ) {
						 	echo  "<img src='images/check.png' width=25px>";
						 }else{
						 	echo  "<img src='images/no_check.png' width=25px>";
						 }
						 ?>
				 	</td>
				 	<td class=" nivel<?php ?> texto_sombra col_9" > <?php echo linguisticLabel('Total',y-1); ?></td>
				</tr>

				<?php } ?>
				<tfoot>
				<tr>
					<th>Showing 10 of 45</th>
					<th align="right">Results</th>
					<th><?php echo $_2_tuplasC; ?></th>
					<th><?php echo $_2_tuplas; ?></th>
					<th><?php echo $_2_tuplasP; ?></th>
					<th><?php echo $_2_tuplas; ?></th>
					<th>(Very correct , -0.45 )</th>
					<th></th>
					<th></th>
				</tr>
			</tfoot>
			</tbody>
		</table>
	</div>

		<footer>
			<p class="footer">.  This page was created by students of the UGR. The UGR has no direct relationship with the information on this website.</p>
			<a href="" title=""><div class="icon-github iconos"></div></a>
			<a href="https://www.ugr.es/servicios/correo-electronico" title="correo_UGR"><div class="icon-mail iconos"> </div></a>
			<a href="https://www.youtube.com/user/UGRmedios" title="medios_UGR"><div class="icon-youtube iconos"> </div></a>
			<a href="https://twitter.com/canalugr" title="twitter_UGR"><div class="icon-twitter iconos"></div></a>
			<a href="https://www.facebook.com/universidadgranada/" title="facebook_UGR"><div class="icon-facebook iconos"></div></a>
		</footer>
		</div>
	</body>
</html>