<h1 style="text-align: center;">Học laravel tại Unicode</h1>
<?php
// echo date2('Y-m-d H:i:s');
//echo env('APP_ENV');
//echo config('app.env');

if (env('APP_ENV')=='production'){
     //Call api Live 
     echo 'Call api Live';
}
else{
//Call api sandbox 
echo 'Call api Sandbox';
}
