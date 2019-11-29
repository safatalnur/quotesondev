(function($){
   

    //get new quote

    $('#quote-button').on('click', function(e){
        e.preventDefault();

        $.ajax({
            method: 'GET',
            url: qod_data.root_url + '/wp-json/quotes/v1/post'
            // url: wpApiSettings.root + 'wp/v2/posts?filter[orderby]=rand'
        }).done(function(data){
            //return all posts
            //get length of data object, create random number between 0 and total
            //length of the array. make sure to round to a whole number.
            const randomNumber = Math.floor(Math.random()* Math.floor(10));
            const title = (data[randomNumber].title)
            const content =(data[randomNumber].content)
            const quotesURL = (data[randomNumber].quotesURL)
            const quotesSource = (data[randomNumber].quotesSource)

            $('#quotes-content').html(`<i class="fas fa-quote-left"></i>,
                                        <div>
                                            ${content}
                                            <h2>${title};
                                             <a href="${quotesURL}"><span>${quotesSource}</span></a></h2>
                                        </div>
                                        <i class="fas fa-quote-right"></i>`)
        })

    })
{/* <h2>${title}</h2>${content}<h2>${quotesURL}</h2>${quotesSource} */}
$('#submit-button').on('click', function(e) {
    const $title = $('#quote-title').val()
    console.log($title)

    const data = {
        title: $title,
        _qod_quote_source: $source,
        _qod_quote_source_url: $url
    }

    $.ajax ({
        method: 'POST',
        url: qod_data.root_url + '/wp-json/wp/v2/posts',
        data,
        beforeSend: function(xhr) {
            xhr.setRequestHeader('X-WP-nonce', qod_data.nonce)
        }
    })

})

})(jQuery);
