$('#table-content').html('');
$.ajax({
    url: 'https://api.kawalcorona.com/indonesia/provinsi/',
    type: 'get',
    dataType: 'json',
    success: function(result) { 
        if(result) {
            let data = result;
            let i = 1;
            $.each(data, function(key, item) {
                $('#table-content').append(`
                    <tr>
                        <td>` + i + `</td>
                        <td>` + item.attributes.Provinsi + `</td>
                        <td>` + item.attributes.Kasus_Posi + `</td>
                        <td>` + item.attributes.Kasus_Semb + `</td>
                        <td>` + item.attributes.Kasus_Meni + `</td>
                    </tr>
                `)
                i++;
            });
        } else {
            $('#table-content').html(`
                <h1>Data Kosong</h1>
            `)
        }
    }
})