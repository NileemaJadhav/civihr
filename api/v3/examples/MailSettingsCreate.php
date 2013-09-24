<?php
/**
 * Test Generated example of using mail_settings create API
 * *
 */
function mail_settings_create_example(){
$params = array(
  'domain_id' => 1,
  'name' => 'my mail setting',
  'domain' => 'setting.com',
  'local_part' => 'civicrm+',
  'server' => 'localhost',
  'username' => 'sue',
  'password' => 'pass',
);

try{
  $result = civicrm_api3('mail_settings', 'create', $params);
}
catch (CiviCRM_API3_Exception $e) {
  // handle error here
  $errorMessage = $e->getMessage();
  $errorCode = $e->getErrorCode();
  $errorData = $e->getExtraParams();
  return array('error' => $errorMessage, 'error_code' => $errorCode, 'error_data' => $errorData);
}

return $result;
}

/**
 * Function returns array of result expected from previous function
 */
function mail_settings_create_expectedresult(){

  $expectedResult = array(
  'is_error' => 0,
  'version' => 3,
  'count' => 1,
  'id' => 2,
  'values' => array(
      '2' => array(
          'id' => '2',
          'domain_id' => '1',
          'name' => 'my mail setting',
          'is_default' => '',
          'domain' => 'setting.com',
          'localpart' => '',
          'return_path' => '',
          'protocol' => '',
          'server' => 'localhost',
          'port' => '',
          'username' => 'sue',
          'password' => 'pass',
          'is_ssl' => '',
          'source' => '',
        ),
    ),
);

  return $expectedResult;
}


/*
* This example has been generated from the API test suite. The test that created it is called
*
* testCreateMailSettings and can be found in
* http://svn.civicrm.org/civicrm/trunk/tests/phpunit/CiviTest/api/v3/MailSettingsTest.php
*
* You can see the outcome of the API tests at
* http://tests.dev.civicrm.org/trunk/results-api_v3
*
* To Learn about the API read
* http://book.civicrm.org/developer/current/techniques/api/
*
* and review the wiki at
* http://wiki.civicrm.org/confluence/display/CRMDOC/CiviCRM+Public+APIs
*
* Read more about testing here
* http://wiki.civicrm.org/confluence/display/CRM/Testing
*
* API Standards documentation:
* http://wiki.civicrm.org/confluence/display/CRM/API+Architecture+Standards
*/