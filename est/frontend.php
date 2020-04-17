<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="form.css" media="screen"/>
<head>
<title>Estimate</title>
</head>
<body>
</body>
<div class="container">  
  <form id="contact" action="" method="post">
    <h3>COVID-19 ASSESMENT FORM</h3>
    <fieldset>
      <input placeholder="Population" type="text" name="data-population" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Time To Elapse" type="text" name="data-time-to-elapse" required>
    </fieldset>
    <fieldset>
      <input placeholder="Reported Cases" type="text" name="data-reported-cases" required>
    </fieldset>
    <fieldset>
      <input placeholder="Total Hospital Beds" type="text" name="data-total-hospital-beds" required>
    </fieldset>
	<fieldset type="text" name="data-period-type"><b>Period Type</b><br>
      <label>DAY:</label>
  <select name="day">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
	<option>5</option>
	<option>6</option>
	<option>7</option>
  </select>
   <label >WEEK:</label>
  <select name="week">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
  </select>
   <label >MONTH:</label>
  <select name="month">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
	<option>5</option>
	<option>6</option>
	<option>7</option>
	<option>8</option>
	<option>9</option>
	<option>10</option>
	<option>11</option>
	<option>12</option>
  </select>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Data-Go-Estimate</button>
    </fieldset>
    <p class="copyright">Designed by Felix Momanyi</p>
  </form>
</div>

</html>