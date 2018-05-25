<?php

namespace Tests\Feature;

use App\Report;
use App\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Pagination\LengthAwarePaginator;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReportControllerTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    private $user;

    /**
     *
     */
    public function setUp()
    {
        parent::setUp();

        $this->user = factory(User::class)->create();
        $this->actingAs($this->user);
    }

    /**
     * @test
     * @group feature
     * @group reports
     * @group controllers
     * @return void
     */
    public function shouldReturnPaginatedListOfReports()
    {
        factory(Report::class, 20)->create([
            'user_id' => $this->user,
        ]);

        $response = $this->get(route('reports.index'));

        $response->assertSuccessful();
        $response->assertViewHas('reports');

        $data = $this->getResponseData($response,'reports');
        $this->assertEquals(LengthAwarePaginator::class, get_class($data));
        $this->assertEquals(12, $data->count());
        $this->assertEquals(20, $data->total());
    }

    /**
     * @test
     * @group feature
     * @group reports
     * @group controllers
     * @return void
     */
    public function shouldDeleteReport()
    {
        $report = factory(Report::class)->create([
            'user_id' => $this->user,
        ]);

        $response = $this->delete(route('reports.destroy', $report));

        $response->assertRedirect(route('reports.index'));
        $this->assertEquals(0, Report::count());
    }

    /**
     * @test
     * @group feature
     * @group reports
     * @group controllers
     * @return void
     */
    public function shouldNotAllowDeletionOfAnotherUsersReport()
    {
        $report = factory(Report::class)->create([
            'user_id' => factory(User::class)->create(),
        ]);

        $response = $this->delete(route('reports.destroy', $report));

        $response->assertStatus(403);
    }

    /**
     * @test
     * @group feature
     * @group reports
     * @group controllers
     * @return void
     */
    public function shouldStoreNewReport()
    {
        $response = $this->post(route('reports.store'), [
            'progress' => $this->faker->paragraph,
            'todos' => $this->faker->paragraph,
            'comments' => $this->faker->paragraph,
        ]);

        $response->assertRedirect(route('reports.show', Report::first()));
        $this->assertEquals(1, Report::count());
    }

    /**
     * @test
     * @group feature
     * @group reports
     * @group controllers
     * @return void
     */
    public function shouldValidateStoreParams()
    {
        $response = $this->post(route('reports.store'), []);

        $this->assertEquals(0, Report::count());
        $response->assertSessionHasErrors([
            'progress',
            'todos',
            'comments',
        ]);
    }

    /**
     * @test
     * @group feature
     * @group reports
     * @group controllers
     * @return void
     */
    public function shouldUpdateReport()
    {
        $report = factory(Report::class)->create([
            'user_id' => $this->user,
        ]);

        $response = $this->put(route('reports.update', $report), [
            'progress' => $this->faker->paragraph,
            'todos' => $this->faker->paragraph,
            'comments' => $this->faker->paragraph,
        ]);

        $this->assertEquals(1, Report::count());

        $updated = Report::first();
        $response->assertRedirect(route('reports.show', $updated));
        $this->assertEquals($report->id, $updated->id);
        $this->assertNotEquals($report->progress, $updated->progress);
    }

    /**
     * @test
     * @group feature
     * @group reports
     * @group controllers
     * @return void
     */
    public function shouldValidateUpdateParams()
    {
        $report = factory(Report::class)->create([
            'user_id' => $this->user,
        ]);

        $response = $this->put(route('reports.update', $report), [
            'progress' => null,
        ]);

        $this->assertEquals($report->progress, Report::first()->progress);
        $response->assertSessionHasErrors([
            'progress',
            'todos',
            'comments',
        ]);
    }
}
