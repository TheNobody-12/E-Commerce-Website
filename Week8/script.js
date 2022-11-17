function doRemove(id){
    var req = new Request('ajax.php',
    {method: 'post',
    type:'basic',
    headers: {"Content-type":"application/x-www-form-urlencoded; charset=UTF-8"},
    body: 'action=rem&id='+id
    });

    fetch(req)
    .then(response=>{return response.text();})
    .then(remitem);
}

function remitem(data){
    console.log("data: " +data);
    document.getElementById("targetTable").innerHTML=data;
}

function additem(data){
    console.log("data: " +data);
    document.getElementById("targetTable").innerHTML+=data;
}

function doAdd(){
    var req = new Request('ajax.php',
    {method: 'post',
    type:'basic',
    headers: {"Content-type":"application/x-www-form-urlencoded; charset=UTF-8"},
    body: 'action=add'
    });

    fetch(req)
    .then(response=>{return response.text();})
    .then(additem);
}

function reset(){
    var req = new Request('ajax.php',
    {method: 'post',
    type:'basic',
    headers: {"Content-type":"application/x-www-form-urlencoded; charset=UTF-8"},
    body: 'action=reset'

    });

    fetch(req)
    .then(response=>{return response.text();})
    .then(data => {document.getElementById("targetTable").innerHTML=""});
}