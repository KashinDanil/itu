<div class="panel is-fullheight">
    <h2 class="panel-heading">
        Important tasks
        <span class="icon is-pulled-right has-text-danger"><i class="fas fa-exclamation-circle"></i></span>
    </h2>
    <div class="panel-block">
        @include('components.task-list', ['tasks' => $tasks])
    </div>
</div>
