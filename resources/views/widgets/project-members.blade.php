<div class="panel is-fullheight">
    <h2 class="panel-heading">
        Project members
        <span class="icon is-pulled-right has-text-info"><i class="fas fa-user"></i></span>
    </h2>
    @foreach($members as $member)
    <a class="panel-block" href="/users/{{ $member->id }}">
        <span class="panel-icon"><i class="fas fa-user" aria-hidden="true"></i></span>
        {{ $member->name }}
    </a>
    @endforeach
</div>
