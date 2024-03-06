<?php

namespace App\Controllers;

class Test extends BaseController
{
    public function test()
    {
        $header = view('templates/header');
        $main = view('test/test');

        // Combine the header and main content
        $data['content'] = $header . $main;

        // Combine all content (header, main, footer)
        $fullContent = $header . $main;
        return $fullContent;
    }
}