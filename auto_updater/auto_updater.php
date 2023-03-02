<?php

global $current_user;

$folder = 'modules/cbupdater/cbupdates';
$updates_last_modified_path = 'auto_updater/updates_last_modified.txt';
$reference_time = file_get_contents($updates_last_modified_path);

$modified = false;
foreach (glob(rtrim($folder, '/') . '/*', GLOB_NOSORT) as $file_path) {
    if (filemtime($file_path) > $reference_time) {
        $modified = true;
        break;
    }
}

if ($modified) {
    require_once 'Smarty_setup.php';
	$smarty = new vtigerCRM_Smarty();
	$smarty->assign('APP', $app_strings);
	$smarty->display('auto_updater/loadingPage.tpl');
    file_put_contents($updates_last_modified_path, time());
    exit;
} else {
    echo "Folder has not been modified.";
}
