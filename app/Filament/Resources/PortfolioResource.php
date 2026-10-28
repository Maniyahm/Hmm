<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PortfolioResource\Pages;
use App\Models\Portfolio;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PortfolioResource extends Resource
{
    protected static ?string $model = Portfolio::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    protected static ?string $navigationLabel = 'Portfolio';

    protected static ?string $modelLabel = 'Project';

    protected static ?string $pluralModelLabel = 'Portfolio';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Project Details')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),
                        Forms\Components\Textarea::make('description')
                            ->required()
                            ->rows(4)
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('image')
                            ->label('Image path or URL')
                            ->required()
                            ->placeholder('images/job.png or https://...')
                            ->helperText('Best for Vercel: use public path like images/my.png (file must be in public/) OR full https URL.')
                            ->columnSpanFull(),
                        Forms\Components\FileUpload::make('upload')
                            ->label('Or upload image')
                            ->image()
                            ->disk('uploads')
                            ->directory('portfolios')
                            ->imageEditor()
                            ->dehydrated(false)
                            ->helperText('Local/XAMPP: upload here. Then commit public/uploads before Vercel deploy.')
                            ->afterStateUpdated(function ($state, Forms\Set $set) {
                                if ($state) {
                                    $set('image', 'uploads/' . (is_array($state) ? ($state[0] ?? '') : $state));
                                }
                            })
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('link')
                            ->label('Project URL')
                            ->url()
                            ->placeholder('https://example.com')
                            ->maxLength(500)
                            ->columnSpanFull(),
                        Forms\Components\Select::make('category')
                            ->options([
                                'website' => 'Website',
                                'app' => 'Mobile App',
                            ])
                            ->required()
                            ->native(false),
                        Forms\Components\TextInput::make('sort_order')
                            ->numeric()
                            ->default(0)
                            ->helperText('Lower number shows first'),
                        Forms\Components\Toggle::make('is_active')
                            ->label('Show on website')
                            ->default(true)
                            ->inline(false),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->getStateUsing(fn ($record) => $record->imageUrl())
                    ->square(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('category')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'website' => 'success',
                        'app' => 'warning',
                        default => 'gray',
                    })
                    ->formatStateUsing(fn (string $state): string => ucfirst($state)),
                Tables\Columns\TextColumn::make('link')
                    ->label('URL')
                    ->limit(30)
                    ->url(fn ($record) => $record->link, true)
                    ->toggleable(),
                Tables\Columns\TextColumn::make('sort_order')
                    ->sortable()
                    ->label('Order'),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->label('Active'),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('sort_order')
            ->reorderable('sort_order')
            ->filters([
                Tables\Filters\SelectFilter::make('category')
                    ->options([
                        'website' => 'Website',
                        'app' => 'Mobile App',
                    ]),
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Active'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPortfolios::route('/'),
            'create' => Pages\CreatePortfolio::route('/create'),
            'edit' => Pages\EditPortfolio::route('/{record}/edit'),
        ];
    }
}
