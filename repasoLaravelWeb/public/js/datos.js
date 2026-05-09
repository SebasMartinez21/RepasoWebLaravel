function api(){
    const endPoint = "https://jsonplaceholder.typicode.com/albums";
    const divResult = document.getElementById('resultado');
    var ids = [];

    fetch(endPoint)
    .then(function (response){
        return response.json();
    })
    .then(function (data){
        for(let i=0; i<data.length; i++){
            ids.push(data[i].id);
        }

        const id_max = mayorId(ids);
        const id_min = menorId(ids);
        const id_dif = id_max - id_min;

        const result = [
            {
                "id_maximo": id_max,
                "id_minimo": id_min,
                "diferencia": id_dif
            }
        ]

        divResult.innerHTML = '<pre>' + JSON.stringify(result, null, 2) + '</pre>';
    });
}

function mayorId(ids){
    let mayor = ids[0];

    for(let i=0; i<ids.length; i++){
        if(mayor < ids[i]){
            mayor = ids[i];
        }
    }

    return mayor;
}

function menorId(ids){
    let menor = ids[0];

    for(let i=0; i<ids.length; i++){
        if(menor > ids[i]){
            menor = ids[i];
        }
    }

    return menor;
}