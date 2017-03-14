<li class="{{ Request::is('revisions*') ? 'active' : '' }}">
    <a href="{!! route('revisions.index') !!}"><i class="fa fa-edit"></i><span>Revisions</span></a>
</li>

<li class="{{ Request::is('messengerThreads*') ? 'active' : '' }}">
    <a href="{!! route('messengerThreads.index') !!}"><i class="fa fa-edit"></i><span>MessengerThreads</span></a>
</li>

<li class="{{ Request::is('messages*') ? 'active' : '' }}">
    <a href="{!! route('messages.index') !!}"><i class="fa fa-edit"></i><span>Messages</span></a>
</li>

<li class="{{ Request::is('participants*') ? 'active' : '' }}">
    <a href="{!! route('participants.index') !!}"><i class="fa fa-edit"></i><span>Participants</span></a>
</li>

<li class="{{ Request::is('settings*') ? 'active' : '' }}">
    <a href="{!! route('settings.index') !!}"><i class="fa fa-edit"></i><span>Settings</span></a>
</li>

<li class="{{ Request::is('adspaces*') ? 'active' : '' }}">
    <a href="{!! route('adspaces.index') !!}"><i class="fa fa-edit"></i><span>Adspaces</span></a>
</li>

<li class="{{ Request::is('advertisements*') ? 'active' : '' }}">
    <a href="{!! route('advertisements.index') !!}"><i class="fa fa-edit"></i><span>Advertisements</span></a>
</li>

<li class="{{ Request::is('pages*') ? 'active' : '' }}">
    <a href="{!! route('pages.index') !!}"><i class="fa fa-edit"></i><span>Pages</span></a>
</li>

<li class="{{ Request::is('stats*') ? 'active' : '' }}">
    <a href="{!! route('stats.index') !!}"><i class="fa fa-edit"></i><span>Stats</span></a>
</li>

