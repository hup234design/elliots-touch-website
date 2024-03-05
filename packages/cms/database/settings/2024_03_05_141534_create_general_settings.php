<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.site_name', config('app.name'));
        $this->migrator->add('general.site_active', true);
        $this->migrator->add('general.primary_header_menu_id', null);
        $this->migrator->add('general.secondary_header_menu_id', null);
        $this->migrator->add('general.primary_footer_menu_id', null);
        $this->migrator->add('general.secondary_footer_menu_id', null);
    }

    public function down(): void
    {
        $this->migrator->delete('general.site_name');
        $this->migrator->delete('general.site_active');
        $this->migrator->delete('general.primary_header_menu_id');
        $this->migrator->delete('general.secondary_header_menu_id');
        $this->migrator->delete('general.primary_footer_menu_id');
        $this->migrator->delete('general.secondary_footer_menu_id');

    }
};
