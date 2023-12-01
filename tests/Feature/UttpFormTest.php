<?php

namespace Tests\Feature;

use App\Livewire\Components\TableRowUttpJenisAInput;
use App\Services\UttpService;

use Tests\TestCase;

class UttpFormTest extends TestCase
{
    private UttpService $uttpService;

    protected function setUp(): void
    {
        parent::setUp();
        $this->uttpService = $this->app->make(UttpService::class);
    }

    public function testUttpJenisAFormSuccess()
    {
        $form = new TableRowUttpJenisAInput();
        $form->boot($this->uttpService);
        $form->kode_pengajuan = '6297389A76';
        $form->merek = "test";
        $form->tipe = "test";
        $form->nomor_seri = "test";
        $form->kapasitas = "test";
        $form->kelas = "test";
        $form->tera = 'timbangan-elektronik-kelas';
        $isSuccess = $form->submit();
        self::assertTrue($isSuccess);
    }
}
