$('body').append('<img class="bgimg" src="">');

function loadData() {

    var $body = $('body');
    var $wikiElem = $('#wikipedia-links');
    var $nytHeaderElem = $('#nytimes-header');
    var $nytElem = $('#nytimes-articles');
    var $greeting = $('#greeting');

    // clear out old data before new request
    $wikiElem.text("");
    $nytElem.text("");

    // load streetview
    var $backgroundImg = $('.bgimg');
    var $street = $('#street').val();
    var $city = $('#city').val();
    var address = $street + ', ' + $city;

    $backgroundImg.attr("src", "http://maps.googleapis.com/maps/api/streetview?size=600x300&location=" + address + ">");


    //Load NYTimes (AJAX requests)
    var nytimesUrl = "https://api.nytimes.com/svc/search/v2/articlesearch.json?q=" + $city + "&api-key=cf9f26ad236c452d8da50cf5ed35ff86";

    $.getJSON(nytimesUrl, function(data) { //A callback function that is run when the data is successfully returned
        $nytHeaderElem.text("New York Times Articles about " + $city);

        var articles = data.response.docs;
        for (var i = 0; i < articles.length; i++) { //Iterate through the data and display desired information about the data
            $nytElem.append('<li class="article">' +
                '<a href=' + articles[i].web_url + '>' + articles[i].headline.main + '</a>' +
                '<p>' + articles[i].snippet + '</p>' +
              '</li>');
        }
        // console.log(data);
    }).fail(function() { //Error handling. Called when there was an error requesting the data
        $nytHeaderElem.text("New York Times Articles could not be found.");
    });


    // load Wikipedia API
    var wikipediaUrl = "https://en.wikipedia.org/w/api.php?action=opensearch&search=" + $city + "&format=json";

    //One way of handling errors. Display a message if after 8 sec a response does not arrive
    var wikiRequestTimeout = setTimeout(function() {
        $wikiElem.text("Failed to get Wikipedia resources.");
    }, 8000);

    $.ajax(wikipediaUrl, {
        dataType: "jsonp",
    }).done(function (data) { //A callback function that is run when the data is successfully returned

         //Information returned('data') is an array
        var articlesTitles = data[1];   //Titles for articles is the 1st element, which is also an array
        var articlesLink = data[3];     //Links for articles is the 3rd element, which is also an array

        for (var i = 0; i < articlesTitles.length; i++) {
            $wikiElem.append("<li><a href=" + articlesLink[i] + ">" + articlesTitles[i] + "</a></li>");
        };

        clearTimeout(wikiRequestTimeout); // clear/delete/disable the function called by setTimeout.
        // console.log(data);
    });

   return false;
};

$('#form-container').submit(loadData);
