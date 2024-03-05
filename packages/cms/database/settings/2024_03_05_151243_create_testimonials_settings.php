<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('testimonials.enabled', false);
        $this->migrator->add('testimonials.title', "Testimonials");
        $this->migrator->add('testimonials.slug', "testimonials");
    }

    public function down(): void
    {
        $this->migrator->delete('testimonials.enabled');
        $this->migrator->delete('testimonials.title');
        $this->migrator->delete('testimonials.slug');
    }
};
