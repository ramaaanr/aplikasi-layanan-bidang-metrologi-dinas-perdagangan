<?php

namespace App\Livewire\Components\Cards;

use App\Models\TeraJenisA;
use Livewire\Component;
use Livewire\WithPagination;
use Carbon\Carbon;

class CardTableAdmin extends Component
{
  use WithPagination;

  public $tera;
  public $query = "";
  public $queryCategory = "nama_pemohon";
  public $sentenceCaseTitle;
  public $jenisDukungan = 'subsidi';

  public function updatedJenisDukungan($jenisDukungan)
  {
    $this->resetPage();
    $this->render();
  }

  public function isOnDeadline($tanggalCek)
  {
    return Carbon::parse($tanggalCek)->isPast();
  }

  public function getTeraData()
  {
    $model = config("tera.$this->tera.model_tera");
    if ($this->tera == 'tum-bbm') {
      $data = $model::select('id', 'kode_pengajuan', 'nama_pemohon', 'tanggal_pengajuan', 'tanggal_pengujian', 'tanggal_cek_fisik', 'status', 'keterangan')
        ->where("$this->queryCategory", 'LIKE', "%$this->query%")
        ->whereHas('kendaraan', function ($query) {
          $query->whereHas('perusahaan', function ($innerQuery) {
            $innerQuery->where('jenis_dukungan', $this->jenisDukungan);
          });
        })
        ->orderBy('id', 'desc')
        ->paginate(10);
      return $data;
    } else {
      $data = $model::select('id', 'kode_pengajuan', 'nama_pemohon', 'tanggal_pengajuan', 'tanggal_pengujian', 'status', 'keterangan')
        ->where('jenis_tera', $this->tera)
        ->where("$this->queryCategory", 'LIKE', "%$this->query%")
        ->orderBy('id', 'desc')
        ->paginate(10);
      return $data;
    }
  }

  public function setSenteceCaseTitle()
  {
    $words = explode('-', $this->tera);

    $sentenceCase = array_map(function ($word) {
      if ($word == 'bbm') return 'BBM';
      return ucfirst($word);
    }, $words);

    $this->sentenceCaseTitle = implode(' ', $sentenceCase);
  }

  public function updatedQuery()
  {
    $this->resetPage();
    $this->render();
  }

  public function updatedQueryCategory()
  {
    $this->resetPage();
    $this->render();
  }

  public function placeholder()
  {
    return view('components.cards.card-loading-table', ['sentenceCaseTitle' => $this->sentenceCaseTitle]);
  }

  public function mount()
  {
    $this->setSenteceCaseTitle();
  }

  public function render()
  {
    return view('components.cards.card-table-admin', ['dataTera' => $this->getTeraData()]);
  }
}
