<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">


<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>
    <section>
        <nav>
          <ul>
           
        
          
          </ul>
        </nav>
      </section>

<h3>Kontakt forma</h3>

<div class="container">
  <form action="zapamcenipodaci.php">
    <label for="fname">Ime</label>
    <input type="text" id="fname" name="firstname" placeholder="Ime..">

    <label for="lname">Prezime</label>
    <input type="text" id="lname" name="lastname" placeholder="Prezime..">

    
    

    <label for="subject">Predmet</label>
    <textarea id="subject" name="subject" placeholder="Tekst.." style="height:200px"></textarea>

    <input type="submit" value="Potvrdi">
  </form>
</div>

</body>
</html>