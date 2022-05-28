<?php

function customDateFormat($date){
    return date('d-M-Y', strtotime($date));
}