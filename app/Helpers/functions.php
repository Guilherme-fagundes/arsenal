<?php


function url(string $url = null)
{
    if ($url){
        return SITE['base_url'].$url;
    }else{
        return SITE['base_url'];
    }

}
