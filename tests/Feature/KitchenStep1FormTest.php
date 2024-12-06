<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Route;
use Tests\TestCase;

class KitchenStep1FormTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test if the form is rendered correctly.
     *
     * @return void
     */
    public function testFormIsRenderedCorrectly()
    {
        // Visit the route where the form is located
        $response = $this->get(route('wizard.step1'));

        // Make sure that the page loads successfully
        $response->assertStatus(200);

        // Make sure that the form's HTML contains the required fields
        $response->assertSee('Kitchen');
        $response->assertSee('Length (ft)');
        $response->assertSee('Width (ft)');
        $response->assertSee('Layout Type');
        $response->assertSee('Basic Color Preference');
        $response->assertSee('<button class="step-button w-1/2 ml-auto">Next</button>', false);
    }

    /**
     * Test that the form submits successfully when all required fields are filled.
     *
     * @return void
     */
    public function testFormSubmission()
    {
        // Submit a POST request to the form's action route
        $response = $this->post(route('wizard.step1'), [
            'length' => 10,
            'width' => 12,
            'layout' => 'L-shaped',
            'color' => '#ff0000',
        ]);

        // Make sure that the form submission redirects as expected
        $response->assertRedirect(route('wizard.step2'));
    }

    /**
     * Test that the form validation works correctly for missing fields.
     *
     * @return void
     */
    public function testFormValidation()
    {
        // Submit the form with missing required fields
        $response = $this->post(route('wizard.step1'), [
            // 'length' => 10, // Missing length
            'width' => 12,
            'layout' => 'L-shaped',
            'color' => '#ff0000',
        ]);

        $response->assertSessionHasErrors('length');

        $response = $this->post(route('wizard.step1'), [
            'length' => 10,
            // 'width' => 12, // Missing width
            'layout' => 'L-shaped',
            'color' => '#ff0000',
        ]);

        $response->assertSessionHasErrors('width');
    }
}
