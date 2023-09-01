import $ from 'jquery';
$(() => {
    $('[data-item=likes]').each(function () {
        const $container = $(this);

        $container.on('click', function (e) {
            e.preventDefault();

            const type = $container.data('type');

            $.ajax({
                url: '/article/10/like/' + type,
                method: 'POST'
            }).then(function (data) {
                $container.data('type', type === 'like' ? 'dislike' : 'like')

                $container.find('.fa-heart').toggleClass('far fas');
                $container.find('[data-item=likesCount]').text(data.likes);
            });
        });
    });
});