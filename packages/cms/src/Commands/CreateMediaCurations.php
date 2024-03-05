<?php

namespace Hup234design\Cms\Console\Commands;

use Hup234design\Cms\Actions\GenerateMediaCurations;
use Awcodes\Curator\Models\Media;
use Illuminate\Console\Command;

class CreateMediaCurations extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cms:create-media-curations';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create all media curations';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Processing all Media images...');

        $this->newLine();

        $progressBar = $this->output->createProgressBar(Media::count());

        Media::all()->each(function ($media) use ($progressBar) {
            $this->info("Processing media ID {$media->id}");
            try {
                GenerateMediaCurations::execute($media->id);
                $progressBar->advance();
            } catch (\Throwable $e) {
                $this->error('Failed to process ID ' . $media->id);
                $progressBar->advance();
                // Optionally log the exception message
                // Log::error("Error processing media ID {$media->id}: {$e->getMessage()}");
            }
//            $progressBar->advance();
        });

        $progressBar->finish();

        $this->newLine(2);

        $this->info('Processing complete!');
    }
}
