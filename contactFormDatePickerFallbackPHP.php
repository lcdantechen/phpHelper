/*If you don’t wish to use HTML5 input types, you can disable this by adding the following code
 into your theme’s functions.php file:*/


add_filter( 'wpcf7_support_html5', '__return_false' );
/*
Note that even the most current browsers partially support HTML5. For example, the latest Firefox doesn’t 
support the date input type (that allows you to choose a date from a calendar user interface) and the number 
input type (that allows you to input a number value from a spinbox UI) yet — so Firefox provides a general 
text input field as a fallback instead of a calendar and spinbox UI. This may confuse users because they 
can’t detect what type of input value this field expects. So, you may feel that it is better to wait 
for all browsers to support all HTML5 features completely.

But you don’t need to wait! Contact Form 7 offers a better solution. Contact Form 7 is able to provide 
jQuery UI-based fallback for the date and number input fields. By using this solution, you can provide 
calendar UI for the date field and spinbox UI for the number field, respectively, even with Firefox or 
Internet Explorer.

By default, this fallback feature is disabled because it loads extra JavaScript and CSS (makes for poor 
	performance) and it is only necessary for websites that use the date or the number input fields. If 
you use the date or number input fields and wish to use this jQuery UI-based fallback feature, add the 
following code into your theme’s functions.php file and activate the feature:*/


add_filter( 'wpcf7_support_html5_fallback', '__return_true' );
