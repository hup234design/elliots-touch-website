<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('social_networks.facebook', "");
        $this->migrator->add('social_networks.twitter', "");
        $this->migrator->add('social_networks.instagram', "");
        $this->migrator->add('social_networks.pinterest', "");
        $this->migrator->add('social_networks.tiktok', "");
        $this->migrator->add('social_networks.linkedin', "");
        $this->migrator->add('social_networks.youtube', "");
    }

    public function down(): void
    {
        $this->migrator->delete('social_networks.facebook');
        $this->migrator->delete('social_networks.twitter');
        $this->migrator->delete('social_networks.instagram');
        $this->migrator->delete('social_networks.pinterest');
        $this->migrator->delete('social_networks.tiktok');
        $this->migrator->delete('social_networks.linkedin');
        $this->migrator->delete('social_networks.youtube');
    }
};
