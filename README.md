this repo reproduces a case in which rector add php starting/ending tags in view files.

Steps
-----

- `composer install`
- `vendor/bin/rector process -n`

expected result
- rector might change whitespaces / intentation.. AFAIK its technically hard to keep all whitespaces -> thats fine
- rector should not add `<?php ?>` at the beginning of the file
- rector should not add a trailling `<?php`

actual result

```diff
+<?php
+
+?>

        <div>
-       <?php echo check_box($auktion, 'skipnetzprovider', '1', "class=checkbox onclick=\"getAngebotHTML($('angebot').value);\""); ?>
+       <?php
+echo check_box($auktion, 'skipnetzprovider', '1', "class=checkbox onclick=\"getAngebotHTML($('angebot').value);\"");
+?>
        <b class="caption">Provider und Netz nicht anzeigen</b> (Im gesamten Template)
        <br><br>
-       </div>
+       </div><?php
```
