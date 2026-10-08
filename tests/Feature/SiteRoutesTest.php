<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Mail;
use App\Mail\RequestConsultationForm;

class SiteRoutesTest extends TestCase
{
    public function test_index_page_loads_successfully(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('Ātra un kvalitatīva');
    }

    public function test_index_with_locales(): void
    {
        $responseLv = $this->get('/lv');
        $responseLv->assertStatus(200);
        $responseLv->assertSee('Ātra un kvalitatīva');

        $responseEn = $this->get('/en');
        $responseEn->assertStatus(200);
        $responseEn->assertSee('Fast & High-Quality Web');

        $responseRu = $this->get('/ru');
        $responseRu->assertStatus(200);
        $responseRu->assertSee('Быстрая и качественная разработка');
    }

    public function test_enterprise_subpage_loads_successfully(): void
    {
        $response = $this->get('/enterprise');
        $response->assertStatus(200);
        $response->assertSee('Enterprise Intelligence');

        $responseLv = $this->get('/enterprise/lv');
        $responseLv->assertStatus(200);
        $responseLv->assertSee('Enterprise Intelligence');
    }

    public function test_language_switch_redirects_correctly(): void
    {
        $response = $this->get('/lang/en');
        $response->assertRedirect('/en');

        $responseEnterprise = $this->from('/enterprise/lv')->get('/lang/ru');
        $responseEnterprise->assertRedirect('/enterprise/ru');
    }

    public function test_request_consultation_form_submission(): void
    {
        Mail::fake();

        $response = $this->post('/request-consultation', [
            'name' => 'Jānis Test',
            'email' => 'janis@example.com',
            'phone' => '+371 26645999',
            'budget' => '500 EUR',
            'subject' => 'Mājaslapas izstrāde',
            'message' => 'Labdien, vēlos jaunu mājaslapu.',
        ]);

        $response->assertRedirect();
        $response->assertSessionHas('success');

        Mail::assertSent(RequestConsultationForm::class);
    }
}
