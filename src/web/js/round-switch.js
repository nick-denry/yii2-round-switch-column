$(document).ready(function(){
    $(document).on('click', '.yii2-round-switch', function(e) {
        e.preventDefault();
        e.stopPropagation();
        $switch = $(this);
        $switch.removeClass('error');
        $checkbox = $switch.find('input');
        $.post(
            $checkbox.data('action'),
            {
                id: $checkbox.data('id'),
            },
        ).done(function() {
            $checkbox.prop('checked', !$checkbox.prop('checked'));
        }).fail(function() {
            $switch.addClass('error');
        });
    });
});
