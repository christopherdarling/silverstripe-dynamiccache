<?php

// Ensure compatibility with PHP 7.2 ("object" is a reserved word),
// with SilverStripe 3.6 (using Object) and SilverStripe 3.7 (using SS_Object)
// see https://docs.silverstripe.org/en/3/changelogs/3.7.0/#silverstripe-3-7-and-php-7-2-and-object-subclasses
if (!class_exists('SS_Object')) class_alias('Object', 'SS_Object');
