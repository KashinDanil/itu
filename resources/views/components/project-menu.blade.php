<aside class="menu">
    <p class="menu-label">
        {{ $project->name }}
    </p>
    <ul class="menu-list">
        <li><a href="{{ $project->path() }}">Info</a></li>
        <li><a href="{{ route('tasks', $project) }}">Tasks</a></li>
        <li><a href="{{ $project->path() }}/wiki">Wiki</a></li>
        <li><a href="{{ $project->path() }}/customer">Customer</a></li>
        <li><a href="{{ $project->path() }}/members">Members</a></li>
        <li><a href="{{ $project->path() }}/activity">Activity</a></li>
    </ul>
</aside>
