<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>


<div class="col-8 container">

<h1>PHP Calculator</h1>

<form method="post">

  <div class="form-group">
    <label>Enter First Number</label>
    <input type="number" class="form-control" name='first_number' placeholder="Enter First Number">
  </div>
  <div class="form-group">
    <label >Enter Second Number</label>
    <input type="number" class="form-control" name='second_number' placeholder="Enter Second Number">
  
</div>


  <div class="form-group">
      <label>Operation</label>
      <select name="operator" class="form-control">
        <option selected>Choose...</option>
        <option>Addition-(+)</option>
        <option>Subtraction-(-)</option>
        <option>Division-(/)</option>
        <option>Multiplication-(*)</option>
      </select>
    </div>
 


  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  <button type="reset" class="btn btn-danger" name="submit">Reset</button>
  
</form>


<div class="form-group">
    <label for="exampleFormControlTextarea1">The Answer is</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">

      <?php

        if(isset($_POST['submit'])){

            $result1=$_POST['first_number'];
            $result2=$_POST['second_number'];
            $operator=$_POST['operator'];

          
            switch($operator){

                case 'Addition-(+)':
                    echo $result1 + $result2;
                    break;


                 case 'Subtraction-(-)':
                        echo $result1 - $result2;
                        break;


                        case 'Division-(/)':
                            echo $result1 / $result2;
                            break;

                            
                            case 'Multiplication-(*)':
                                echo $result1 * $result2;
                                break;

                                default:
                                echo "please chose atleast one operaor to calculate";
                                break;
            
    
            }

        }
      
      
      
      
      ?>

  

    </textarea>
  </div>



</div>



</body>
</html>