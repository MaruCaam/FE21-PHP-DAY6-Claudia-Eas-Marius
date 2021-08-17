const roastedBeef = 16.9;
const wienerSchnitzel = 22.6;
const nougatSemolina = 10.0;
const josefWein = 35.0;

const marinatedChant = 14.6;
const crownLamb = 26.9;
const apricotDumplings = 7.5;
const beer = 5.6;

const smallDumplings = 13.6;
const schoulderScherzel = 24.9;
const lemonProsecco = 8.5;
const josefBrut = 39.0;

function calculatedInvoice(
  starterPrice,
  maindishPrice,
  dessertPrice,
  beveragePrice
) {
  var sum = starterPrice + maindishPrice + dessertPrice + beveragePrice;
  return sum;
}

console.log(
  calculatedInvoice(roastedBeef, wienerSchnitzel, nougatSemolina, josefWein) +
    " Example 1"
);

console.log(
  calculatedInvoice(marinatedChant, crownLamb, apricotDumplings, beer) +
    " Example 2"
);

console.log(
  calculatedInvoice(
    smallDumplings,
    schoulderScherzel,
    lemonProsecco,
    josefBrut
  ) + " Example 3"
);

function stundetInvoice(
  starterPrice,
  maindishPrice,
  dessertPrice,
  beveragePrice
) {
  var foodCost = starterPrice + maindishPrice + dessertPrice;
  var discountSum = foodCost - foodCost * 0.1;
  var sum = discountSum + beveragePrice;
  return sum;
}

console.log(
  stundetInvoice(roastedBeef, wienerSchnitzel, nougatSemolina, josefWein) +
    " Discounted Dishes, NOT Beverages Example 1"
);

console.log(
  stundetInvoice(marinatedChant, crownLamb, apricotDumplings, beer) +
    " Discounted Dishes, NOT Beverages Example 2"
);

console.log(
  stundetInvoice(smallDumplings, schoulderScherzel, lemonProsecco, josefBrut) +
    " Discounted Dishes, NOT Beverages Example 3"
);
