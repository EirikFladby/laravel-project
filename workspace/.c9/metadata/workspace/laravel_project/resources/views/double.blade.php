{"filter":false,"title":"double.blade.php","tooltip":"/laravel_project/resources/views/double.blade.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":21,"column":5},"action":"insert","lines":["@extends('layout')","","@section('content')","    <div class=\"row\">","        <div class=\"col-md-6 col-md-offset-3\">","            <h1>This page shows you your number multiplied by 2. Go ahead, try it!</h1>","            ","            <hr>","            <h3> Enter a number: </h3>","           <!-- go to /double/result when form is filled and submitted-->","            <form method=\"POST\" action=\"/double/result\">","                <div class=\"form-group\">","                    <textarea autocomplete=off name=\"body\" class=\"form-control\" placeholder='If decimal is used remember to use \".\" instead of \",\"'></textarea>","                </div>","                <!-- creating button-->","                <div class=\"form-group\">","                    <button type=\"submit\" class=\"btn btn-primary\">Submit</button>","                </div>","            </form>","        </div>","    </div>","@stop"],"id":1}]]},"ace":{"folds":[],"scrolltop":77.10006713867188,"scrollleft":0,"selection":{"start":{"row":21,"column":5},"end":{"row":21,"column":5},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":25,"mode":"ace/mode/php"}},"timestamp":1485210204024,"hash":"a7329b0851546561f17a478e2e69258736799d8f"}