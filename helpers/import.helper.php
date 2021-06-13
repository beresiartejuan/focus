<?php
// path extension first
function import(array $options)
{

    if (isset($options['data']) and is_array($options['data'])) {
        foreach ($options['data'] as $key => $value) {
            $$key = $value;
        }
    }
    
    if (isset($options['first'])) require_once $options['path'] . '/' . $options['first'] . '.' . $options['extension'];
    $files = glob($options['path'] . '/*.' . $options['extension']);

    if (isset($options['latest'])) unset($files[$options['path'] . '/' . $options['latest'] . '.' . $options['extension']]);

    foreach ($files as $file) {
        require_once $file;
    }

    if (isset($options['latest'])) require_once $options['path'] . '/' . $options['latest'] . '.' . $options['extension'];
}

?>