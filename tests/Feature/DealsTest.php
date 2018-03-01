<?php

namespace Tests\Feature;

use Tests\TestCase;

class DealsTest extends TestCase
{

    /** @test */
    public function a_user_can_browse_deals()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /** @test */
    public function a_user_can_search_for_a_deal()
    {
        $params = '?minTripStartDate='. date('Y-m-d').'&minStarRating='. rand(1,5);

        $response = $this->get('/'.$params);

        $response->assertSeeText('Reserve');
    }

    /** @test */
    public function a_function_should_return_hotel_Info_key_param(){

        $response = $this->get('/')->getOriginalContent()->getData();

        $this->assertArrayHasKey('deals',$response);
    }

}
