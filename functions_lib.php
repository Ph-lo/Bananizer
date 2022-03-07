<?php


function weightToBanana($entered_weight){

    $g = 1;
    $banana = 180.56;
    $kg = 1000;
    $t = 1000000;

    if(isset($_POST['weight']) && !empty($_POST['weight'])) {

        if($_POST['weight_unit'] == 'g') {
            
            $result = $entered_weight/$banana;

            if($entered_weight <= $banana) {
            return number_format($result, 2, '.', ' ').' banana'; 
            }
            else {
                return number_format($result, 2, '.', ' ').' bananas';
            }

        } elseif($_POST['weight_unit'] == 'kg') {

            $weight = $entered_weight*$kg;
            $result = $weight/$banana;
            
            if($weight <= $banana) {
                return number_format($result, 2, '.', ' ').' banana';
            } 
            else {
                return number_format($result, 2, '.', ' ').' bananas';
            }

        } elseif($_POST['weight_unit'] == 't') {

            $weight = $entered_weight*$t;
            $result = $weight/$banana;

            if($weight <= $banana) {
                return number_format($result, 2, '.', ' ').' banana';
            } 
            else {
                return number_format($result, 2, '.', ' ').' bananas';
            }
        }
    }
}

function heightToBanana($entered_height) {

    $cm = 1;
    $banana_width = 3.6;
    $banana_length = 16.64;
    $m = 100;
    $km = 100000;
    
    if(isset($_POST['height']) && !empty($_POST['height'])) {

        if($_POST['height_unit'] == 'cm') {
            
            $result1 = $entered_height/$banana_length;
            $result2 = $entered_height/$banana_width;

            if($entered_height <= $banana_length) {
            return number_format($result1, 2, '.', ' ').' banana lengthwise or '.number_format($result2, 2, '.', ' ').' sideways'; 
            }
            else {
                return number_format($result1, 2, '.', ' ').' bananas lengthwise or '.number_format($result2, 2, '.', ' ').' sideways';
            }

        } elseif($_POST['height_unit'] == 'm') {

            $height = $entered_height*$m;
            $result1 = $height/$banana_length;
            $result2 = $height/$banana_width;
            
            if($height <= $banana_length) {
                return number_format($result1, 2, '.', ' ').' banana lengthwise or '.number_format($result2, 2, '.', ' ').' sideways';
            } 
            else {
                return number_format($result1, 2, '.', ' ').' bananas lengthwise or '.number_format($result2, 2, '.', ' ').' sideways';
            }

        } elseif($_POST['height_unit'] == 'km') {

            $height = $entered_height*$km;
            $result1 = $height/$banana_length;
            $result2 = $height/$banana_width;

            if($height <= $banana_length) {
                return number_format($result1, 2, '.', ' ').' banana lengthwise or '.number_format($result2, 2, '.', ' ').' sideways';
            } 
            else {
                return number_format($result1, 2, '.', ' ').' bananas lengthwise or '.number_format($result2, 2, '.', ' ').' sideways';
            }
        }
    }
}

function volumeToBanana($entered_volume) {
    $ml = 1;
    $cl = 10;
    $banana = 177;
    $l = 1000;
    $mcube = 1000000;

    if(isset($_POST['volume']) && !empty($_POST['volume'])) {

        if($_POST['volume_unit'] == 'ml') {
            
            $result = $entered_volume/$banana;

            if($entered_volume <= $banana) {
            return number_format($result, 2, '.', ' ').' banana'; 
            }
            else {
                return number_format($result, 2, '.', ' ').' bananas';
            }

        } elseif($_POST['volume_unit'] == 'cl') {

            $volume = $entered_volume*$cl;
            $result = $volume/$banana;
            
            if($volume <= $banana) {
                return number_format($result, 2, '.', ' ').' banana';
            } 
            else {
                return number_format($result, 2, '.', ' ').' bananas';
            }

        } elseif($_POST['volume_unit'] == 'L') {

            $volume = $entered_volume*$l;
            $result = $volume/$banana;

            if($volume <= $banana) {
                return number_format($result, 2, '.', ' ').' banana';
            } 
            else {
                return number_format($result, 2, '.', ' ').' bananas';
            }

        } elseif($_POST['volume_unit'] == 'mcube') {

            $volume = $entered_volume*$mcube;
            $result = $volume/$banana;

            if($volume <= $banana) {
                return number_format($result, 2, '.', ' ').' banana';
            } 
            else {
                return number_format($result, 2, '.', ' ').' bananas';
            }
        }
    }
}

function areaToBanana($entered_area) {
    $cm2 = 1;
    $banana = 133;
    $m2 = 10000;
    $are = 1000000;
    $hectare = 100000000;
    $km2 = 10000000000;


    if(isset($_POST['area']) && !empty($_POST['area'])) {

        if($_POST['area_unit'] == 'cm2') {
            
            $result = $entered_area/$banana;

            if($entered_area <= $banana) {
            return number_format($result, 2, '.', ' ').' banana'; 
            }
            else {
                return number_format($result, 2, '.', ' ').' bananas';
            }

        } elseif($_POST['area_unit'] == 'm2') {

            $area = $entered_area*$m2;
            $result = $area/$banana;
            
            if($area <= $banana) {
                return number_format($result, 2, '.', ' ').' banana';
            } 
            else {
                return number_format($result, 2, '.', ' ').' bananas';
            }

        } elseif($_POST['area_unit'] == 'are') {

            $area = $entered_area*$are;
            $result = $area/$banana;

            if($area <= $banana) {
                return number_format($result, 2, '.', ' ').' banana';
            } 
            else {
                return number_format($result, 2, '.', ' ').' bananas';
            }

        } elseif($_POST['area_unit'] == 'hectare') {

            $area = $entered_area*$hectare;
            $result = $area/$banana;

            if($area <= $banana) {
                return number_format($result, 2, '.', ' ').' banana';
            } 
            else {
                return number_format($result, 2, '.', ' ').' bananas';
            }
        } elseif($_POST['area_unit'] == 'km2') {

            $area = $entered_area*$km2;
            $result = $area/$banana;

            if($area <= $banana) {
                return number_format($result, 2, '.', ' ').' banana';
            } 
            else {
                return number_format($result, 2, '.', ' ').' bananas';
            }
        } 
    }
}



?>