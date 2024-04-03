<?php

namespace App\Livewire;

use App\Filament\Forms\Schemas\ContentBlockTemplate;

use App\Models\TeamMember;
use Livewire\Component;

class TeamMembersBlock extends Component
{
    public function mount($data)
    {
        $this->data = $data;
    }

    public function render()
    {
        return view('livewire.team-members-block', [
            'team_members' => TeamMember::visible()->get()
        ]);
    }

    public static function blockSchema()
    {
        return ContentBlockTemplate::make('team-members');
    }
}
