## Upgrade: CiviHR (1.3 => 1.4)

> CiviHR 1.4 requires CiviCRM 4.5.
>
> If you have an older version of CiviCRM, first upgrade CiviCRM to 4.5 or above.
> (Please follow steps mentioned at:
> http://wiki.civicrm.org/confluence/display/CRMDOC/Upgrade+Drupal+Sites+to+4.5+-+Drupal+7 )

Make a backup of the CiviCRM database.

Download CiviHR 1.4:

```
cd </path/to/extension/dir>
(ex: $drupalroot/vendor/civicrm or $civiroot/tools/extensions or a custom-configed path)

rm -rf civihr
wget https://github.com/civicrm/civihr/archive/1.4.zip
unzip 1.4.zip
mv civihr-1.4 civihr
```
Goto 'Administer => System Settings => Manage Extension' and click the "Refresh" button.

Notice the CiviCRM popup alert. Click on "Execute the updates".