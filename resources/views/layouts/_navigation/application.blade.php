<a class="nav-link {{ active('home') }}" href="{{ route('home') }}">
    <i class="fe fe-home mr-1 fe-brand"></i> Dashboard
</a>

<a class="nav-link {{ active('persons.*') }}" href="{{ route('persons.overview') }}">
    <i class="fe fe-users mr-1 fe-brand"></i> Clients <small class="text-muted">(0)</small>
</a>
