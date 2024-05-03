<?php

namespace App\Exports;

use App\Interfaces\ContentExport;
use App\Interfaces\FileExport;

class FileXml implements FileExport
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function save(ContentExport $content): string
    {
        $xml = new \SimpleXMLElement("<{$this->name}/>");
        foreach ($content->content() as $key => $value) {
            $xml->addChild($key, $value);
        }

        $path = tempnam(sys_get_temp_dir(),"xml");
        $xml->asXML($path);

        return $path;
    }
}