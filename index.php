<!DOCTYPE html>
<html>
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="The Vanilla Bean Creamery">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Anita Kay">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav/favicon-16x16.png">
    <link rel="manifest" href="./fav/site.webmanifest">
    <!-- Google's MDL -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-purple.min.css" />
    <!-- Link to style sheet -->
    <link rel="stylesheet" href="./css/style.css">
    <title>The Vanilla Bean Creamery</title>
  </head>
  <body>
    <?php
      echo "<center><h1>🍦The Vanilla Bean Creamery🍦</h1></center>";
    ?>
		<table>
			<tr align = "center">
				<td valign="top" align="left">
        <center><img src="./images/icecream.jpeg" width="27.3%"><img src="./images/cone.jpg" alt="Store" width="40%"></center>";
          <!-- Introduction -->
          <?php
            echo "<center><h2>Welcome to the Vanilla Bean Creamery!</h2>";
          ?>
          <?php
            echo "<h3>Since our first day open in 1962, the Vanilla Bean Creamery has been serving delicious, premium soft serve ice cream and putting smiles on faces for over 60 years. With a variety of Canada's favourite toppings, paired our scrumptious vanilla soft serve, the Vanilla Bean Creamery is guaranteed to have something for everyone. So, come on down and visit us in store, or order online using this website. Either way, thanks for visiting!</h3></center>";
          ?>
          <!-- Border -->
          <center><img src="./images/border.png" alt="Border" width="30%"><img src="./images/border.png" alt="Border" width="30%"><img src="./images/border.png" alt="Border" width="30%"></center>
          <!-- Data table for menu -->
          <center><table class="mdl-data-table mdl-js-data-table">
            <thead>
              <tr>
                <th class="mdl-data-table__cell--non-numeric">Sizes</th>
                <th>Prices</th>
                <th>Toppings and Extras</th>
                <th>Prices</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="mdl-data-table__cell--non-numeric">Small</td>
                <td>$2.50</td>
                <td>Hot fudge</td>
                <td>$0.50</td>
              </tr>
              <tr>
                <td class="mdl-data-table__cell--non-numeric">Medium</td>
                <td>$3.50</td>
                <td>Rainbow sprinkles</td>
                <td>$0.50</td>
              </tr>
              <tr>
                <td class="mdl-data-table__cell--non-numeric">Large</td>
                <td>$5.00</td>
                <td>Chocolate sprinkles</td>
                <td>$0.50</td>
              </tr>
              <tr>
                <td class="mdl-data-table__cell--non-numeric"></td>
                <td></td>
                <td>Caramel</td>
                <td>$0.50</td>
              </tr
              <tr>
                <td class="mdl-data-table__cell--non-numeric"></td>
                <td></td>
                <td>Nuts</td>
                <td>$0.50</td>
              </tr>
              <tr>
                <td class="mdl-data-table__cell--non-numeric"></td>
                <td></td>
                <td>Chocolate dip</td>
                <td>$1.50</td>
              </tr>
            </tbody>
          </table></center>
          <?php
					  echo "<h3>Customize your soft serve order and see how much it will cost here:</h3>";
          ?>
          <!-- Link to results.php -->
					<form action="./results.php" method="post" target="results">                     
            <!-- Drop-down menu for size -->
            <?php
              echo "<h4>What size would you like?</h4>";
            ?>
						<label for="size">Size:</label>
						<select name="size" name="size">
						    <option value="">--Size--</option>
						    <option value="Small">Small</option>
						    <option value="Medium">Medium</option>
						    <option value="Large">Large</option>
						</select><br><br>
            <!-- Checkboxes for toppings -->
            <?php
              echo "<h4>What toppings would you like?</h4>";
            ?>
            <input type="checkbox" name="hot-fudge" value="Hot Fudge">
            <label for="hot-fudge">Hot Fudge</label><br>
            <input type="checkbox" name="rainbow-sprinkles" value="Rainbow Sprinkles">
            <label for="rainbow-sprinkles">Rainbow Sprinkles</label><br>
            <input type="checkbox" name="chocolate-sprinkles" value="Chocolate Sprinkles">
            <label for="chocolate-sprinkles">Chocolate Sprinkles</label><br>
            <input type="checkbox" name="caramel" value="Caramel">
            <label for="caramel">Caramel</label><br>
            <input type="checkbox" name="nuts" value="Nuts">
            <label for="nuts">Nuts</label><br><br>
            <!-- Radio button for chocolate dip -->
            <?php
              echo "<h4>Would you like your soft serve to be dipped in chocolate?</h4>";
            ?>
            <input type="radio" name="choice" value="Yes">
            <label for="Yes">Yes, please!</label><br>
            <input type="radio" name="choice" value="No" checked>
            <label for="No">No, thank you!</label><br><br><br>
            <!-- Button to calculate -->
						<input type="submit" value="Calculate Cost">
					</form>
				</td>
			</tr>
		</table>
		<!-- Create a space where the user information will be displayed -->
		<iframe id="results" name="results">			
	  </iframe>
    <br>
    <br>
  </body>
</html>