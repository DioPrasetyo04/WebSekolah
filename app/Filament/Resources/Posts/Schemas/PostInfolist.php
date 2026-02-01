<?php

namespace App\Filament\Resources\Posts\Schemas;

use App\Models\Post;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class PostInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                TextEntry::make('title'),
                TextEntry::make('slug'),

                TextEntry::make('description')
                    ->columnSpanFull(),

                TextEntry::make('status')
                    ->badge(),

                TextEntry::make('published_at')
                    ->dateTime()
                    ->placeholder('-'),

                TextEntry::make('author_id')
                    ->numeric(),

                TextEntry::make('thumbnail')
                    ->placeholder('-'),

                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),

                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),

                TextEntry::make('deleted_at')
                    ->dateTime()
                    ->visible(fn (Post $record): bool => $record->trashed()),
            ]);
    }
}
