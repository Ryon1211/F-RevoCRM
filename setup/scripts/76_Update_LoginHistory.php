<?php
$Vtiger_Utils_Log = true;
include_once('vtlib/Vtiger/Menu.php');
include_once('vtlib/Vtiger/Module.php');
include_once('modules/PickList/DependentPickListUtils.php');
include_once('modules/ModTracker/ModTracker.php');
include_once('include/utils/CommonUtils.php');
include_once('includes/Loader.php');

require_once('setup/utils/FRFieldSetting.php');
require_once('setup/utils/FRFilterSetting.php');
require_once('includes/runtime/BaseModel.php');
require_once('modules/Settings/Vtiger/models/Module.php');
require_once('modules/Settings/MenuEditor/models/Module.php');
require_once('modules/Vtiger/models/MenuStructure.php');
require_once('modules/Vtiger/models/Module.php');

global $adb, $log;

$adb->query("ALTER TABLE vtiger_loginhistory ADD COLUMN `is_portal` tinyint(1) DEFAULT 0");

echo vtranslate('LBL_ITS_OVER');
