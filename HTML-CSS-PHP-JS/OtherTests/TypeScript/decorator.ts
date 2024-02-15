function apiVersion(version: string) {
  return (target: any) => {
    Object.assign(target.prototype, { __version: version });
  };
}

function MinLength(length: number) {
  return (target: any, key: string) => {
    let _value = target[key];

    const getter = function () {
      return "API: " + _value;
    };

    const setter = function (value: string) {
      if (value.length < length) {
        throw new Error(`Length smaller than ${length}`);
      } else {
        _value = value;
      }
    };

    Object.defineProperty(target, key, {
      get: getter,
      set: setter,
      enumerable: true,
      configurable: true,
    });
  };
}

@apiVersion("v1.0")
class Api {
  @MinLength(3)
  name: string;

  constructor(name: string) {
    this.name = name;
  }
}

const api = new Api("Plopes");
console.log(api.name);
