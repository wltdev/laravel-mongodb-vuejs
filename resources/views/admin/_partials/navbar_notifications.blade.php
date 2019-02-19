<?php 
//$notifications_count = Auth::user()->unreadNotifications()->count(); 
    $notifications_count = 2;
?>
    <i class="fa fa-bell-o" style="color: yellow;"></i>
    @if($notifications_count > 0)
        <span class="notification">{{ $notifications_count }}</span>
    @endif
    <p class="hidden-lg hidden-md">
        Notifications
        <b class="caret"></b>
    </p>

</a>
<ul class="dropdown-menu">
    <?php //$notifications = Auth::user()->unreadNotifications()->get(); ?>
    {{-- 
    @forelse($notifications as $n)
    @empty
        <li>
            <a href="javascript:void(0)">empty :(</a>
        </li>
    @endforelse --}}
</ul>