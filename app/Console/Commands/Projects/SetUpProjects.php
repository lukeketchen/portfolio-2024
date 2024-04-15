<?php

namespace App\Console\Commands\Projects;

use App\Models\Project;
use Illuminate\Console\Command;

class SetUpProjects extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:set-up-projects';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $copy = <<<EOD
        I wanted to re-create my portfolio as it had been a while since the last update. 

        To build it in the stack I had most knowledge of to get the bulk done then play with some new things.

        I built the weather widget first finishing that late at night. A few days later I had an email from  [daily.dev](http://daily.dev?target=_blank) this was something I created an account for years ago and had forgotten about. I still got the occasional email and happened to actually read it this time.

        The  [blog](https://www.saiyangrowthletter.com/p/how-i-build-side-projects?target=_blank)  linked in the email was talking about designing then building. This Obviously makes a lot of sense but I always got carried away and jumped in to the code to make it up as i went.

        Today with my portfolio I was going to build it properly. with a design first.

        As old mate **Tiger** said in his blog he starts with **[Excalidraw](https://excalidraw.com/).** I had not heard of this before and went over for a look. Also get a look at the article, its pretty good. ([My Excalidraw files](https://excalidraw.com/#json=PVf1HCLAyA426ujWWBapo,aammowPZeaPHEtVufo_4Kg))

        ---

          <img src="/storage/images/projects/excalidraw-portfolio.png"
                   alt="excalidraw-portfolio"
                   class="w-1/2 mx-auto h-auto object-cover rounded-xl">

        ---

        I started whipping up a design while having a blast. It was so good to design first. I was going to smash through this project. 

        After making a design I had a look at Figma but again wasn’t really keen on forking out the dough for some design software. I had just discovered Excalidraw and it was free.

        I started a new Laravel project, Laravel 11, and decided to use Vue.js 3 for the front end. Most of the new projects with work we were going with the composition api in vue. Before recently they had all been the options api. 

        Starting with a fresh install getting everything set up locally it turned to Digital Ocean and Laravel Forge to get the site running on the web from the get go.

        Once it was all set up it was go time. Headphones on, locking in and listening to Edm. Bopping away I was in the zone. All the prep work made this mart super easy. I smashed out the base layouts breaking the design up into sections filling it with boilerplate content.  

        Once the sections were all laid out it made it easier to pick up a section later on to complete it. 

        A few after hours / pre work hours in and it was coming together. The last thing before I went live was to get the projects content in. I decided to change the project pages to display html converted from markup. I am currently writing this in Notion to copy to the database.

        Next stage is to build out the articles page much the same as the projects with markup the main content. 

        After that I might build out a backend to create / edit projects and articles.

        ### Watch this space…
        EOD;

        $this->info('Setting up projects...');

        $project = new Project();
        $project->title = 'Portfolio';
        $project->short_description = 'This portfolio website';
        $project->description = '';
        $project->content = $copy;
        $project->image_url = 'Screenshot-2024-04-11.png';
        $project->github_url = 'https://github.com';
        $project->demo_url = 'https://google.com';
        $project->technologies = 'PHP,Laravel';
        $project->type = 'personal';
        $project->platform = 'web';
        $project->framework = 'laravel';
        $project->status = 'completed';
        $project->start_date = '2021-01-01';
        $project->save();


        $this->info('Projects set up successfully.');
    }
}
