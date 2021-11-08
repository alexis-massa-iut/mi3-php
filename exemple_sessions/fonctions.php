<?php
function displayTab(string $name, array $tab) : void {
	echo '<p>'.$name.' :</p>';
	echo '<pre>'; print_r($tab);
	echo '</pre>';
}

function displayTab2($name,$tab) {
	echo '<p>'.$name.' :</p>';
	echo '<pre>'; print_r($tab);
	echo '</pre>';
}

function displayTabsIdSession() {
	displayTab('$_GET',$_GET);
	displayTab('$_POST',$_POST);
	displayTab('$_SESSION',$_SESSION);
	displayTab('$_COOKIE',$_COOKIE);

	echo '<p>Id session = '.session_id().'</p>';
}

function somme(int $a, int $b = 1, int $c=0) : int {
	return $a+$b+$c;
}

/*$t=[1,2,3];
displayTab('t',$t);
displayTab2('t',$t);
echo '<p>'.somme(1).'</p>';
echo '<p>'.somme(1,2).'</p>';
echo '<p>'.somme(1,2,3).'</p>';*/
?>
