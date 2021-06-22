<?php
class ICS {
    var $data;
    var $name;
    function ICS($start,$end,$name,$description,$location) {
        $this->name = $name;
        $this->data = "BEGIN:VCALENDAR\nVERSION:2.0\nMETHOD:PUBLISH\nBEGIN:VEVENT\nDTSTART:".date("Ymd\THis\Z",strtotime($start))."\nDTEND:".date("Ymd\THis\Z",strtotime($end))."\nLOCATION:".$location."\nTRANSP: OPAQUE\nSEQUENCE:0\nUID:\nDTSTAMP:".date("Ymd\THis\Z")."\nSUMMARY:".$name."\nDESCRIPTION:".$description."\nPRIORITY:1\nCLASS:PUBLIC\nBEGIN:VALARM\nTRIGGER:-PT10080M\nACTION:DISPLAY\nDESCRIPTION:Reminder\nEND:VALARM\nEND:VEVENT\nEND:VCALENDAR\n";
    }
    function save() {
        file_put_contents($this->name.".ics",$this->data);
    }
    function show() {
        header("Content-type:text/calendar");
        header('Content-Disposition: attachment; filename="'.$this->name.'.ics"');
        Header('Content-Length: '.strlen($this->data));
        Header('Connection: close');
        echo $this->data;
    }
}
?>
<?php
session_start();
include_once("conexao.php");
$evento_calendar = $_SESSION['evento_cod'];
$result_cursos = "SELECT * FROM vendas WHERE evento_cod='$evento_calendar'";
$resultado_cursos = mysqli_query($conn, $result_cursos);
while ($rows_cursos = mysqli_fetch_array($resultado_cursos)) {
    //Data e Horário de entrada
    $datatime_inicial = $rows_cursos['data_compra'];
    $hora_inicial = $rows_cursos['hora_compra'];
    list($h, $m, $s) = explode(':', $hora_inicial);
    $hora11 = $h+3;
    $hora12 = ($hora11.":".$m.":".$s);
    $hora_inicial1 = substr($hora12, 0, -3);
    //Data e Horário de saída
    list($h, $m, $s) = explode(':', $hora_inicial);
    $hora1 = $h+5;
    $hora = ($hora1.":".$m.":".$s);
    $hora_final = substr($hora, 0, -3);
    $data1 = "$datatime_inicial";
    $hora1 = "$hora_inicial1";
    $hora2 = "$hora_final";
}
$event = new ICS ( $data1." ".$hora1, $data1." ".$hora2 , "Reunião com Saga Veículos de Luxo" , "Participe da reunião no horário correto para conquistar sua nave", "https://meet.google.com/sff-ddis-vhm");
$event->show();
?>
<?php
$event = new ICS ( $data1." ".$hora1, $data1." ".$hora2 , "Reunião com Saga Veículos de Luxo" , "Participe da reunião no horário correto para conquistar sua nave", "https://meet.google.com/sff-ddis-vhm");
$event->save();
?>
