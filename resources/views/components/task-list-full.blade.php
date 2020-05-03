<table class="table is-fullwidth app__task-list">
    <thead>
        <tr>
            <td>Info</td>
            <td>Assignee</td>
            <td>Priority</td>
            <td class="has-text-right">Update</td>
        </tr>
    </thead>
    <tbody>
        @foreach($tasks as $task)
        <tr>
            <td>
                <div class="app__task-list-tags">
                    <a href="{{ $task->project->path() }}" class="tag is-info">#{{ $task->project->name }}</a>
                    @foreach($task->tags as $tag)
                        <a href="{{ $tag->path() }}" class="tag tag--{{ $tag->slug }}">#{{ $tag->name }}</a>
                    @endforeach
                </div>
                <a href="{{ $task->path() }}">{{ $task->name }}</a>
            </td>
            <td>
                <strong>{{ $task->assignee->name }}</strong>
            </td>
            <td>{{ $task->priority->name }}</td>
            <td class="has-text-right">
                <div class="app__task-list-comments">{{ $task->comments()->count() }} comments</div>
                {{ $task->updated_at->format('H:i') }}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
