<?php

if(isset($_POST)){
    extract($_POST);
    $operators = array('+', '-', '*', '/', '%', 'x2', '+/-','.', '=');
    $out = '';
    switch($action){
        case 'equal':
            $last = '';
            if(strlen($old)>0) {
                $last = substr($old, -1);
            }
            if($old <> '' and !in_array($last, $operators)){
               $out = eval("return ($old);");
            } else {
                $out = $old;
            }
        break;
        case 'operation':
            $last = '';
            if(strlen($old)>0) {
                $last = substr($old, -1);
            } 
            //echo $last;
            if( in_array($last, $operators) and in_array($num, $operators) ){
                
                    $out = $old;
              
            } else if($old == '' and in_array($num, $operators ) and $num<>'.'){
                $out = '';
            } else {
                $out = $old.$num;
            }
            //do other things like percentage
            if($out<>'' and $num === '%' and !in_array($last, $operators)){
                $out= eval("return ($old)/100;");
            }
            //do other things like square
            if($out<>'' and $num === 'x2' and !in_array($last, $operators)){
                $out= eval("return ($old*$old);");
            }
        break;
        default: $out = $old;
    }
    echo $out;
	?>
            $(document).ready(function(){
                //general
                $('input[type=button]').click(function(){
                    var num = $(this).val();
                    var old = $('#display').html();
                    //this will clear the screen
                    if( num === 'C' ){
                        $('#display').html('');
                        return;
                    }
                    if( num === '=' ){
                        $('#display').html(old);
                        return;
                    }
                    //var str = $('#display').val()+num;
                    $.ajax({
                            url:'ajax.php',
                            type: "POST",
                            data:{'action':'operation','num':num,'old':old},
                            success: function(msg){
                                $('#display').html(msg);
                            }
                        }).error(function(){
                            $('#display').html('Oops! An error occured');}
                           );
                });
                //equal button click
                $('#eql').click(function(){
                    var num = $('#display').html();
                    var old = $('#display').html();
                    $.ajax({
                            url:'ajax.php',
                            type: "POST",
                            data:{'action':'equal', 'num':num, 'old':old},
                            success: function(msg){
                                $('#display').html(msg);
                            }
                        }).error(function(){
                            $('#display').html('Oops! An error occured');}
                           );
                });
            });
        </script>
    </head>
    <body>
	
