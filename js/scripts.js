var datas = new FormData();

datas.append();

$.ajax({
    url: 'http://localhost/horsetrivia/room.php',
    method: 'POST',
    data: datas,
    processData: false
})