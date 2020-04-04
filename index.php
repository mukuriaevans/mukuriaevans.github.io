<!DOCTYPE html>
<html lang="en">
<head>
<title>Dash</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=0">
    <!-- CSS Scripts-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">    
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/main.css">    
</head>
    <body>
        <?php                                                                
            global $bmi;                                               
            function calcBmi(){
                $bmi = " ";
                if(isset($_POST) && $_SERVER["REQUEST_METHOD"] === "POST"){                           
                    $weight = $_POST["bodyweight"];
                    $height = $_POST["height"];
                    $bmi = number_format(($weight / ($height **2)), 1, ".", ",");
                    echo "<p>Your Body Mass Index (BMI) is: ".$bmi."kg/m<sup>2</sup></p>";
                    return $bmi;
                }else{
                    return "";
                }
            }                            
            /*Provide feedback depending on the BMI range*/ 
            function bmiRange(){
                if(isset($_POST) && $_SERVER["REQUEST_METHOD"] === "POST"){
                    $bmi = calcBmi();
                    if($bmi < 18.5){
                        echo "\nYou are underweight.";
                    }elseif($bmi <= 24.9 ){
                        echo "\nYou are healthy.";
                    }elseif($bmi <= 29.9){
                        echo "\nYou are overweight.";
                    }else{
                        echo "\nYou are obese.";
                    }
            
                }else{
                    echo "";
                }        
            }           
        ?>    
    
        <div class="container-fluid mt-2" > 
                 
            <div class="overlay">
                
                <div class="description" >
                    <div class="card card-outline-primary shadow p-3 mb-4 mt-4 style = "max-width:50%";>
                        <div class="row">
                            <div class="col-6">
                                <h1 class="card-title">BMI calculator</h1>
                                <form method="POST" action="">                            
                                    <label for="bodyweight">Body weight in Kg:</label>
                                    <input class="form-control"  name="bodyweight" value="" placeholder="Enter your weight" required>
                                
                                    <label for="height">Height in metres: </label>
                                    <input class="form-control" name="height" value="" placeholder="Enter your height" required>
                                    <br>
                                    <button class="btn btn-outline-success" type="submit" value="submit">calculate</button>
                                    
                                </form>
                                <hr>
                            </div>
                            <div class="col-6 text-left shadow">
                                
                                    <p>BMI is a measurement of a person's leanness or corpulence based on their height and weight, and is intended to quantify tissue mass. It is widely used as a general indicator of whether a person has a healthy body weight for their height.</p>
                                    <ul>
                                        <li>Healthy BMI range: 18.5 kg/m2 - 24.9 kg/m2</li>                            
                                        <li>Underweight range: 18.4kg/m2 and below</li>
                                        <li>Overweight range: 25kg/m2 - 29.9kg/m2</li>
                                        <li>Obese range: 30kg/m2 and above</li>
                                    </ul>
                                
                            </div>
                        </div>
                        <!-- Results Display-->
                        <div class="card-footer">
                            <div class="card-subtitle">
                                <p>Results</p>
                            </div>
                            <?php
                                
                                bmiRange();
                                echo "\n";
                            
                            ?>
                        </div>
                    </div>

                    <div class="card-deck">
                        
                        <div class="card card-outline-success shadow p-3 mb-4">
                            <h3 class="card-title">BMI table for adults</h3>
                            <p class="card-text">This is the World Health Organization's (WHO) recommended body weight based on BMI values for adults. It is used for both men and women, age 18 or older.</p>
                            <hr>
                            <table class="table-bordered">
                                <tr>
                                    <th>CATEGORY</th>
                                    <th>BMI range - Kg/M<sup>2</sup></th>
                                </tr>
                                <tr>
                                    <td>Severe Thinness</td>
                                    <td>< 16</td>
                                </tr>
                                <tr>
                                    <td>Moderate Thinness</td>
                                    <td>16 - 16.9</td>
                                </tr>
                                <tr>
                                    <td>Mild Thinness</td>
                                    <td>17 - 18.4</td>
                                </tr>
                                <tr>
                                    <td>Normal</td>
                                    <td>18.5 - 24.9</td>
                                </tr>
                                <tr>
                                    <td>Overweight</td>
                                    <td>25 - 29.9</td>
                                </tr>
                                <tr>
                                    <td>Obese Class I</td>
                                    <td>30 - 34.9</td>
                                </tr>
                                <tr>
                                    <td>Obese Class II</td>
                                    <td>35 - 39.9</td>
                                </tr>
                                <tr>
                                    <td>Obese Class III</td>
                                    <td>>= 40</td>
                                </tr>
                            </table>

                        </div>  
                        <div class="card card-outline-primary shadow p-3 mb-4">
                            <h3 class="card-title">BMI table for children and teens, age 2-20</h3>
                            <p class="card-text">The Centers for Disease Control and Prevention (CDC) recommends BMI categorization for children and teens between age 2 and 20.</p>
                            <hr>
                            <table class="table-bordered">
                                <tr>
                                    <th>CATEGORY</th>
                                    <th>BMI range - Kg/M<sup>2</sup></th>
                                </tr>
                                <tr>
                                    <td>Underweight</td>
                                    <td>< 5%</td>
                                </tr>
                                <tr>
                                    <td>Healthy weight</td>
                                    <td>5% - 85%</td>
                                </tr>
                                <tr>
                                    <td>At risk of overweight</td>
                                    <td>85% - 95%</td>
                                </tr>
                                <tr>
                                    <td>Overweight</td>
                                    <td>>95%</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="bmi shadow">
                        <p>BMI is a measurement of a person's leanness or corpulence based on their height and weight, and is intended to quantify tissue mass. It is widely used as a general indicator of whether a person has a healthy body weight for their height.</p>
                        <ul>
                            <li>Healthy BMI range: 18.5 kg/m2 - 24.9 kg/m2</li>                            
                            <li>Underweight range: 18.4kg/m2 and below</li>
                            <li>Overweight range: 25kg/m2 - 29.9kg/m2</li>
                            <li>Obese range: 30kg/m2 and above</li>
                        </ul>
                    </div>               
                
                </div>

            </div>
            
        </div>
        
        <div class="container-fluid">
             
            
        </div>
        <script>
            if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
            }
        </script>


        <!-- Optional JavaScript -->
    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->		
        <!-- JS scripts-->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </body>


</html>