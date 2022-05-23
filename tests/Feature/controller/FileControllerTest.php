<?php

namespace Tests\Feature\controller;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class FileControllerTest extends TestCase
{
    public function testUpload()
    {
        $picture = UploadedFile::fake()->image("marwan.png");

        $this->post("/file/upload", [
            "picture" => $picture,
        ])->assertSeeText("Ok marwan.png");
    }
}
