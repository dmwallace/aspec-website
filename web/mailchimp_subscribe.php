<?php
define('WP_USE_THEMES', false);
require(__DIR__ . '/wp/wp-load.php');

require("../vendor/autoload.php");

use \DrewM\MailChimp\MailChimp;

function storeAddress()
{
    $key = get_field('mail_chimp_api_key', 'option');
    $list_id = get_field('mail_chimp_list_id', 'option');

    /*$merge_vars = array(
        'FNAME' => $_POST['fname'],
        'LNAME' => $_POST['lname']
    );*/

    $mc = new MailChimp($key);

    // add the email to your list
    $result = $mc->post('/lists/' . $list_id . '/members', array(
            'email_address' => $_POST['email'],
            //'merge_fields' => $merge_vars,
            //'status' => 'pending'     // double opt-in
            'status'     => 'subscribed'  // single opt-in
        )
    );

    return json_encode($result);
}

// If being called via ajax, run the function, else fail

if ($_POST['ajax']) {
    echo storeAddress(); // send the response back through Ajax
} else {
    echo 'Method not allowed - please ensure JavaScript is enabled in this browser';
}
