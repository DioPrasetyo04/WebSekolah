<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Illuminate\Support\Str;

class PostForm
{
    public static function schema(): array
    {
        return [
            Section::make()
                ->schema([
                    TextInput::make('title')
                        ->required()
                        ->live(onBlur: true)
                        ->afterStateUpdated(fn (string $operation, $state, callable $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),
                    TextInput::make('slug')
                        ->required()
                        ->disabled()
                        ->dehydrated()
                        ->unique(ignoreRecord: true),
                    RichEditor::make('description')
                        ->required()
                        ->columnSpanFull(),
                ])->columns(2),

            Section::make('Status & Visibility')
                ->schema([
                    Select::make('status')
                        ->options([
                            'draft' => 'Draft',
                            'published' => 'Published',
                        ])
                        ->default('draft')
                        ->required(),
                    DateTimePicker::make('published_at'),
                    Select::make('categories')
                        ->relationship('categories', 'name')
                        ->multiple()
                        ->preload(),
                    TextInput::make('author_id')
                        ->required()
                        ->numeric()
                        ->hidden(), // Usually hidden and auto-filled
                ])->columns(2),

            Section::make('Media')
                ->schema([
                    FileUpload::make('thumbnail')
                        ->image()
                        ->directory('posts/thumbnails')
                        ->columnSpanFull(),
                    Repeater::make('media')
                        ->relationship('media')
                        ->schema([
                            Select::make('type')
                                ->options([
                                    'image' => 'Image',
                                    'video' => 'Video',
                                ])
                                ->required(),
                            FileUpload::make('file_path')
                                ->directory('posts/media')
                                ->required(),
                        ])
                        ->columns(2)
                        ->columnSpanFull(),
                ]),
        ];
    }
}
