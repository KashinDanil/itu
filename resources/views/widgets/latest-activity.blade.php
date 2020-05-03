<div class="panel is-fullheight">
    <h2 class="panel-heading">
        Latest activity
        <span class="icon is-pulled-right has-text-info"><i class="fas fa-clock"></i></span>
    </h2>
    <div class="panel-block">
        @include('components.activity-list', ['latest_activities' => $latest_activities])
    </div>
</div>
