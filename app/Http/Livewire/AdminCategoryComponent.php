<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCategoryComponent extends Component
{

    public function deleteCategory($id){
        $category = Category::find($id);
        $category->delete();
        session()->flash('message', 'Category has been deleted successfully');
    }

    use WithPagination;
    public function render()
    {
        $categories = Category::paginate(12);
        return view('livewire.admin-category-component', ['categories'=>$categories]);
    }
}