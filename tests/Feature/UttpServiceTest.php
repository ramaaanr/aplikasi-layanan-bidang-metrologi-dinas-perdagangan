<?php

namespace Tests\Feature;

use App\Livewire\Components\TableRowUttp;
use App\Livewire\Components\TableRowUttpJenisAInput;
use App\Services\UttpService;
use Tests\TestCase;

class UttpServiceTest extends TestCase
{
    private UttpService $uttpService;

    protected function setUp(): void
    {
        parent::setUp();
        $this->uttpService = $this->app->make(UttpService::class);
    }

    public function testUttpServiceNotNull()
    {

        self::assertNotNull($this->uttpService);
    }

    public function testStoreUttpServiceSuccess()
    {
        $data = [
            "tera_jenis_c_id" => 1,
            "kapasitas" => "test",
            "kelas" => "test",
            "merek" => "test",
            "tipe" => "test",
            "nomor_seri" => "test",
        ];

        $result = $this->uttpService->store($data, 'timbangan-elektronik-kelas');
        self::assertTrue($result);
    }
}
