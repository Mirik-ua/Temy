<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>temy</title>
  <link rel="stylesheet" href="css/index.css">
</head>
<body>
  <form  action="php/ip.php" id="form" name="test">
    <div class="title">
      <h2>Event Registration Form</h2>
    </div>
    <div class="wrapperForMainBlock">
      <div class="nameBlock">
        <label for="name">Name:</label>
        <div class="blockInput">
          <input type="text" name="name" placeholder="name" onkeypress="validName(event)">
          <input type="text" name="surname" placeholder="surname" onkeypress="validName(event)">
        </div>
      </div>
      <div class="emailBlock">
        <label for="email">E-mail:</label>
        <input type="email" name="email" placeholder="stochkomira@gmail.com" id="email">
      </div>
      <div class="wrapperLocationBlock">
        <div class="countryBlock">
          <label for="country">Country:</label>
          <select class="" name="country">
            <option value="Ukraine">Ukraine</option>
          </select>
        </div>
        <div class="stateBlock">
          <label for="states">State:</label>
          <select class="states" name="state">
            <option>Cherkasy Oblast</option>
            <option>Chernihiv Oblast</option>
            <option>Chernivtsi Oblast</option>
            <option>Dnipropetrovsk Oblast</option>
            <option>Donetsk Oblast</option>
            <option>Ivano-Frankivsk Oblast</option>
            <option>Kharkiv Oblast</option>
            <option>Kherson Oblast</option>
            <option>Khmelnytskyi Oblast</option>
            <option>Kiev Oblast</option>
            <option>Kirovohrad Oblast</option>
            <option>Luhansk Oblast</option>
            <option>Lviv Oblast</option>
            <option>Mykolaiv Oblast</option>
            <option>Odessa Oblast</option>
            <option>Poltava Oblast</option>
            <option>Rivne Oblast</option>
            <option>Sumy Oblast</option>
            <option>Ternopil Oblast</option>
            <option>Vinnytsia Oblast</option>
            <option>Volyn Oblast</option>
            <option>Zakarpattia Oblast</option>
            <option>Zaporizhia Oblast</option>
            <option>Zhytomyr Oblast</option>
          </select>
        </div>
        <div class="cityBlock">
          <label for="city">City:</label>
          <select name="city">
            <option>Cherkasy</option>
            <option>Chernihiv</option>
            <option>Chernivtsi</option>
            <option>Dnipro</option>
            <option>Donetsk</option>
            <option>Ivano-Frankivsk</option>
            <option>Kharkiv</option>
            <option>Kherson</option>
            <option>Khmelnytskyi</option>
            <option>Kiev</option>
            <option>Kirovohrad</option>
            <option>Luhansk</option>
            <option>Lviv</option>
            <option>Mykolaiv</option>
            <option>Odessa</option>
            <option>Poltava</option>
            <option>Rivne</option>
            <option>Sumy</option>
            <option>Ternopil</option>
            <option>Vinnytsia</option>
            <option>Volyn</option>
            <option>Zakarpattia</option>
            <option>Zaporizhia</option>
            <option>Zhytomyr</option>
          </select>
        </div>
      </div>
      <div class="phoneBlock">
        <label for="phone-number">Phone-number:</label>
        <input type="text" name="phone" placeholder="+380981317369" onkeypress="validPhone(event)">
      </div>
      <div class="adressBlock">
          <label for="adress">Adress:</label>
          <input type="text" name="adress">
      </div>
      <div class="aboutMeBlock">
        <textarea name="about" rows="8" cols="80" maxlength="500" placeholder="About me"></textarea>
      </div>
      <div class="buttonBlock">
        <input type="button" id="send" name="submit" value="submit" onclick="valid(document.getElementById('form'))">
      </div>
    </div>
  </form>
  <script type="text/javascript" src="js/valid.js"></script>
  <script type="text/javascript" src="js/form.js"></script>
 </body>
</html>
