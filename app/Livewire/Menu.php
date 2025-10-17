<?php

namespace App\Livewire;

use Livewire\Component;

class Menu extends Component
{

    public $category;

    public $foodItems;

    public function mount()
    {
        $this->foodItems = \App\Models\FoodItem::all();
    }

    public function updatedCategory($value)
    {
        $this->category = $value;

        if ($value === 'all') {
            $this->foodItems = \App\Models\FoodItem::all();
        } else {
            $this->foodItems = \App\Models\FoodItem::where('category_id', $value)->get();
        }
    }

    public function render()
    {
        return view('livewire.menu', [
            'categories' => \App\Models\Category::all(),
        ]);
    }
}
