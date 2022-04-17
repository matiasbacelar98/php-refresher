<?php 


/* --------- $_GET - $_POST --------- */
// Podemos pasar data a traves de urls y de formularios usando estas variables
// superglobales 

// USAR POST PARA TODO , Y GET PARA 'SEARCHBARS'

// USAR isset() para chequear si esta definido en $_POST
if(isset($_POST['submit'])) {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $age =  filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);
    echo $name,$age;
}
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method='POST'>
<div>
    <label for='name'>Name:</label>
    <input type='text' name='name'/>
</div>    

<div>
    <label for='age'>Age:</label>
    <input type='text' name='age'/>
</div>    

<input type='submit' value='Submit' name='submit' />
</form>
