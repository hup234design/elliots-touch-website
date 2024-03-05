<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('services.enabled', false);
        $this->migrator->add('services.title', "Services");
        $this->migrator->add('services.slug', "services");
    }

    public function down(): void
    {
        $this->migrator->delete('services.enabled');
        $this->migrator->delete('services.title');
        $this->migrator->delete('services.slug');
    }
};
