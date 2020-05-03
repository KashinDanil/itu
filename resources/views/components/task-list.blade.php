<table class="table is-fullwidth app__task-list">
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
            <td class="has-text-right">
                <div class="app__task-list-comments">{{ $task->comments_count }} comments</div>
                {{ $task->updated_at->format('H:i') }}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
