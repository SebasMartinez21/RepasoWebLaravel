function mayorCount(){
    const endPoint = "https://fakestoreapi.com/products";
    var resultDiv = document.getElementById("resultado");

    fetch(endPoint)
    .then(function (response){
        return response.json();
    })
    .then(function (data){
        let product = data[0];
        let countProd = data[0].rating.count;

        for(let i=1; i<data.length; i++){
            if(countProd < data[i].rating.count){
                countProd = data[i].rating.count;
                product = data[i];
            }
        }

        resultDiv.innerHTML=`<br> <pre>Objeto → ${product.title} <br> Precio → ${product.price} </pre>`;
        
    });
}