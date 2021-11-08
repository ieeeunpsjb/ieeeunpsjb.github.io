<?
include "config.php";
/* modificado para que funcione con winNT */
global $data;

$data=$HTTP_POST_VARS;


if ("$data[nombre]" <> "" or "$data[mail]" <> "" or "$data[mensaje]" <> "") {
mail("$email", "$subject", "From: $data[nombre]\nMail: $data[mail]\nMessage:\n\n$data[mensaje]");
/* pagina de mensaje */
header("Location: envio_ok.htm");
exit;
} else {
/* pagina de mensaje error */
header("Location: envio_err.htm");
exit;
}
?>
