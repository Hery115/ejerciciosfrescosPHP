<?
$semestre = $_POST['semestre'];
$promedio = $_POST['promedio'];
$matricula = $_POST['sueldo'];
//economia
if ($semestre>=6&&$promedio>=8.8) {
echo "El alumno con la matricula "+$matricula+" ha sido aceptado para la facultad de economía";
} else {
echo "El alumno con la matricula "+$matricula+" no ha sido aceptado para la facultad de economia";
}
//computacion
if ($semestre>6&&$promedio>8.5) {
echo "El alumno con la matricula "+$matricula+" ha sido aceptado para la facultad de computacion";
} else {
echo "El alumno con la matricula "+$matricula+" no ha sido aceptado para la facultad de computacion";
}
//administracion
if ($semestre>5&&$promedio>8.5) {
echo "El alumno con la matricula "+$matricula+" ha sido aceptado para la facultad de administracion";
} else {
echo "El alumno con la matricula "+$matricula+" no ha sido aceptado para la facultad de administracion";
}
//contabilidad
if ($semestre>5&&$promedio>8.5) {
echo "El alumno con la matricula "+$matricula+" ha sido aceptado para la facultad de contabilidad";
} else {
echo "El alumno con la matricula "+$matricula+" no ha sido aceptado para la facultad de contabilidad";
}

?>
