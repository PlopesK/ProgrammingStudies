let dados: string[] = ["plopes", "gabriel"];
let dados2: Array<string> = ["plopes", "gabriel"];

let infos: (string | number)[] = [444, "plopes", 4];

/* Tupla */
let boleto: [string, number, number] = ["agua conta", 199.9, 532523];
console.log(boleto);

/* Generics */
function concatArray<T>(...itens: T[]): T[] {
  return new Array().concat(...itens);
}

const numArray = concatArray<number[]>([1, 5], [3]);
const strArray = concatArray<string[]>(["Goku", "Gohan"], ["Vegeta", "Trunks"]);

console.log(numArray);
console.log(strArray);
