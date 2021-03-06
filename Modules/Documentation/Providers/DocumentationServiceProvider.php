<?php namespace Modules\Documentation\Providers;

use Illuminate\Support\ServiceProvider;

class DocumentationServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerBindings();
        $this->registerConsoleCommands();
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

    private function registerBindings()
    {
        $this->app->bind(
            'Modules\Documentation\Repositories\DocumentationRepository',
            'Modules\Documentation\Repositories\Git\GitDocumentationRepository'
        );
    }

    private function registerConsoleCommands()
    {
        $this->app->bind('asgard.docs.update', 'Modules\Documentation\Console\UpdateDocumentationCommand');
        $this->app->bind('asgard.routes.write', \Modules\Documentation\Console\GenerateDocumentationRoutes::class);
        $this->commands([
            'asgard.docs.update',
            'asgard.routes.write',
        ]);
    }
}
