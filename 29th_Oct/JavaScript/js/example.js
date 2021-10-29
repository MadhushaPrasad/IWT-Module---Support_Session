var example1 = 123;

hi();
function hi(){

    for (var i =0; i<1 ;i++){
        let ab = "hello";
        console.log(example1 + " Var Value");//var value
        console.log(ab + " Let Value");//let value
        example1 = 12;
    }
}
