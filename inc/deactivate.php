<?php 

//Reject if accessed directly
defined( 'BOP_THEME_DEACTIVATING' ) || die( 'Our survey says: ... X.' );

//Deactivation script - turn off events that might persist despite deactivation; typically caches.
