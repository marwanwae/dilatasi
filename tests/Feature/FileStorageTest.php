<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class FileStorageTest extends TestCase
{
    public function testStorage()
    {
        $fileSystem = Storage::disk("local");
        $fileSystem->put("file.txt", "Belajar Laravel Dasar");

        $content = $fileSystem->get("file.txt");

        $this->assertSame("Belajar Laravel Dasar", $content);
    }
}
