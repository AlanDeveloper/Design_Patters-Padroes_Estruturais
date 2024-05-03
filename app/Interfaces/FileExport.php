<?php

namespace App\Interfaces;

interface FileExport
{
    public function save(ContentExport $content): string;
}