<?php

namespace Tests\Feature\Backend\Projects;

use App\Domains\Auth\Models\User;
use App\Events\Project\ProjectCreated;
use App\Events\Project\ProjectUpdated;
use App\Models\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Event;
use Tests\TestCase;

class UpdateProjectTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function only_admin_can_update_projects()
    {
        $this->actingAs(User::factory()->user()->create());

        $project = Project::factory()->create();

        $response = $this->get(route('admin.projects.edit', $project));

        $response->assertSessionHas('flash_danger', __('You do not have access to do that.'));
    }

    /** @test */
    public function an_admin_can_access_the_edit_projects_page()
    {
        $this->loginAsAdmin();

        $project = Project::factory()->create();

        $response = $this->get(route('admin.projects.edit', $project));

        $response->assertOk();
    }

    /** @test */
    public function admin_can_update_project()
    {
        Event::fake();

        $this->loginAsAdmin();

        $project = Project::factory()->create();

        $response = $this->patch(route('admin.projects.update', $project), [
            'title' => "Fake Title Update",
            'medium' => 'Fake Medium Update',
            'short_description' => 'Fake Short Description Update',
            'description' => 'Fake Description Update',
            'page_content' => '<h1>Fake Page Content Update</h1>',
            'external_url' => 'https://www.example.com/update',
            'started_at' => '10/05/1995',
            'finished_at' => '10/05/2021',
            'is_active' => '1',
        ]);

        $this->assertDatabaseHas(
            'projects',
            [
                'title' => "Fake Title Update",
                'medium' => 'Fake Medium Update',
                'short_description' => 'Fake Short Description Update',
                'description' => 'Fake Description Update',
                'page_content' => '<h1>Fake Page Content Update</h1>',
                'external_url' => 'https://www.example.com/update',
                'started_at' => '10/05/1995',
                'finished_at' => '10/05/2021',
                'is_active' => '1',
            ]
        );

        $response->assertSessionHas(['flash_success' => __('Successfully Updated the Project')]);

        Event::assertDispatched(ProjectUpdated::class);
    }
}
