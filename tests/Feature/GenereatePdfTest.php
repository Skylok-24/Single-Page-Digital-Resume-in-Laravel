<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GenereatePdfTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/save-pdf');

        $response->assertStatus(200);

        $response->assertHeader('Content-Type', 'application/pdf');

        // ✅ تأكد أن الهيدر Content-Disposition يحتوي على inline
        $response->assertHeader('Content-Disposition');

        $this->assertStringContainsString(
            'inline',
            $response->headers->get('Content-Disposition')
        );
    }
}
