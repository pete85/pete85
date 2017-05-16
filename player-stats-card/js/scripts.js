$(document).ready(function()
{
    $.getJSON("data/player-stats.json",function(data)
   {
         $.each(data.players,function(key,value)
         {
            var playerName = $('<option />').val(value.player.name.first + ' ' + value.player.name.last).text(value.player.name.first + ' ' + value.player.name.last);
            
            $("#dropDownPlayers").append(playerName);

         });

         $.each(data.players,function(key,value)
         {
            var playerImg = $("#imgPlayer").attr('src', 'assets/' + value.player.info.imageURL);
            
            

         });

    });
});