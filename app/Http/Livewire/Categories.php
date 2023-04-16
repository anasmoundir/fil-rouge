<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categorie as Category;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;


class Categories extends Component
{
    use WithFileUploads;
    public $name;
    public $image;
    protected $listeners = [
    'editCategory' => 'setSelectedCategory',
];

public function setSelectedCategory($id)
{
    $this->selectedCategoryId = $id;
}

public function createCategory()
{
    $validatedData = $this->validate([
        'name' => 'required',
        'image' => 'required',
    ]);

    $category = new Category();
    $category->name = $this->name;
    $category->slug = Str::slug($this->name, '-');
    $category->image = $this->image->store('public/categories');

    $category->save();

    session()->flash('success', 'Category created successfully.');

    $this->reset(['name', 'image']);
}


    public function editCategory($id)
    {
        $category = Category::find($id);
        $this->name = $category->name;
        $this->image = $category->image;
        
    $this->emit('editCategory', $category->id);
    }
    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        session()->flash('success', 'Category deleted successfully.');
    }
    public function render()
    {
        $categories = Category::all();

        return view('livewire.categories', [
            'categories' => $categories,
        ]);
    }
}
