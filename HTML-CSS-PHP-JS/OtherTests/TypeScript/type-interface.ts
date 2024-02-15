type robot = {
  id: number;
  name: string;
};

const bot: robot = {
  id: 1,
  name: "Megaman",
};

interface human {
  id: number | string;
  name: string;
}

class Person implements human {
  id: number | string;
  name: string;

  constructor(id: number | string, name: string) {
    this.id = id;
    this.name = name;
  }

  getDescription() {
    return `This human's ID is ${this.id} and his name is ${this.name}.`;
  }
}

const john = new Person("John123", "John Doe");
console.log(john.getDescription()); // This human's ID is John123 and his name is John Doe.
