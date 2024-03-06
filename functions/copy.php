<?php
function copy_file(string $file, string $new_files)
{
    copy('./files/'.$file, './files_new/'.$new_files);

}


