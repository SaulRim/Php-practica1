<?php 

require_once('functions.php');
require_once('const.php');
// Trae todo el contenido
// Como si lo pegara || Podriamos ponerlo varias veces y se ejecutaria ese numero de veces.
// Con require_once, al contrario que solo requiere, se llama una sola vez.

// include() e include_once() Trae el codigo, pero si no encuetra el archivo solo da un un warning. Mientras que el otro da un error fatal.
// Usado si no es importante o opcional
$data = getData(API_URL); 
$message = getUntilMessage($data["days_until"]);
// si metes otro tipo lo convierte automaticamente
// activando strict_types fuerza a que respetes los tipos de datos
//var_dump($data);

?>

<?php renderTemplate('head',$data); ?>
<?php renderTemplate('main',array_merge($data,["message" => $message])); ?>
<?php renderTemplate('style',[]); ?>

