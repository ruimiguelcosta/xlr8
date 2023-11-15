<?php

namespace Tests\Unit;

class ApiTest extends BaseTest
{
    protected array $loginCredentials = [
        'email' => 'admin@admin.com',
        'password' => 'secret',
    ];

    public function test_api_login(): void
    {
        $this->json('POST',config('app.url') . '/api/login', $this->loginCredentials, ['Accept' => 'application/json'])
            ->assertStatus(200);

        $this->assertAuthenticated();
    }

    public function test_have_at_least_one_property()
    {
        $response = $this->json('POST',config('app.url') . '/api/login', $this->loginCredentials, ['Accept' => 'application/json']);
        $token = json_decode($response->content(), true);
        $token = $token['token_type'] . ' ' . $token['access_token'];

        $response = $this->json('GET',config('app.url') . '/api/hotels', $this->loginCredentials, [
            'Accept' => 'application/json',
            'Authorization' => $token,
        ]);

        $data = count($response->json()['data']['properties']);

        $this->assertGreaterThan(0, $data);
    }
}
