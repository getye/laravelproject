@extends('teacher.teacherlayout')
@section('main')
<style type="text/css">
fieldset {
margin-left:10%;
margin-right:20%;
margin-top:2%;
background-color:#D7FFFF;
font-size: 20px;
}
</style>
<form action ="{{route('tnotice')}}"  method = "post" class="form-group" style="width:70%; margin-left:15%;" enctype="multipart/form-data">
<fieldset>
<h5> Write Your Notice</h5>
<textarea cols="60" rows="9" name="info" maxlength="50000" placeholder="information goes here"></textarea><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="post1" id="pb1" value="Post" />&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" name="Submit"  id="pb1" value="Clear"/>
</fieldset>
@stop 