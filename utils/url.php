<?php
function urlIs(string $value) { 
    return parse_url($_SERVER['REQUEST_URI'])['path'] === $value;
}
