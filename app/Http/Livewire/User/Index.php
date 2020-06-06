<?php

namespace App\Http\Livewire\User;

use App\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $sortBy;
    public $sortOrder;
    public $keyword;
    public $status;
    public $role;
    public $display;

    public function mount()
    {
        $this->sortBy = 'created_at';
        $this->sortOrder = 'desc';
        $this->keyword = '';
        $this->status = 'all';
        $this->role = 'all';
        $this->display = '10';
    }

    public function updatingKeyword()
    {
        $this->resetPage();
    }

    public function updatingStatus()
    {
        $this->resetPage();
    }

    public function updatingRole()
    {
        $this->resetPage();
    }

    public function updatingSortBy()
    {
        $this->resetPage();
    }

    public function updatingDisplay()
    {
        $this->resetPage();
    }

    public function sort(string $sortby, string $sortOrder): void
    {
        $this->sortBy = $sortby;
        $this->sortOrder = $sortOrder;
    }

    public function render()
    {
        return view('livewire.user.index', [
            'users' => User::query()->select('id', 'name', 'email', 'phone', 'created_at', 'status', 'role')
                            ->searchByKeyword($this->keyword)
                            ->filterStatus($this->status)
                            ->filterRole($this->role)
                            ->orderBy($this->sortBy, $this->sortOrder)
                            ->paginate($this->display)
        ]);
    }
}
