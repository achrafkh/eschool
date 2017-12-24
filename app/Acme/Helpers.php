<?php
function uploadFile($file,$folder='uploads',$disk = 'public')
{
    $folder = rtrim($folder,'/') .'/'. str_random(15).time().'.'.$file->getClientOriginalExtension(); 

    Storage::disk($disk)->put($folder, file_get_contents($file));

    return '/uploads/'.$folder;
}