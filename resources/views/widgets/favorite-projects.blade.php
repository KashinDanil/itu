<div class="panel is-fullheight">
    <h2 class="panel-heading">
        Favorite projects
        <span class="icon is-pulled-right has-text-warning"><i class="fas fa-star"></i></span>
    </h2>
    <div class="panel-block">
        @include('components.project-list', ['projects' => $projects])
    </div>
</div>
