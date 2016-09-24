# Adding a fee for a specific vendor in cart #
Add fee for products from specific vendor in cart
## Installation ##
1. Copy the repository code into your functions.php file replacing [line 5](functions.php#L5) `$fixed=30;` with your desired fee and [line 11](functions.php#L11) `if ($values['data']->post->post_author == 40) {` 40 with id of the vendor you would like to add a fee for. Keep in mind that the code in this repository adds one instance of fixed fee no matter how many products from the specific vendor is in the cart.
