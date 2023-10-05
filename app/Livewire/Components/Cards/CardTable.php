<?php

namespace App\Livewire\Components\Cards;

use Livewire\Component;
use Livewire\WithPagination;

class CardTable extends Component
{
  use WithPagination;

  public $tera;
  public $sentenceCaseTitle;


  public function getTeraData()
  {
    $model = config("tera.$this->tera.model");
    $data = $model::select('kode_pengajuan', 'nama_pemohon', 'tanggal_pengajuan', 'status', 'keterangan')
      ->where('jenis_tera', $this->tera)
      ->orderBy('tanggal_pengajuan', 'desc')
      ->paginate(5);
    return $data;
  }


  public function mount()
  {
    $words = explode('-', $this->tera);

    $sentenceCase = array_map(function ($word) {
      if ($word == 'bbm') return 'BBM';
      return ucfirst($word);
    }, $words);

    $this->sentenceCaseTitle = implode(' ', $sentenceCase);
  }

  public function render()
  {
    return view('components.cards.card-table', ['dataTera' => $this->getTeraData()]);
  }
}
