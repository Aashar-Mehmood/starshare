<?php

$currentMonth = date('M', time());

$getPrevMonth = date_sub(new DateTime($currentMonth), new DateInterval("P1M"));

$prevMonth = date_format($getPrevMonth, "m");