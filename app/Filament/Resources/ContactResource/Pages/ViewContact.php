<?php

namespace App\Filament\Resources\ContactResource\Pages;

use App\Filament\Resources\ContactResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewContact extends ViewRecord
{
    protected static string $resource = ContactResource::class;

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $data['user_id'] = auth()->id();

        return $data;
    }

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
