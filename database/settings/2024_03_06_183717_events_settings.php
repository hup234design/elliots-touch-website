<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('events.title', "Events");
        $this->migrator->add('events.slug', "events");
        $this->migrator->add('events.content', null);
        $this->migrator->add('events.per_page', 5);
        $this->migrator->add('events.header_image_id', null);
    }

    public function down(): void
    {
        $this->migrator->delete('events.title');
        $this->migrator->delete('events.slug');
        $this->migrator->delete('events.content');
        $this->migrator->delete('events.per_page');
        $this->migrator->delete('events.header_image_id');
    }
};
