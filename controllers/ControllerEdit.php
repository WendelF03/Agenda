<?php
include ("../config/config.php");
$objEvents=new \Classes\ClassEvents();
$id=filter_input(INPUT_POST,'id',FILTER_DEFAULT);
$date=filter_input(INPUT_POST,'date',FILTER_DEFAULT);
$date2=filter_input(INPUT_POST,'date2',FILTER_DEFAULT);
$time=filter_input(INPUT_POST,'time',FILTER_DEFAULT);
$time2=filter_input(INPUT_POST,'time2',FILTER_DEFAULT);
$title=filter_input(INPUT_POST,'title',FILTER_DEFAULT);
$description=filter_input(INPUT_POST,'description',FILTER_DEFAULT);
$status=filter_input(INPUT_POST,'status',FILTER_DEFAULT);


$start=new \DateTime($date.' '.$time, new \DateTimeZone('America/Sao_Paulo'));
$end=new \DateTime($date2.' '.$time2, new \DateTimeZone('America/Sao_Paulo'));
$objEvents->updateEvent(
    $id,
    $title,
    $description,
    $status,
    $start->format("Y-m-d H:i:s"),
    $end->format("Y-m-d H:i:s")
);
