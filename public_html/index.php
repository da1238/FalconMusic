<?php
/**
 * @author: Dr. Scott Weaver
 * @date: 9/27/2018
 */
include "../private_html/config.inc.php";
/* $phpVariable could have been retrieved from the database and has a value in it.
 * for this example, we are simply butting the college name in it.
 */
$phpVariable = "Messiah College";
$smarty->assign("variable_name", $phpVariable);
$smarty->assign('title', "Smarty Example #2");

if (!isset($_POST['frmFirstName'])) {
    /* First time into this area, so display the form.
     */
    $smarty->assign('control', 'form');
    $smarty->display('home.tpl');
    exit();
}

/* Array of errors for each form field.
 */
$formErrorValues = array(
    'frmFirstName' => "Please enter your first name.",
    'frmLastName'  => "Please enter your last name.",
    'frmStreet'    => "You must enter your street address.",
    'frmCity'      => "City please!",
    'frmState'     => "State?",
    'frmZip'       => "Enter your Zip Code!",
    'frmUserName'  => "You must have a user name.",
    'frmPassword'  => "Not entering a password is unacceptable.",
    'frmGender'    => "Not really checking."
);
$formLabels = array(
    'frmFirstName' => "First Name",
    'frmLastName'  => "Last Name",
    'frmStreet'    => "Street",
    'frmCity'      => "City",
    'frmState'     => "State",
    'frmZip'       => "Zip Code",
    'frmUserName'  => "Username",
    'frmPassword'  => "Password",
    'frmGender'    => "Gender",
    'frmMarried'   => "Marital Status"
);
/* Create array variables for processing
 */
$errors = array();
$results = array();

/* The form has been submitted, so process the form, if any errors, re-display the form
 */
foreach ($_POST as $formField => $formValue) {
    if (empty($formValue)) {
        $errors[$formField] = $formErrorValues[$formField];
    } else {
        $results[$formField] = array(
            'label' => $formLabels[$formField],
            'value' => $formValue
        );
    }
}
/* Need to check marital status separately since it might not have been passed
 */
if (!isset($_POST['frmMarried'])) {
    $results['frmMarried'] = array(
        'label' => $formLabels['frmMarried'],
        'value' =>'No'
    );
}

if (count($errors) > 0) {
    $smarty->assign('control', 'form');
    $smarty->assign('errors', $errors);
    $smarty->assign('formValues', $_POST);
} else {
    $smarty->assign('control', 'results');
    $smarty->assign('results', $results);
}
$smarty->display('home.tpl');
