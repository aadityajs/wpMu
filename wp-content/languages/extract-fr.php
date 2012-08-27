<?php
header( 'content-type: text/html; charset=UTF-8' );

// Put content PO into array
$contents = file( dirname(__FILE__) . '/ms-inc-fr_FR.po' );

echo '<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">';

// Display french line
foreach ($contents as $line) {

	// Clean line
	$line = trim($line);

	// Get only traduction
    if ( substr($line, 0, 6) != 'msgstr' ) continue;
	
	// Remove last quote
	$line = substr( $line, 0, -1 );
	
	// Remove [0], [1], and first quote
	$line = str_replace( 'msgstr[0] "', '', $line );
	$line = str_replace( 'msgstr[1] "', '', $line );
	$line = str_replace( 'msgstr "', '', $line );
	
	// Clean quote
	$line = str_replace( '\"', '"', $line );
	$line = str_replace( array('%d', '%s', '%1$s', '%2$s', '%3$s', '%4$s', '%1$d', '%2$d', '%3$d', '%4$d'), array('000', 'ZZZ', 'AAA', 'BBB', 'CCC', 'DDD', '111', '222', '333', '444' ), $line );
	
	// remove special caractères
	$line = html_entity_decode($line, ENT_COMPAT | ENT_HTML401, 'UTF-8');
	
	// Remove html ?
	$line = strip_tags( $line );
	
	echo $line . "<br /><br />";
}
?>