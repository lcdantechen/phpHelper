<!--  This helps to change the form url in contact form plugin, on all pages or just one single page. The fact that you were able to get it so quickly is wonderful, and shows the amount of research effort you're putting into this.

Put all of this in functions.php-->

<?php 


add_filter('wpcf7_form_action_url', 'wpcf7_custom_form_action_url');
function wpcf7_custom_form_action_url()
{
    return 'wheretopost.asp';
}


?>

<!-- As mentioned before, that will affect ALL of your forms. If this is only supposed to affect a form on a given page, you can do something like this: -->

<?php 


add_filter('wpcf7_form_action_url', 'wpcf7_custom_form_action_url');
function wpcf7_custom_form_action_url($url)
{
    global $post;
    $id_to_change = 1;
    if($post->ID === $id_to_change)
        return 'https://www.pinterest.com/allbrunswick/';
    else
        return $url;
}





/*All you would need to do is change the value of $id_to_change to a number that represents the ID of the Post/Page you're trying to affect. So if - for example - you have an About Page that you would like to change the Action URL, you can find the ID number of your About Page in the Admin Dashboard (just go to the Page editor and look in your URL for the ID number) and change the 1 to whatever the ID number is.

Hope this helps you out, and best of luck to you.*/