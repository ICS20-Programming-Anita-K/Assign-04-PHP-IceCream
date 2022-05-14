<?php
  // initialize variables
	$sizeCost = 0;
  $sizeMessage = "";
  $dipCost = 0;
  $toppings = 0;
  
	// Get size and toppings customizations.
	$size = $_POST['size'];
  define ("PRICE_TOPPINGS", 0.50);

  // Define constants.
  define ("HST", 0.13);
  define ("SMALL_COST", 2.50);
  define ("MEDIUM_COST", 3.50);
  define ("LARGE_COST", 5.00);
  define ("DIP_COST", 1.50);
	
  // If the selected size is small, the cost is $2.50
	if ($size == "Small") {
		$sizeCost = SMALL_COST;
	}
  // If the selected size is medium, the cost is $3.50
  else if ($size == "Medium") {
		$sizeCost = MEDIUM_COST;
	}
  // If the selected size is large, the cost is $5.00
  else if ($size == "Large") {
    $sizeCost = LARGE_COST;
  }
  // If the selected size is large, the cost is $5.00
  else {
    $sizeMessage = "(Please make a size selection above)";
  }
  // If hot fudge is selected, add the cost to the subtotal.
  if (isset($_POST['hot-fudge'])) {
    $toppings++;
  }
  // If the rainbow sprinkles are selected, add the cost to the subtotal.
  if (isset($_POST['rainbow-sprinkles'])) {
    $toppings++;
  }
  // If chocolate sprinkles are selected, add the cost to the subtotal.
  if (isset($_POST['chocolate-sprinkles'])) {
    $toppings++;
  }
  // If caramel is selected, add the cost to the subtotal.
  if (isset($_POST['caramel'])) {
    $toppings++;
  }
  // If nuts are selected, add the cost to the subtotal.
  if (isset($_POST['nuts'])) {
    $toppings++;
  }

  // Define cost of toppings.
  $toppingsCost = $toppings * PRICE_TOPPINGS;

  // Get whether dip is checked or not.
  $dipChecked = $_POST['choice'];
  // If "Yes, please" radio button is selected, add the cost to the subtotal.
  if ($dipChecked == "Yes") {
    $dipCost = DIP_COST;
  }
  // Else, there is no additional cost.
  else {
    $dipCost = 0;
  }
  // Calculations for subtotal, tax, and total.
    $subtotal = $sizeCost + $dipCost + $toppingsCost;
    $tax = $subtotal * HST;
    $total = $subtotal + $tax;

  // Rounded calculations 
    $subtotalRounded = number_format ($subtotal, 2);
    $taxRounded = number_format ($tax, 2);
    $totalRounded = number_format ($total, 2);

  // Display cost
  echo "Subtotal = $".$subtotalRounded.$sizeMessage."<br>HST = $".$taxRounded."<br>Total = $".$totalRounded.""
?>