<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;

    public $titulo;
    public $descripcion;

    public function mount($datos)
    {
        $this->titulo = $datos['titulo'];
        $this->descripcion = $datos['descripcion'];
    }

    public function render()
    {
        return view('livewire.counter');
    }

    public function increment()
    {
        $this->count++;
    }
}
