$('#login').click(function()
{
    $('.register').hide('slow')
    $('.login').show('slow');
})

$('#register').click(function()
{
    $('.login').hide('slow');
    $('.register').show('slow')
})