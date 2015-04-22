<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content_Type"content="text/html;charset=utf-8">
<title> Inspecting a multidimensional array with print_r() </title>
</head>

<body>
<?php
$books=array(
    array('title'  => 'PHP Solutions: Dynamic Web Design Made Easy, Second Edition','author' => 'David Powers', 'publisher' => 'friends of ED', 'ISBN' => '978-1-4302-3249-0'),
    array('wizardry' => 'locked and loaded', 'awwyiss' => 'toosoonbrah')
    );
print_r($books);
?>
</body>
</html>