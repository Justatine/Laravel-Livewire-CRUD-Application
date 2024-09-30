<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Posts as PostModel;

class Posts extends Component
{
    public $posts, $title, $content, $post_id;
    public $updateCategory = false;
    public $showModal = false; // To control modal visibility
    protected $listeners = [
        'deleteCategory' => 'destroy'
    ];
    protected $rules = [
        'title' => 'required',
        'content' => 'required'
    ];

    public function render()
    {
        $this->posts = PostModel::orderByDesc('created_at')->get();
        return view('livewire.posts');
    }

    public function resetFields()
    {
        $this->title = '';
        $this->content = '';
    }

    public function store()
    {
        $this->validate();
        try {
            PostModel::create([
                'title' => $this->title,
                'content' => $this->content
            ]);

            session()->flash('status', 'success');
            session()->flash('message', 'Post Created Successfully!!');
            $this->resetFields();
            $this->showModal = false;

        } catch (\Exception $e) {
            session()->flash('error', 'Something goes wrong while creating post!!');
            $this->resetFields();
        }
    }

    public function edit($id)
    {
        $post = PostModel::findOrFail($id);
        $this->title = $post->title;
        $this->content = $post->content;
        $this->post_id = $post->id;
        $this->updateCategory = true;
        $this->showModal = true; 
    }

    public function cancel()
    {
        $this->updateCategory = false;
        $this->resetFields();
        $this->showModal = false; 
    }

    public function update()
    {
        $this->validate();
        try {
            PostModel::find($this->post_id)->fill([
                'title' => $this->title,
                'content' => $this->content
            ])->save();

            session()->flash('status', 'success');
            session()->flash('message', 'Post Updated Successfully!!');

            $this->cancel();

        } catch (\Exception $e) {
            session()->flash('error', 'Something goes wrong while updating post!!');
            $this->cancel();
        }
    }

    public function destroy($id)
    {
        try {
            PostModel::find($id)->delete();
            session()->flash('status', 'success');
            session()->flash('message', 'Post Deleted Successfully!!');
        } catch (\Exception $e) {
            session()->flash('error', 'Something goes wrong while deleting post!!');
        }
    }
}
