function affiche_souscategorie(url)
{
  console.log('affiche_souscategorie');
  //console.log(url);
  var request = $.ajax({
    url: url,
    method: "GET"
  });
  //console.log(request);
  request.done(function( data ) {
    $( "#souscategorie" ).empty().append(data);
  });
}




function affiche_form_update(url)
{
  console.log('OK çca marche');
  //console.log(url);
  var request = $.ajax({
    url: url,
    method: "GET"
  });
  //console.log(request);
  request.done(function( data ) {
    $( "#form_update" ).empty().append(data);
  });
}