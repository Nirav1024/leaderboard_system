<?php
if (!function_exists('alert')) {
    function alert($type, $info)
    {
        $data = '<div class="alert alert-' . $type . '" role="alert">';
        $data .= ' <div class="alert-body">';
        $data .= $info;
        $data .= '</div>';
        $data .= '</div>';
        return $data;
    }
}
