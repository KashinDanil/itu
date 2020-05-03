<table class="table is-fullwidth app__activity-list">
    <tbody>
        @foreach($latest_activities as $activity)
        <tr>
            <td>
                <a href="#" class="app__activity-list-user">{{ $activity->user->name }}</a>
                {!! $activity->action !!}
            </td>
            <td class="has-text-right">{{ $activity->created_at->format("H:i") }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
