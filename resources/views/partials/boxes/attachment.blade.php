<div class="ibox-content">
    <h3>{{_('General Attachments')}}</h3>
    <ul class="folder-list" style="padding: 0">
        @each('partials.lists.attachments-min', $list, 'attachment', 'partials.lists.no-items')
    </ul>
    <div>
        <a href="" class="btn btn-primary btn-block">{{_('Send File')}}</a>
    </div>
</div>
