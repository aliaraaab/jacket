<form method="post" action="{{{ URL::current() }}}">
    <p>Are you sure want to delete?</p>

    <ul class="button-group">
        <li><input type="submit" value="Yes" class="button error" /></li>
        <li><a href="#" class="button" onclick="$('#popupOverflow').fadeOut (100); return false;">No</a></li>
    </ul>
</form>
