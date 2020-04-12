$(document).ready(function () {
    $('#vmap').vectorMap({
      map: 'indonesia_id',
      enableZoom: true,
      showTooltip: true,
      selectedColor: 'red',
      hoverColor: '#eaeaea',
      onRegionClick: function(event, code, region){
        console.log(event.currentTarget);
        $('#name').html(`<h3>`+ region + `</h3>`)
      }
    });
  });