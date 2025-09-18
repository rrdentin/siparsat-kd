<?php

namespace App\Filament\Pages\Auth;

use Filament\Pages\Page;
use Filament\Auth\Pages\Login;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\TextInput;
use Filament\Auth\Http\Responses\LoginResponse;
use MarcoGermani87\FilamentCaptcha\Forms\Components\CaptchaField;

class LoginCustom extends Login
{
    protected function getForms(): array
    {
        return [
            'form' => $this->form(
                $this->makeForm()
                    ->schema([
                        $this->getEmailFormComponent(),
                        $this->getPasswordFormComponent(),
                        $this->getRememberFormComponent(),
                        // CaptchaField::make('captcha'),
                    ])
                    ->statePath('data'),
            ),
        ];
    }
public function mount(): void
    {
        parent::mount();

        if (app()->environment('production')) {
            $this->form->fill([
                'email' => 'admin@siparsatkd.com',
                'password' => 'password',
                'remember' => true,
            ]);
        }
    }

    public function authenticate(): ?LoginResponse
    {
        // dd(request()->all());
        return parent::authenticate();
    }
}
