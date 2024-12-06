<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Session;

class KitchenStep2FormTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test if the page loads correctly with the kitchen data and quote.
     *
     * @return void
     */
    public function testStep2PageLoadsWithCorrectData()
    {
        // Mock session data
        $kitchenData = [
            'length' => 12,
            'width' => 10,
            'layout' => 'L-Shaped',
            'color' => '#ff5733',
        ];
        $quote = 6000.00;

        // Simulate session data
        Session::put('kitchen', $kitchenData);

        // Visit the page (Step 2 form)
        $response = $this->get(route('wizard.step2'));

        // Make sure that the page loads successfully and contains the data
        $response->assertStatus(200);
        $response->assertViewIs('wizard.step2');
        $response->assertViewHas('kitchen', $kitchenData);
        $response->assertViewHas('quote', $quote);

        // Make sure that the correct values are displayed in the HTML
        $response->assertSee('12 ft x 10 ft'); // Kitchen dimensions
        $response->assertSee('L-Shaped'); // Layout
        $response->assertSee('#ff5733'); // Color (in hex format)
        $response->assertSee('$6000'); // Quote value
    }

    /**
     * Test form submission and validation.
     *
     * @return void
     */
    public function testStep2FormSubmission()
    {
        // Prepare mock session data
        $kitchenData = [
            'length' => 12,
            'width' => 10,
            'layout' => 'L-Shaped',
            'color' => '#ff5733',
        ];
        $quote = 6000.00;

        // Simulate session data
        Session::put('kitchen', $kitchenData);

        // Submit form with valid data
        $response = $this->post(route('wizard.step2'), [
            'email' => 'test@example.com',
            'name' => 'Test User',
        ]);

        // Assert that the form redirects to the next step (step 1)
        $response->assertRedirect(route('wizard.step1'));
    }

    /**
     * Test form submission with missing required fields (validation).
     *
     * @return void
     */
    public function testStep2FormValidation()
    {
        // Mock session data
        $kitchenData = [
            'length' => 12,
            'width' => 10,
            'layout' => 'L-Shaped',
            'color' => '#ff5733',
        ];

        // Simulate session data
        Session::put('kitchen', $kitchenData);

        // Submit form with missing required fields (email and name)
        $response = $this->post(route('wizard.step2'), [
            'email' => '', // Missing email
            'name' => '', // Missing name
        ]);

        // Make sure that the validation fails and the user is redirected back with errors
        $response->assertSessionHasErrors(['email', 'name']);
    }
}
