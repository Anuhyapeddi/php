<!--To open and to read the file -->
$name = "filename.txt";
$handle = fopen($name, 'r');
echo readfile($name)

<!-- To open and to write the file -->
$handle1 = fopen($name, 'w');
$data = 'PHP- hypertext preprocessor'
fwrite($handle1, $data)

