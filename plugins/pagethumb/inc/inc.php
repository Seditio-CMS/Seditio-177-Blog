<?PHP
function open_image ($file) {
	# JPEG:
	$im = @imagecreatefromjpeg($file);
	if ($im !== false) { return $im; }

	# GIF:
	$im = @imagecreatefromgif($file);
	if ($im !== false) { return $im; }

	# PNG:
	$im = @imagecreatefrompng($file);
	if ($im !== false) { return $im; }

	# Try and load from string:
	$im = @imagecreatefromstring(@file_get_contents($file));
	if ($im !== false) { return $im; }

	return false;
}
?>