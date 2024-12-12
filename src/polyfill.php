<?php

//if php 8.4 define constants
if (version_compare(PHP_VERSION, '8.4.0', '>=')) {
    define('IMAP_OPENTIMEOUT', 1);
    define('IMAP_READTIMEOUT', 2);
    define('IMAP_WRITETIMEOUT', 3);
    define('IMAP_CLOSETIMEOUT', 4);
}
